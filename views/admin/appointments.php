<?php
require_once "../../config.php";
require_once "../../config/database.php";
require_once "../../includes/auth.php";
include "../../layouts/admin.php";
$lilo ="";

//ensure only logged in Session can view this page
requireLogin();





// // Display the results
$mode = "Dark mode"
?>
<!-- partial:index.partial.html -->

<?php include "../../layouts/navbar/adminsidebar.php"; ?>

<div class="home">
  <div class="text">Appointments 
      <div class="ti">
        <t id="currtime"> |</t>
        <t>  | </t>
        <t id="day" ></t>
        <t id="month" ></t>
        <t id="year" ></t>
      </div>
  </div>
  <section class="px-5">
    <div class="row">
      <div class="col-sm-3">
        <div class="card quick-card large-rounded">
          <div class="card-body">
            <div class="d-flex quick-display-box-1">
              <i class='bx bx-home-alt icon grey'></i>
              <div>
                <h5 class="card-title"><strong>324</strong></h5>
                <p class="card-text">Total booking.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card quick-card large-rounded">
          <div class="card-body">
            <div class="d-flex quick-display-box-1">
              <i class='bx bxs-calendar icon grey'></i>
              <div>
                <h5 class="card-title"><strong>314</strong></h5>
                <p class="card-text">Success booking.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card quick-card large-rounded">
          <div class="card-body">
            <div class="d-flex quick-display-box-1">
              <i class='bx bx-plus-medical icon grey'></i>
              <div>
                <h5 class="card-title"><strong>12</strong></h5>
                <p class="card-text">Cancled booking.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card quick-card large-rounded">
          <div class="card-body">
            <div class="d-flex quick-display-box-1">
              <i class='bx bx-user-pin icon grey'></i>
              <div>
                <h5 class="card-title"><strong>36764</strong></h5>
                <p class="card-text">Total Revenue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-7">
        <div class="card display-table large-rounded mt-4">
          <div class="card-body">
              <div class="d-flex justify-content-between">
              <h5>Upcoming Appointments</h5>
                <div class="btn-group">
                  <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card display-table large-rounded mt-4">

        </div>
      </div>
      <div class="col-md-5">
        <div class="card display-table large-rounded mt-4"></div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="card display-table large-rounded mt-4">
          <div class="card-body">
              <div class="d-flex justify-content-between">
              <h5>Prescriptions</h5>
                <div class="btn-group">
                  <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>




<script  src="<?php echo '/';?>../public/js/time.js"></script>
<script type="text/javascript">
    const d = new Date()
    dd= d.getDate(), mm= d.getMonth(), yyyy= d.getFullYear();

    document.getElementById("day").innerHTML =  d.getDate() ;
    document.getElementById("month").innerHTML = d.getMonth() + 1 ;
    document.getElementById("year").innerHTML =  d.getFullYear();
</script>