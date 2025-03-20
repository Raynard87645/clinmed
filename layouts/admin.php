<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ClinicMed | Home</title>
  <link rel = "icon" href="<?php echo '/';?>../public/images/logo.png" >
  <script src="https://kit.fontawesome.com/53ee87c959.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo '/';?>../public/css/dashstyle.css" />
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
<link rel="stylesheet" href="<?php echo '/';?>../public/css/stylen.css">

</head>
    <body>
        <?php include "./navbar/admin.php";?>
        <section class="home">
            <?php include basename($_GET['page']).'.php'; ?>
        </section>

        <script  src="<?php echo '/';?>../public/js/script.js"></script>
        
    </body>
</html>