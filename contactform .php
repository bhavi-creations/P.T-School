<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use TCPDF;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $Name = $_POST['contactname'] ?? '';
    $email = $_POST['contactemail'] ?? '';
    $subject = $_POST['contactSubject'] ?? '';
    $number = $_POST['contactnumber'] ?? '';
    $message = $_POST['contactmessage'] ?? '';

    // Create a new PDF document
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('PT School');
    $pdf->SetTitle('Contact Form Submission');
    $pdf->SetSubject('Contact Details');
    $pdf->SetKeywords('TCPDF, PDF, contact, form, details');

    // Set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING);

    // Set header and footer fonts
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // Set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // Set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // Set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Add a title
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Contact Form Submission', 0, 1, 'C');

    // Add content with custom styling
    $pdf->SetFont('helvetica', '', 12);
    $html = "
    <style>
        h1 {
            color: #333333;
            font-family: helvetica;
            font-size: 24px;
            text-align: center;
        }
        p {
            color: #000000;
            font-family: helvetica;
            font-size: 12px;
        }
        .label {
            font-weight: bold;
        }
        
        .bottom-border {
            border-bottom: 1px solid #000000;
            display: inline-block;
            width: 100%;
        }
    </style>

    <h1>Contact Details</h1>
    <div class='row'>

    <div class='col-5'>
        <p><span class='label'>Name:</span> <span class='bottom-border'>$Name</span></p>
    </div>
    <div class='col-5'>
        <p><span class='label'>Email:</span> <span class='bottom-border'>$email</span></p>
    </div>
    <div class='col-5'>
        <p><span class='label'>Subject:</span> <span class='bottom-border'>$subject</span></p>
    </div>
    <div class='col-5'>
        <p><span class='label'>Phone:</span> <span class='bottom-border'>$number</span></p>
    </div>
    <div class='col-5'>
        <p><span class='label'>Message:</span> <span class='bottom-border'>$message</span></p>
    </div>

    </div>

    ";

    $pdf->writeHTML($html, true, false, true, false, '');

    // Generate PDF as a string
    $pdfString = $pdf->Output('contact_form.pdf', 'S');

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rameshpilli1428@gmail.com'; // Your Gmail email address
        $mail->Password = 'exnevxtbcltgmece'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('rameshpilli1428@gmail.com', 'pt school'); // Your Gmail email and name
        $mail->addAddress('rameshpilli1428@gmail.com', 'pt school'); // Recipient's email and name

        // Attach the PDF
        $mail->addStringAttachment($pdfString, 'contact_form.pdf');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
            <h1>Contact Details</h1>
            <p><strong>Name:</strong> $Name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Phone:</strong> $number</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
