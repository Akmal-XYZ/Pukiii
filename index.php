<?php
if(isset($_POST['message'])) {
    $message = $_POST['message'];
    
    // Save the message to a file or database
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= $message . "\n";
    file_put_contents($file, $current);
    
    echo 'Message sent: ' . $message;
}
?>
