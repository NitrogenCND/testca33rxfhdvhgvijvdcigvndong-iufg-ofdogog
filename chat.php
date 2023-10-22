<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $message = $data['message'];

    if ($message) {
        // Append the message to the chat log file.
        file_put_contents('chat.txt', "<p>" . htmlspecialchars($message) . "</p>\n", FILE_APPEND);
    }
}
?>
