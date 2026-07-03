<!DOCTYPE html>
<html>
<head>

<title>Registration Form</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<h2 class="mb-4">Registration Form</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">

<div class="mb-3">

<label class="form-label">First Name</label>

<input
type="text"
name="firstname"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Middle Name</label>

<input
type="text"
name="middlename"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Last Name</label>

<input
type="text"
name="lastname"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Confirm Password</label>

<input
type="password"
name="confirm"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Birthday</label>

<input
type="date"
name="birthday"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Contact Number</label>

<input
type="text"
name="contact"
class="form-control"
required>

</div>

<button
type="submit"
class="btn btn-success w-100">

Submit

</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if($_POST['password']!=$_POST['confirm'])
{

echo '

<div class="alert alert-danger mt-4">

Password and Confirm Password are not the same.

</div>

';

}
else
{

echo '

<div class="card mt-4 p-4 bg-light">

<h4>Submitted Information</h4>

<p><strong>First Name:</strong> '.htmlspecialchars($_POST['firstname']).'</p>

<p><strong>Middle Name:</strong> '.htmlspecialchars($_POST['middlename']).'</p>

<p><strong>Last Name:</strong> '.htmlspecialchars($_POST['lastname']).'</p>

<p><strong>Username:</strong> '.htmlspecialchars($_POST['username']).'</p>

<p><strong>Password:</strong> '.htmlspecialchars($_POST['password']).'</p>

<p><strong>Birthday:</strong> '.htmlspecialchars($_POST['birthday']).'</p>

<p><strong>Email:</strong> '.htmlspecialchars($_POST['email']).'</p>

<p><strong>Contact Number:</strong> '.htmlspecialchars($_POST['contact']).'</p>

</div>

';

echo '

<div class="mt-3">

<a href="loginActA.php" class="btn btn-primary">

Go to Login

</a>

</div>

';

}

}

?>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>