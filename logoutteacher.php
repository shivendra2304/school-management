<?php
session_start();
session_destroy();
header('Location: teachercorner.php');

exit;
?>