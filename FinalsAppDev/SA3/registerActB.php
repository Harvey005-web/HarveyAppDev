<?php

session_start();

if(isset($_SESSION['username']))
{
    header("Location: homeActB.php");
    exit();
}

include("database.php");
?>

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

            <h2 class="mb-4">My Personal Information</h2>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Middle Name</label>
                    <input type="text" name="middlename" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-5">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Register
                </button>

            </form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$contact = $_POST['contact'];

if($password != $confirm)
{

echo '

<div class="alert alert-danger mt-4">

Password and Confirm Password are not the same.

</div>

';

}
else
{

$sql = "INSERT INTO users
(firstname,middlename,lastname,username,password,birthday,email,contact)

VALUES

('$firstname','$middlename','$lastname','$username','$password','$birthday','$email','$contact')";

if(mysqli_query($conn,$sql))
{

echo '

<div class="alert alert-success mt-4">

Registration Successful!

</div>

';

echo '

<a href="loginActB.php" class="btn btn-primary">

Go to Login

</a>

';

}
else
{

echo '

<div class="alert alert-danger mt-4">

'.mysqli_error($conn).'

</div>

';

}

}

}

?>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>