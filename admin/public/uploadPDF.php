<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ptschool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $pdfFile = $_FILES['pdf'];

    if ($pdfFile['error'] == UPLOAD_ERR_OK) {
        $pdfName = basename($pdfFile['name']);
        $pdfTmpName = $pdfFile['tmp_name'];
        $pdfPath = 'uploads/' . $pdfName;

        if (move_uploaded_file($pdfTmpName, $pdfPath)) {
            $stmt = $conn->prepare("INSERT INTO pdf_uploads (title, pdf_path) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $pdfPath);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Redirect to index.php after successful upload
                header("Location: index.php");
                exit; // Ensure that script stops execution after redirection
            } else {
                echo "Failed to save PDF details to the database.";
            }
            $stmt->close();
        } else {
            echo "Failed to upload PDF.";
        }
    } else {
        echo "Error uploading PDF.";
    }
}

$conn->close();
?>
