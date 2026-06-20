<!DOCTYPE html>
<html>
<head>
    <title>Cookie Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Cookie Management</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="middlename" class="form-label">Middle Name:</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Create Cookies</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                setcookie("firstname", $_POST['firstname'], time() + 10, "/");
                setcookie("middlename", $_POST['middlename'], time() + 20, "/");
                setcookie("lastname", $_POST['lastname'], time() + 30, "/");

                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }

            if (isset($_COOKIE['firstname']) || isset($_COOKIE['middlename']) || isset($_COOKIE['lastname'])) {
                echo '<div class="card mt-4 p-4 bg-light">';
                echo '<h5 class="mb-3">Active Cookies:</h5>';

                if (isset($_COOKIE['firstname'])) {
                    echo '<p><strong>First Name:</strong> ' . htmlspecialchars($_COOKIE['firstname']) . ' <small class="text-muted">(expires in 10 sec)</small></p>';
                }
                if (isset($_COOKIE['middlename'])) {
                    echo '<p><strong>Middle Name:</strong> ' . htmlspecialchars($_COOKIE['middlename']) . ' <small class="text-muted">(expires in 20 sec)</small></p>';
                }
                if (isset($_COOKIE['lastname'])) {
                    echo '<p><strong>Last Name:</strong> ' . htmlspecialchars($_COOKIE['lastname']) . ' <small class="text-muted">(expires in 30 sec)</small></p>';
                }

                echo '</div>';
            } else {
                echo '<p class="text-muted mt-4">No active cookies. Submit the form to create them.</p>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
