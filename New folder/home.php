<?php

include ('server.php');
//if(isset($_SESSION['username'])){
  //header('location: home.php');
//}
if (isset($_POST['log'])){
if(!isset($_SESSION['username'])){ 	header('location: login.php');}
else{header('location: logout.php');}
}


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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClinicMed | Home</title>
    <link rel="stylesheet" href="css/alll.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/53ee87c959.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <header>
        <!-- Carrotsuite navigation -->
        <nav class="carrotsuite-nav">
          <div class="logo">
            
            <a href="index.html" class="active nav-item">
              <img src="images/cmlogo.png" alt="logo" />
            </a>
          </div>

          
          <div class="icons right">
            
            
          </div>
          <div class="user" id="user">
            <a href="#" class="user-link"><?php echo $username; ?></a>
            <div class="user-img-wrapper">
              <img src="images/useravatar.png" alt="User 1" />
            </div>
          </div>
        </nav>
        <!-- end of feeds navigation -->
      </header>
      <main class="main">
        <section class="sidebar">
          
          <ul class="menu">
            <li>
              <a href="index.php" >
                <i class="fas fa-home"></i>
                <span>Home</span>
              </a>
            </li>
            
            <li>
              <a href="patients.php" class="active" title="Clients">
                <i class="fas fa-users"></i>
                <span>Patients</span>
              </a>
            </li>
            <li>
              <a href="users.php" class="active" title="Clients">
              <i class="fa-solid fa-user"></i>
                <span>Users</span>
              </a>
            </li>
	<li>
              <a href="doctors.php" title="Clients">
                <i class="fa fa-user-md"></i>
                <span>Doctors</span>
              </a>
            </li>
           
    
            <li>
              <a href="queue.php" title="Activity report">
                <i class="fas fa-user-friends"></i>
                <span>Queue</span>
              </a>
            </li>
            <li>
              <a href="appoint.php" title="Activity report">
                <i class="fas fa-calendar-alt"></i>
                <span>Appointment</span>
              </a>
            </li>
            
          </ul>
        </section>
        <section class="page-content">
          <article class="header">
            
            
          <article class="board">
            
            <section class="boxes">
              <div class="box bg-pink">
                <p>All Patients</p>
                <div class="icon-value">
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <p class="value"><?php echo $numuser[0] ?></p>
                </div>
              </div>
              <div  class="box bg-purple" href="queue.php">
                <p>Queue</p>
                <div class="icon-value">
                  <div class="icon">
                    <i class="fas fa-exchange-alt"></i>
                  </div>
                  <p class="value"><?php echo $que[0] ?></p>
                </div>
              </div>
              
              
              
              
            </section>
            
            <form class="form">
              <div class="form-element">
                <label for="start_date"><?php echo "$day / $month / $year" ?></label>
                
              </div>
              <div class="form-element">
                <label for="end_date"></label>
                
              </div>
              <div class="form-element">
                <label for="status"></label>
                
              </div>
              

              
            </form>
          </article>
          
        </section>
      </main>
    </div>
    
  </body>
</html>
