<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/public/images/logo.png" class="logo" alt = "Logo">
      <!-- <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
      ClinMed
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
            <li class="nav-item">
              <a class="nav-link <?php  echo $_SERVER['REQUEST_URI'] == '/' ?'active' :'' ?>" aria-current="page" href="/">Home</a>
            </li>
            <?php if($_SESSION['username']){ ?>
            <li class="nav-item">
              <a class="nav-link  <?php  echo $_SERVER['REQUEST_URI'] == '/admin/dashboard' ?'active' :'' ?>" href="/admin/dashboard">Dashboard</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link  <?php  echo $_SERVER['REQUEST_URI'] == '/contact' ?'active' :'' ?>" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
        <?php if($_SESSION['username']){ ?>
          <div class="navbar-text">
              <a href="/includes/logout.php" class="btn btn-primary ms-3">Logout</a>
          </div>
        <?php } else { ?>
          <div class="navbar-text">
              <a href="login" class="btn btn-primary ms-3">Login</a>
          </div>
        <?php } ?>
    </div>
</nav>