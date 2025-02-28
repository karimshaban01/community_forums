<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    // Process uploaded file
    if ($_FILES['file']['error'] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
    }

    // Perform any additional processing here (e.g., save data to a database)

    // Redirect back to home.html with a success message
    header("Location: home.html?success=true");
    exit();
}
?>
