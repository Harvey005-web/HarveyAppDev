<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Color</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Favorite Color</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-4">
                    <div class="mb-3">
                        <label for="favcolor1" class="form-label">Favorite Color 1:</label>
                        <input type="text" class="form-control" id="favcolor1" name="favcolor1" required>
                    </div>
                    <div class="mb-3">
                        <label for="favcolor2" class="form-label">Favorite Color 2:</label>
                        <input type="text" class="form-control" id="favcolor2" name="favcolor2" required>
                    </div>
                    <div class="mb-3">
                        <label for="favcolor3" class="form-label">Favorite Color 3:</label>
                        <input type="text" class="form-control" id="favcolor3" name="favcolor3" required>
                    </div>
                    <div class="mb-3">
                        <label for="favcolor4" class="form-label">Favorite Color 4:</label>
                        <input type="text" class="form-control" id="favcolor4" name="favcolor4" required>
                    </div>
                    <div class="mb-3">
                        <label for="favcolor5" class="form-label">Favorite Color 5:</label>
                        <input type="text" class="form-control" id="favcolor5" name="favcolor5" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100" name="submit">Create Cookies</button>
                </form>

                <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                    $_SESSION['favcolor1'] = $_POST['favcolor1'];
                    $_SESSION['favcolor2'] = $_POST['favcolor2'];
                    $_SESSION['favcolor3'] = $_POST['favcolor3'];
                    $_SESSION['favcolor4'] = $_POST['favcolor4'];
                    $_SESSION['favcolor5'] = $_POST['favcolor5'];

                    setcookie("favcolor1", $_POST['favcolor1'], time() + 10, "/");
                    setcookie("favcolor2", $_POST['favcolor2'], time() + 15, "/");
                    setcookie("favcolor3", $_POST['favcolor3'], time() + 20, "/");
                    setcookie("favcolor4", $_POST['favcolor4'], time() + 25, "/");
                    setcookie("favcolor5", $_POST['favcolor5'], time() + 30, "/");

                    header("Location: resultColor.php");
                    exit();
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
