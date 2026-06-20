<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">My Favorite Colors</h2>

            <?php
           
            if (isset($_COOKIE['favcolor1']) || isset($_COOKIE['favcolor2']) || isset($_COOKIE['favcolor3']) || isset($_COOKIE['favcolor4']) || isset($_COOKIE['favcolor5'])) {
                echo '<div class="card mt-4 p-4 bg-light">';
                echo '<h5 class="mb-3">Active Cookies:</h5>';

                if (isset($_COOKIE['favcolor1'])) {
                    echo '<p><strong>Favorite Color 1:</strong> ' . htmlspecialchars($_COOKIE['favcolor1']) . ' <small class="text-muted">(expires in 10 sec)</small></p>';
                }
                if (isset($_COOKIE['favcolor2'])) {
                    echo '<p><strong>Favorite Color 2:</strong> ' . htmlspecialchars($_COOKIE['favcolor2']) . ' <small class="text-muted">(expires in 15 sec)</small></p>';
                }
                if (isset($_COOKIE['favcolor3'])) {
                    echo '<p><strong>Favorite Color 3:</strong> ' . htmlspecialchars($_COOKIE['favcolor3']) . ' <small class="text-muted">(expires in 20 sec)</small></p>';
                }
                if (isset($_COOKIE['favcolor4'])) {
                    echo '<p><strong>Favorite Color 4:</strong> ' . htmlspecialchars($_COOKIE['favcolor4']) . ' <small class="text-muted">(expires in 25 sec)</small></p>';
                }
                if (isset($_COOKIE['favcolor5'])) {
                    echo '<p><strong>Favorite Color 5:</strong> ' . htmlspecialchars($_COOKIE['favcolor5']) . ' <small class="text-muted">(expires in 30 sec)</small></p>';
                }

                echo '</div>';
            } else {
                echo '<p class="text-muted mt-4">No active cookies. Submit the form to create them.</p>';
            }
            ?>

            <a href="favoriteColor.php" class="btn btn-primary mt-4">Go Back to Form</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
