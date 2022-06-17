try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE email = :myemail AND login = :mypassword");
	$stmt->bindParam(':myemail', $myemail);
	$stmt->bindParam(':mypassword', $mypass);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	
	if ($rec == "0") {
	 header("location:../login.php?r=0346");
	}else{

    foreach($result as $row)
    {
	$role = $row['role'];
	if ($role == "admin") {
		session_start();
    $_SESSION['logged'] = true;	
	$_SESSION['myid'] = $row['member_no'];
    $_SESSION['compname'] = $row['first_name'];
	
    $_SESSION['myemail'] = $row['email'];
   
	$_SESSION['comptype'] = $row['title'];
	
	$_SESSION['avatar'] = $row['avatar'];
	
	$_SESSION['lastlogin'] = $row['last_login'];

	$_SESSION['role'] = $role;
	header("location:../Admin/index.php");
	
	}

	

	}
	
	}

					  
	}catch(PDOException $e)
    {

    }
