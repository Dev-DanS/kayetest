<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On the Way</title>
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
        <button id="cancelButton" class="btn btn-primary">Cancel Booking</button>
    </div>

    <div class="container mt-5">
        <button class="btn btn-primary" onclick="window.location.href = 'ongoing.php';">Go to On Going</button>
    </div>
    <script>
        $(document).ready(function () {
            $("#cancelButton").click(function () {
                $.ajax({
                    url: "search_cancel.php",
                    method: "POST",
                    success: function (response) {
                        alert(response);
                    }
                });
            });
        });

        function checkBookingStatus() {
            $.ajax({
                url: "search_check.php",
                method: "GET",
                success: function (response) {
                    if (response === "cancelled") {
                        window.location.href = "commuter.php";
                    }
                }
            });
        }

        checkBookingStatus();
        setInterval(checkBookingStatus, 2000);

        function checkStatus() {
            $.ajax({
                url: "book_status.php",
                method: "POST",
                success: function (response) {
                    if (response === 'pending') {
                        window.location.href = "searching.php";
                    } else if (response === 'ongoing') {
                        window.location.href = "ongoing.php";
                    } else {
                        setTimeout(checkStatus, 2000);
                    }
                }
            });
        }

        checkStatus();
    </script>
</body>

</html>