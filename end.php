<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
session_destroy();
header('location:./index.php');
?>
<!DOCTYPE html>
<html>
</html>