<?php
require_once "config.php";
require_once "config/database.php";
require_once "includes/auth.php";
include "layouts/admin.php";
$lilo ="";

//ensure only logged in Session can view this page
requireLogin();


// $query= "SELECT COUNT(*) FROM patients" ;
// $check = mysqli_query($conn, $query);
// $numuser= mysqli_fetch_array($check);

// $query= "SELECT COUNT(*) FROM queue1" ;
// $qcheck = mysqli_query($conn, $query);
// $que= mysqli_fetch_array($qcheck);


// Get the current date
$date = getdate();
// // Extract day, month, and year
$day = $date['mday'];
$month = $date['mon'];
$year = $date['year'];

// // Display the results
$mode = "Dark mode"
?>
<!-- partial:index.partial.html -->

<section class="home">
  <div class="text">Appointments 
      <div class="ti">
        <t id="currtime"> |</t>
        <t>  | </t>
        <t id="day" ></t>
        <t id="month" ></t>
        <t id="year" ></t>
      </div>
    <section class="page-content">
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

<script  src="<?php echo '/';?>../public/js/time.js"></script>
<script type="text/javascript">
    const d = new Date()
    dd= d.getDate(), mm= d.getMonth(), yyyy= d.getFullYear();

    document.getElementById("day").innerHTML =  d.getDate() ;
    document.getElementById("month").innerHTML = d.getMonth() + 1 ;
    document.getElementById("year").innerHTML =  d.getFullYear();
</script>