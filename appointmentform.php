<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use TCPDF;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $department = $_POST['department'] ?? '';
    $doctor = $_POST['doctor'] ?? '';
    $message = $_POST['message'] ?? '';

    // Create a new PDF document
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('PREACHERS TRAINING SCHOOL');
    $pdf->SetTitle('Appointment Form Submission');
    $pdf->SetSubject('Appointment Details');
    $pdf->SetKeywords('TCPDF, PDF, appointment, form, details');

    // Set default header data
    $logoPath = 'C:/xampp/htdocs/P.T-School/assets/img/slide/logo_bg.png'; // Absolute path
    if (!file_exists($logoPath)) {
        die("Logo file not found: $logoPath");
    }

    $pdf->SetHeaderData($logoPath, 30, 'PREACHERS TRAINING SCHOOL', 'Appointment Form Submission', array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128));
   
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
    $pdf->Cell(0, 10, 'Appointment Form Submission', 0, 1, 'C');

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
            margin: 2px 0; /* Adjust the margin here to decrease space between paragraphs */
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
 
    <div class='row'>
 
        <p><span class='label'>Name:</span> <span class='bottom-border'>$name</span></p>
    
        <p><span class='label'>Phone:</span> <span class='bottom-border'>$phone</span></p>
    
        <p><span class='label'>Email:</span> <span class='bottom-border'>$email</span></p>
     
        <p><span class='label'>Date:</span> <span class='bottom-border'>$date</span></p>
    
        <p><span class='label'>Department:</span> <span class='bottom-border'>$department</span></p>
 
        <p><span class='label'>Doctor:</span> <span class='bottom-border'>$doctor</span></p>
     
        <p><span class='label'>Message:</span> <span class='bottom-border'>$message</span></p>
    
    </div>

    ";

    $pdf->writeHTML($html, true, false, true, false, '');

    // Generate PDF as a string
    $pdfString = $pdf->Output('appointment_form.pdf', 'S');

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
        $mail->setFrom('rameshpilli1428@gmail.com', 'PREACHERS TRAINING SCHOOL'); // Your Gmail email and name
        $mail->addAddress('rameshpilli1428@gmail.com', 'PT School'); // Recipient's email and name

        // Attach the PDF
        $mail->addStringAttachment($pdfString, 'appointment_form.pdf');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Appointment Form';
        $mail->Body = "
            <h1>Appointment Details</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Date:</strong> $date</p>
            <p><strong>Department:</strong> $department</p>
            <p><strong>Doctor:</strong> $doctor</p>
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
?>
