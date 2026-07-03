<?php

session_start();

include("database.php");

if(!isset($_SESSION['username']))
{
    header("Location: loginActB.php");
    exit();
}

$message = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$current = $_POST['current_password'];
$new = $_POST['new_password'];
$confirm = $_POST['confirm_password'];

if($current != $_SESSION['password'])
{

$message = '<div class="alert alert-danger">
Current password is not the same with the old password.
</div>';

}
else if($new != $confirm)
{

$message = '<div class="alert alert-danger">
New password and Re-Enter new password should be the same.
</div>';

}
else
{

$username = $_SESSION['username'];

$sql = "UPDATE users
SET password='$new'
WHERE username='$username'";

if(mysqli_query($conn,$sql))
{

$_SESSION['password'] = $new;

$message = '<div class="alert alert-success">
Password changed successfully.
</div>';

}

}

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

<div class="col-md-7">

<div class="card p-4">

<div class="d-flex justify-content-between align-items-center">

    <h2>User Information</h2>

    <a href="logoutActB.php" class="btn btn-danger">
        Log Out
    </a>

</div>

<hr>

<h4>

Welcome

<?php

echo htmlspecialchars($_SESSION['firstname'])." ".
htmlspecialchars($_SESSION['middlename'])." ".
htmlspecialchars($_SESSION['lastname']);

?>

</h4>

<p>

<strong>Birthday:</strong>

<?php echo htmlspecialchars($_SESSION['birthday']); ?>

</p>

<p>

<strong>Email:</strong>

<?php echo htmlspecialchars($_SESSION['email']); ?>

</p>

<p>

<strong>Contact:</strong>

<?php echo htmlspecialchars($_SESSION['contact']); ?>

</p>

<hr>

<h4>Reset Password</h4>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<div class="mb-3">

<label class="form-label">

Enter Current Password

</label>

<input
type="password"
name="current_password"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Enter New Password

</label>

<input
type="password"
name="new_password"
class="form-control"
required>

</div>

<div class="mb-4">

<label class="form-label">

Re-Enter New Password

</label>

<input
type="password"
name="confirm_password"
class="form-control"
required>

</div>


<button
type="submit"
class="btn btn-success w-100">

Reset Password

</button>

</form>

<br>

<?php

echo $message;

?>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>