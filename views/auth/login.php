
<?php 
    require_once "config.php";
    require_once "config/database.php";
    require_once "includes/auth.php";
    // require_once "../../errors.php";
    include "layouts/auth.php";

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
  
        if (count($errors) == 0 && login($username, $password)) {
            header('Location: /admin/dashboard');
            exit();
        }
    }
    
?>

<div class="container">
    <div class="screen ">
        <div class="screen__content">
            <form class="login" method="post" action="/login">
                <div class="login__field">
                <?php include('errors.php'); ?>
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" class="login__input" 
                                placeholder="Username" name="username">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" placeholder="Password" name="password">
                </div>
                <button class="button login__submit" type="submit" name="login_user">
                    <span class="button__text">Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>				
            </form>
            <div class="social-login">
                <h3>Not yet a member?<br><a href="/register">Sign up</a></h3>
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