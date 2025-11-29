<?php
// Set headers for JSON response
header('Content-Type: application/json');

// Include database configuration
require_once 'config.php';

// Initialize response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $response['message'] = 'All fields are required.';
        echo json_encode($response);
        exit;
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
        echo json_encode($response);
        exit;
    }
    
    try {
        // Save to database
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        
        if ($stmt->execute()) {
            // Send email notification (configure your SMTP settings)
            $to = 'your-email@example.com'; // Replace with your email
            $email_subject = "New Contact Form Submission: $subject";
            $email_body = "You have received a new message from your website contact form.\n\n".
                         "Name: $name\n".
                         "Email: $email\n".
                         "Subject: $subject\n".
                         "Message:\n$message";
            
            $headers = "From: $name <$email>\r\n".
                      "Reply-To: $email\r\n".
                      "X-Mailer: PHP/" . phpversion();
            
            // Uncomment to send email (make sure your server is configured to send mail)
            // mail($to, $email_subject, $email_body, $headers);
            
            $response['success'] = true;
            $response['message'] = 'Your message has been sent successfully! We will get back to you soon.';
        } else {
            throw new Exception('Failed to save message to database.');
        }
    } catch (Exception $e) {
        $response['message'] = 'An error occurred while sending your message. Please try again later.';
        // Log the error for debugging
        error_log('Contact form error: ' . $e->getMessage());
    }
} else {
    $response['message'] = 'Invalid request method.';
}

// Return JSON response
echo json_encode($response);
?>
