<?php 
$data_inserted_successfully = false;

// Include WordPress core to access functions like $wpdb
require_once('C:/XAMPP/htdocs/wordpress/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Insert data into the database
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_information';

    $data = array(
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
        'submission_date' => current_time('mysql') 
    );

    $wpdb->insert($table_name, $data);

    // Check for database errors
    if ($wpdb->last_error) {
        echo "Database Error: " . $wpdb->last_error;
    } else {
        $data_inserted_successfully = true; 
    }

    // Redirect 
    if ($data_inserted_successfully) {
        header("Location: " . home_url());
        exit;
    }
}

exit;

?>
