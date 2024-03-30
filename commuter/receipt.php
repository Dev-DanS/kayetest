<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>ID:
        <?php echo $_SESSION["commuterid"]; ?>
    </h1>
    <h1>Role:
        <?php echo $_SESSION["role"]; ?>
    </h1>

    <div class="container mt-5">
        <button class="btn btn-primary" onclick="window.location.href = 'book.php';">Go to book.php</button>
    </div>
</body>

</html>