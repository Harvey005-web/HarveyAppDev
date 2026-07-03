<?php

session_start();

session_destroy();

header("Location: loginActA.php");

exit();

?>