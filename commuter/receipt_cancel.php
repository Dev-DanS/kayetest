<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelled</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <h1>ID:
        <?php echo $_SESSION["commuterid"]; ?>
    </h1>
    <h1>Role:
        <?php echo $_SESSION["role"]; ?>
    </h1>
    <h1>BookID:
        <?php echo $_SESSION["bookid"]; ?>
    </h1>
    <div class="container mt-5">
        <button id="confirmButton" class="btn btn-primary">Confirm</button>
    </div>

    <script>
    </script>

</body>

</html>