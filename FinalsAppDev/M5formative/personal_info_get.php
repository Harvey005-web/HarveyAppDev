<!DOCTYPE html>
<html>
<head>
    <title>Personal Information - GET Method</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Personal Information (GET Method)</h2>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="middlename" class="form-label">Middle Name:</label>
                    <input type="text" name="middlename" id="middlename" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname'])) {
                echo '<div class="card mt-4 p-4 bg-light">';
                echo '<h4>Submitted Information:</h4>';
                echo '<p><strong>First Name:</strong> ' . htmlspecialchars($_GET['firstname']) . '</p>';
                echo '<p><strong>Middle Name:</strong> ' . htmlspecialchars($_GET['middlename']) . '</p>';
                echo '<p><strong>Last Name:</strong> ' . htmlspecialchars($_GET['lastname']) . '</p>';
                echo '<p><strong>Date of Birth:</strong> ' . htmlspecialchars($_GET['dob']) . '</p>';
                echo '<p><strong>Address:</strong> ' . htmlspecialchars($_GET['address']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>