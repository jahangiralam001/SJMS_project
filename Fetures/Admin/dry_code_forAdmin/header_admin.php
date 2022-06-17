
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Job Guider - Company Profile</title>
	<meta name="description" content="Student Job Management" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="Guider">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Job Guider" />
    <meta property="og:description" content="Student Job Management" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">
	 
	<link href="../css/style.css " rel="stylesheet">
	<!-- <link href="css/style.css " rel="stylesheet"> -->
	<link href="../css/nav.css " rel="stylesheet">
	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/logo.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
					<ul class="nav navbar-nav" id="responsive-menu">
						
						<li>
						
							<a href="./Home.php">Home</a>
							
						</li>
						
						<li>
							<a href="./job-list.php">Jobs</a>

						</li>
				 
						<li>
							<a href="./company_list.php">Companies</a>
						</li>
						
						<li>
						<a href="./students.php">Students</a>
						</li>
						
						<li>
							<a href="./contact.php">Contact Us</a>
						</li>

					</ul>
				
					</div>
					<!-- class="nav-mini-wrapper" -->
					<div class="nav-mini-wrapper"> 
						<ul class="nav-mini sign-in">
						<div class="menu-bar">
							<!-- <li><a href="../logout.php">logout</a></li> -->
							<li><a href="./"><span class="text-primary"><?php echo "$compname"; ?></span> <i class="fa fa-caret-down"></i> </a></li>
						
							<div class="dropdown-menu">
								<ul>
								<li  class="active">
                                                <a href="./"><i class="fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="">
                                            <a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
                                            </li>
                
                                            <li>
                                                <a href="../company.php?ref=<?php echo "$myid"; ?>"><i class="fa fa-briefcase"></i> Company Overview</a>
                                            </li>
                                            <li>
                                                <a href="my-jobs.php"><i class="fa fa-bookmark"></i> Posted Jobs</a>
                                            </li>
                                            <li>
                                                <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
								</ul>
							</div>
							
							

						</ul>
						</div>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>






		