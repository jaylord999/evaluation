<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $evaluationsUsername = $_POST["evaluationsUsername"];
    $evaluationsPassword = $_POST["evaluationsPassword"];

    if ($evaluationsUsername == "admin12345" && $evaluationsPassword == "@admin123") {
        echo "success";
    } else {
        echo "Invalid username or password.";
    }
}
?>