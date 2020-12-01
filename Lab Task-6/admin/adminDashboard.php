<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="adminDashboard.css">
</head>

<body>
     <?php
     include 'header_admin.html';
     include 'sidebar_admin.html';
     ?>

     <div class="main">
          <div class="welcome_text column" id="col-2">
               <h1 class="text_dark center_align">Welcome Admin <span style="color: dodgerblue;"><?php echo $_SESSION['username']; ?></span> </h1>
          </div>
          <div>
               <h3>Total Users : <span style="color: dodgerblue;">125</span></h3>
               <h3>Total Editors : <span style="color: dodgerblue;">5</span></h3>
               <h3>Total Visitors this week : <span style="color: dodgerblue;">301</span></h3>
               <h3>Total posts this week : <span style="color: dodgerblue;">22</span></h3>
          </div>
     </div>
     <?php
     include '../footer.php';
     ?>
</body>

</html>