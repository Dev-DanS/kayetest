<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["bookid"])) {
    // Sanitize the input
    $bookid = filter_var($_POST["bookid"], FILTER_SANITIZE_STRING);

    // Set the session variable
    $_SESSION["bookid"] = $bookid;

    // Send a success response
    echo "Session variable 'bookid' set to: " . $_SESSION["bookid"];
} else {
    // Send an error response
    http_response_code(400);
    echo "Error: Invalid request";
}
?>