<?php
session_start();
echo "Your order is cancel";
session_destroy();
session_unset();
header("Location:index.php");
?>
