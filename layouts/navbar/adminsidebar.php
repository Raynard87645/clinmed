
<?php 
    $nm = $_SESSION['name']??$_SESSION['username'] ;
?>


<nav class="sidebar">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="/public/images/logo.png" alt="">
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
      <li class="nav-link p-0">
      
      <a  >
      <i class='bx bx-user icon'></i>
        <span class="text nav-text"><?php echo $nm; ?></span>
      </a>
      </li>
      <hr>
        <li class="nav-link p-0">
          <a href="/views/admin/dashboard.php">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-link p-0">
          <a href="/views/admin/patients.php">
            <i class='bx bx-user-pin icon'></i>
            <span class="text nav-text">Patients</span>
          </a>
        </li>

        <li class="nav-link p-0">
          <a href="/views/admin/doctors.php">
            <i class='bx bx-plus-medical icon'></i>
            <span class="text nav-text">Doctor</span>
          </a>
        </li>

        <li class="nav-link p-0">
          <a href="/views/admin/queue.php">
            <i class='bx bx-add-to-queue icon'></i>
            <span class="text nav-text">Queue</span>
          </a>
        </li>

        <li class="nav-link p-0">
          <a href="/views/admin/appointments.php">
            <i class='bx bxs-calendar icon'></i>
            <span class="text nav-text">Appointments</span>
          </a>
        </li>
        <li class="nav-link p-0">
          <a href="/views/admin/management/users.php">
            <i class='bx bxs-user-detail icon'></i>
            <span class="text nav-text">Manage Users</span>
          </a>
        </li>
        <hr>

        

      </ul>
    </div>

    <div class="bottom-content">
    
      <li class="">
        <a href="/includes/logout.php">
          <i class='bx bx-log-out icon'></i>
          <span name="log" class="text nav-text">Logout</span>
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