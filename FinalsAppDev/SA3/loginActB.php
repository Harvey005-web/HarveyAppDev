<?php

session_start();

if(isset($_SESSION['username']))
{
    header("Location: homeActB.php");
    exit();
}


include("database.php");

if(isset($_COOKIE['username']))
{
    $cookie_username = $_COOKIE['username'];
}
else
{
    $cookie_username = "";
}

if(isset($_COOKIE['password']))
{
    $cookie_password = $_COOKIE['password'];
}
else
{
    $cookie_password = "";
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<h2 class="mb-4">Login Form</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">

<div class="mb-3">

<label class="form-label">Username</label>

<input
type="text"
name="username"
class="form-control"
value="<?php echo $cookie_username; ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">Password</label>

<input
type="password"
name="password"
class="form-control"
value="<?php echo $cookie_password; ?>"
required>

</div>

<div class="form-check mb-3">

<input
class="form-check-input"
type="checkbox"
name="remember">

<label class="form-check-label">

Remember Me

</label>

</div>

<button type="submit" class="btn btn-success w-100">

Login

</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

$row = mysqli_fetch_assoc($result);

$_SESSION['id'] = $row['id'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['middlename'] = $row['middlename'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['username'] = $row['username'];
$_SESSION['birthday'] = $row['birthday'];
$_SESSION['email'] = $row['email'];
$_SESSION['contact'] = $row['contact'];
$_SESSION['password'] = $row['password'];

if(isset($_POST['remember']))
{

setcookie("username",$username,time()+3600,"/");

setcookie("password",$password,time()+3600,"/");

}
else
{

setcookie("username","",time()-3600,"/");

setcookie("password","",time()-3600,"/");

}

header("Location: homeActB.php");

exit();

}
else
{

echo '

<div class="alert alert-danger mt-3">

Invalid Username or Password.

</div>

';

}

}

?>

<p class="mt-3">

Don't have an account?

<a href="registerActB.php">Register Here</a>

</p>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>