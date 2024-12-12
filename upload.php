<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileType = mime_content_type($_FILES['file']['tmp_name']);
        if ($fileType !== 'application/pdf') {
            echo 'Error: Only PDF files are allowed.';
            exit;
        }

        $fileName = basename($_FILES['file']['name']);
        $uploadFile = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo 'File uploaded successfully.';
        } else {
            echo 'File upload failed.';
        }
    } else {
        echo 'No file was uploaded or there was an upload error.';
    }
} else {
    echo 'Invalid request method.';
}
