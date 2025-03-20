
<?php 
    require_once "../../config.php";
    require_once "../../config/database.php";
    require_once "../../includes/auth.php";
    // require_once "../../errors.php";
    include "../../layouts/auth.php";

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password1'];
        $title = $_POST['title'];
    
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        //   if (empty($id)) { array_push($errors, "ID is required"); }
        if (empty($firstname)) { array_push($errors, "firstname is required"); }
        if (empty($lastname)) { array_push($errors, "lastname is required"); }
        if (empty($title)) { array_push($errors, "role is required"); }
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}
  

        if (count($errors) == 0 && register($firstname, $lastname, $username, $email, $password_1, $password_2, $title)) {
            header('Location: ../admin/dashboard.php');
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");         

        }
    }
    
?>

<link rel="stylesheet"  type="text/css"  href="<?php echo '/';?>../public/css/stylereg.css">

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