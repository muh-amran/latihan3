<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../auth/login.php");
  exit;
}

require './../layout/header.php';


require './../layout/sidebar.php';

require './../layout/topbar.php';
require 'content.php';

require './../layout/footer.php';
