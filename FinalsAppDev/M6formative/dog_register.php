<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <h2 class="mb-4">Dog Information</h2>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="d_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Breed</label>
                    <input type="text" name="d_breed" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" name="d_age" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="d_add" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Color</label>
                    <input type="text" name="d_color" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Height</label>
                    <input type="text" name="d_height" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Weight</label>
                    <input type="text" name="d_weight" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save
                </button>

            </form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$conn = mysqli_connect("localhost","root","","dogdb");

if(!$conn)
{
    die("Connection Failed : ".mysqli_connect_error());
}

$name = $_POST['d_name'];
$breed = $_POST['d_breed'];
$age = $_POST['d_age'];
$address = $_POST['d_add'];
$color = $_POST['d_color'];
$height = $_POST['d_height'];
$weight = $_POST['d_weight'];

$sql = "INSERT INTO dogs
(d_name,d_breed,d_age,d_add,d_color,d_height,d_weight)
VALUES
('$name','$breed','$age','$address','$color','$height','$weight')";

if(mysqli_query($conn,$sql))
{
    echo '<div class="alert alert-success mt-4">
            Dog information saved successfully.
          </div>';
}
else
{
    echo '<div class="alert alert-danger mt-4">
            Error : '.mysqli_error($conn).'
          </div>';
}

mysqli_close($conn);

}

?>

            <a href="dog_viewResult.php" class="btn btn-primary mt-3">
                View All Dogs
            </a>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>