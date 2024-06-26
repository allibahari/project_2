<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title> داشبورد مدیریت </title>
  <style>

  </style>
</head>
<body>
  <nav>
    <div class="sidebar-top">
    <span class="expand-btn">
      </span>
      <h3 style="font-size: 18px;"> سیستم مدیریت کارمندان </h3>
    </div>
    <div class="sidebar-links">
      <ul>
        <li>
          <a href="dashboard.php" class="active" title="Portfolio link">
            <div class="icon">
              <img src="assets/portfolio.svg" title="Portfolio Icon">
            </div>
            <span class="link hide">  داشبورد </span>
          </a>
        </li>
        <li>
          <a href="employees.php" title="Analytics link">
            <div class="icon">
              <img src="assets/analytics.svg" title="Analytics Icon">
            </div>
            <span class="link hide"> افزودن کارمند</span>
          </a>
        </li>
        <li>
          <a href="list_employees.php" title="Performance link">
            <div class="icon">
              <img src="assets/dashboard.svg" title="Performance Icon">
            </div>
            <span class="link hide"> لیست کارمندان</span>
          </a>
        </li>
        <li>
          <a href="report.php" title="Reports Link">
            <div class="icon">
              <img src="assets/reports.svg" title="Reports Icon">
            </div>
            <span class="link hide"> گزارش گیری </span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-footer">
      <button class="user-name-btn"> نام کاربر: <?php echo $_SESSION['username']; ?> </button>
<a href="../logout.php" class="logout-btn" > خروج- از حساب کاربری</a>
    </div>
  </nav>


  <script src="js/script.js"></script>
  <script src="js/scripttime.js"></script>
  <script src="js/all.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
