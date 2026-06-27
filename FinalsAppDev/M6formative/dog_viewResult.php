<!DOCTYPE html>
<html>
<head>
    <title>Dog View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Dog Records</h2>

<?php

$conn = mysqli_connect("localhost","root","","dogdb");

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql = "SELECT * FROM dogs";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{

echo '
<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Address</th>
    <th>Color</th>
    <th>Height</th>
    <th>Weight</th>
</tr>

</thead>

<tbody>
';

while($row = mysqli_fetch_assoc($result))
{

echo '
<tr>

<td>'.htmlspecialchars($row["d_name"]).'</td>

<td>'.htmlspecialchars($row["d_breed"]).'</td>

<td>'.htmlspecialchars($row["d_age"]).'</td>

<td>'.htmlspecialchars($row["d_add"]).'</td>

<td>'.htmlspecialchars($row["d_color"]).'</td>

<td>'.htmlspecialchars($row["d_height"]).'</td>

<td>'.htmlspecialchars($row["d_weight"]).'</td>

</tr>
';

}

echo '

</tbody>

</table>

';

}
else
{

echo '<div class="alert alert-warning">
        No dog records found.
      </div>';

}

mysqli_close($conn);

?>

<a href="dog_register.php" class="btn btn-success mt-3">
    Register New Dog
</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>