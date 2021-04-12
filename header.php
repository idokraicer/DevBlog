<?php
	include_once 'includes/functions.php';
	
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Ido Kraicer's Blog</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <script src="assets/js/functions.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- FontAwesome JS-->
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    

</head> 

<body>


<header class="header text-center">
		<span id='data'></span>
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.php">Ido's Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image" >			
					
					<div class="bio mb-3">Hello, I'm Ido Kraicer <br> Web designer<br><a href="about.php">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.php"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
					<?php if(!isset($_SESSION['login'])): ?>
					<li class="nav-item">
						<div class="dropdown show">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-lock mr-2"></i>Login / Signup</a>
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#" onclick="Login()">Login</a> <!-- Login -->
								<a class="dropdown-item" href="#" onclick="SignUp()">Signup</a>
							</div>
						</div>
					</li>
					<?php endif?>
					<?php if(isset($_SESSION['login'])): ?>
						<li class="nav-item">
							<a class="nav-link" id='logoutLink' href="#" onclick="logout()" ><i class="fas fa-lock-open fa-fw mr-2"></i>Hello <?= $_SESSION['login'] ?>, Logout?</a>
						</li>
					<?php endif?>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="newPost.php" target="_blank">Upload a new post!</a>
				</div>
			</div>
		</nav>
    </header>
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		<div class="pl-3 pr-3">
		<?php
			if(isset($_GET['action'])) {
				switch ($_GET['action']) {
					case 'success':
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
											<strong>Very nice! you're now logged in as ".$_SESSION['login']."</strong>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
											<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
					break;
					case 'WrongCredentials':
						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
								<strong>Wrong UserName / Password.</strong>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
								</button>
							</div>";
					break;
					case 'sql_error':
						echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
								<strong>Sql error!</strong>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
								</button>
                    		</div>";
					break;
					case 'reg_success':
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Very nice! you're now signed up and logged in as ".$_SESSION['login'].". </strong>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
					break;
					case 'logout_success':
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Very nice! you're now logged out. </strong>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
						</div>";
					break;
					case 'postUploaded':
						echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>Very nice! you have posted a new post. </strong>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
						</div>";
					break;
					case 'default':
						echo "";
				}
			}
		?></div>

            <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	
	

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>   