<?php
$lilo ="";
include ('server.php');
if(isset($_SESSION['username'])){
  $lilo = "Logout" ;
}else{$lilo= "Login" ;} 
  //header('location: home.php');
//}
$nm = $_SESSION['username'] ;
if(!isset($_SESSION['username'])){ 	header('location: login.php');}

//$db = mysqli_connect('sql5.freesqldatabase.com:3306', 'sql5763372', 'EFNXK6QQ9E', 'sql5763372');
//$name=$_SESSION['name'];
$query= "SELECT COUNT(*) FROM patients" ;
$check = mysqli_query($db, $query);
$numuser= mysqli_fetch_array($check);

$query= "SELECT COUNT(*) FROM queue1" ;
$qcheck = mysqli_query($db, $query);
$que= mysqli_fetch_array($qcheck);

// Get the current date
$date = getdate();

// Extract day, month, and year
$day = $date['mday'];
$month = $date['mon'];
$year = $date['year'];

// Display the results
$mode = "Dark mode"
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sidebar Menu</title>
  <script src="https://kit.fontawesome.com/53ee87c959.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/stylee.css" />
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
<link rel="stylesheet" href="css/stylen.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="sidebar">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="images/logo.png" alt="">
      </span>

      <div class="text logo-text">
        <span class="name">ClinicMed </span>
        
      </div>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>

  <div class="menu-bar">
    <div class="menu">

      

      <ul class="menu-links">
      <li class="nav-link">
      
      <a  >
      <i class='bx bx-user icon'></i>
        <span class="text nav-text"><?php echo $nm; ?></span>
      </a>
      </li>
      <hr>
        <li class="nav-link">
          <a href="index.php">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="patients.php">
            <i class='bx bx-user-pin icon'></i>
            <span class="text nav-text">Patients</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="doctor.php">
            <i class='bx bx-plus-medical icon'></i>
            <span class="text nav-text">Doctor</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="queue.php">
            <i class='bx bx-add-to-queue icon'></i>
            <span class="text nav-text">Queue</span>
          </a>
        </li>

        <li class="nav-link">
          <a href="appointment.php">
            <i class='bx bxs-calendar icon'></i>
            <span class="text nav-text">Appointment</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="manusers.php">
            <i class='bx bxs-user-detail icon'></i>
            <span class="text nav-text">Manage Users</span>
          </a>
        </li>
        <hr>

        

      </ul>
    </div>

    <div class="bottom-content">
    
      <li class="">
        <a href="log.php">
          <i class='bx bx-log-out icon'></i>
          <span name="log" class="text nav-text"><?php echo $lilo ?></span>
        </a>
      </li>
      <li class="search-box">
        
        
        </li>
      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text"><?php $mode?></span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>

    </div>
  </div>

</nav>

<section class="home">
  <div class="text">Manage Users
  <section class="page-content">
          <article class="header">
            
            
          <article class="board">
            
            
            
            <form class="form">
              <div class="form-element">
                <label for="start_date"><?php echo "$day / $month / $year" ?></label>
                
              </div>
              <div class="form-element">
                <label for="end_date">WELCOME</label>
                
              </div>
              <div class="form-element">
                <label for="status"></label>
                
              </div>
              

              
            </form>
          </article>
          
        </section>
        </div>
</section>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
