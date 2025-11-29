<?php
// Error reporting (turn off in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
define('DB_SERVER', 'localhost');

// For local development (XAMPP)
if (in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']) || strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'portfolio_db');
} 
// For production (your live server)
else {
    // Database credentials for production
    define('DB_USERNAME', 'mis03053_portfolio');
    define('DB_PASSWORD', '21042005nhat');
    define('DB_NAME', 'mis03053_portfolio');
}

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    // Log the error (in production, this would go to an error log)
    error_log('Database connection failed: ' . $conn->connect_error);
    
    // Display a user-friendly error message
    if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'localhost') {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        die('Sorry, we are experiencing technical difficulties. Please try again later.');
    }
}

// Set charset to utf8mb4 for full Unicode support
$conn->set_charset('utf8mb4');

// Function to safely execute database queries
function db_query($sql) {
    global $conn;
    $result = $conn->query($sql);
    if (!$result) {
        error_log('Database query error: ' . $conn->error);
        return false;
    }
    return $result;
}

// Function to safely escape strings for database queries
function db_escape($string) {
    global $conn;
    return $conn->real_escape_string($string);
}

// Sample data for initial setup
$sample_projects = [
    [
        'title' => 'Thư Viện Tranh',
        'description' => 'Website bán hàng tranh dán tường với giao diện hiện đại, dễ sử dụng.',
        'image_url' => 'images/projects/thuvientranh.jpg',
        'project_url' => 'https://thuvientranh.com/'
    ],
    // Add more sample projects as needed
];

// Initialize database (only for local development)
if (DB_USERNAME === 'root' && empty(DB_PASSWORD)) {
    // Create database if not exists
    $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
    if ($conn->query($sql) === TRUE) {
        $conn->select_db(DB_NAME);
        
        // Create projects table
        $sql = "CREATE TABLE IF NOT EXISTS projects (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            description TEXT,
            image_url VARCHAR(255),
            project_url VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        if ($conn->query($sql) !== TRUE) {
            throw new Exception("Error creating database: " . $conn->error);
        }
        
        // Insert sample projects if table is empty
        $result = $conn->query("SELECT COUNT(*) as count FROM projects");
        if ($result === FALSE) {
            $result = $conn->query("SELECT 0 as count");
        }
        $row = $result->fetch_assoc();
        
        if ($row['count'] == 0) {
            foreach ($sample_projects as $project) {
                $stmt = $conn->prepare("INSERT INTO projects (title, description, image_url, project_url) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", 
                    $project['title'], 
                    $project['description'], 
                    $project['image_url'], 
                    $project['project_url']
                );
                $stmt->execute();
            }
        }
    }
}

// Main execution
try {
    // Create connection
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
        // Log the error (in production, this would go to an error log)
        error_log('Database connection failed: ' . $conn->connect_error);
        
        // Display a user-friendly error message
        if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'localhost') {
            die('Connection failed: ' . $conn->connect_error);
        } else {
            die('Sorry, we are experiencing technical difficulties. Please try again later.');
        }
    }
    
    // Set charset to utf8mb4 for full Unicode support
    $conn->set_charset('utf8mb4');
} catch (Exception $e) {
    // Log the error
    error_log('Database error: ' . $e->getMessage());
    
    // Display a user-friendly error message
    if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'localhost') {
        die('Error: ' . $e->getMessage());
    } else {
        die('Sorry, we are experiencing technical difficulties. Please try again later.');
    }
}
