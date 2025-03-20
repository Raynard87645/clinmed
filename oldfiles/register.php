<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ClinicMed | register</title>
  <link rel="stylesheet"  type="text/css"  href="css/stylereg.css">
  <link rel = "icon" href="images/logo.png" 
        type = "image/x-icon">
</head>
<body>
      
  
  <div class="container">
	<div class="screen">
	<div class="screen__content">
	<form class="login" method="post" action="register.php">
  <?php include('errors.php'); ?>
		<div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="ID" name="id">
				</div>
        <div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="Username" name="username">
				</div>
        <div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="First Name" name="firstname">
				</div>
        <div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="Last Name" name="lastname">
				</div>
        <div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="E-mail" name="email">
				</div>
			<div class="login__field">
			<i class="login__icon fas fa-lock"></i>
			<input type="password" class="login__input" 
                        placeholder="Password" name="password">
		</div>
    <div class="login__field">
			<i class="login__icon fas fa-lock"></i>
			<input type="password" class="login__input" 
                        placeholder="confirm Password" name="password1">
		</div>
    <div class="login__field">    
			<i class="login__icon fas fa-user"></i>
			<input type="text" class="login__input" 
                        placeholder="Admin/Doctor/Clerk" name="title">
				</div>
		<button class="button login__submit"
                type="submit" name="reg_user">
		<span class="button__text">REGISTER</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
</form>
	<div class="social-login">
	<h3>Already a member?<br><a href="login.php">Login</a></h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>