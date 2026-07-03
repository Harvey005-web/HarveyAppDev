<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: loginActA.php");
    exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card p-4">

<h2>

Welcome

<?php

echo htmlspecialchars($_SESSION['username']);

?>

</h2>

<p>

You are successfully logged in.

</p>

<a href="logoutActA.php" class="btn btn-danger">

Log Out

</a>

</div>

</div>

</div>

</div>

</body>

</html>