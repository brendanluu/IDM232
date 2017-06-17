<?php
  // 1. Create database connection
  //
  // Define constants rather than regular variables.
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'imbluu5_root');
  define('DB_PASS', 'innovation123');
  define('DB_NAME', 'imbluu5_idm232-courses');
  // Connect using the constants
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if (mysqli_connect_errno()) {
    die ('Database connection failed: ' .
        mysqli_connect_error() .
        ' )' . mysqli_connect_errno() . ')'
    );
  }
  echo "connected";
?>
