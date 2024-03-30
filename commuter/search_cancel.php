<?php
session_start();
include('../db/dbconn.php'); // Include your database connection file


        // Retrieve the bookid from the session
        $bookid = $_SESSION["bookid"];

        // Prepare and execute a query to update the status to 'cancelled'
        $query = "UPDATE booking SET status = 'cancelled' WHERE bookingCode = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $bookid);
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->affected_rows > 0) {
            echo "Booking cancelled successfully.";
        } else {
            echo "Failed to cancel booking.";
        }
    
?>