<?php
// Checking if the form was submitted using the POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Checking if file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {

        // Checking the file size against the specified maximum limit (976563 bytes).
        if ($_FILES["file"]["size"] > 976563) {
            echo "Error: File size exceeds the maximum limit (976563 bytes).";
        } else {
            // Check file extension
            $allowedExtensions = array("gif", "jpeg", "jpg", "png");
           /*
            * pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION)
            * extracts the file extension of the uploaded file.
            */
            $fileExtension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
            /*
             * in_array($fileExtension, $allowedExtensions)
             * checks if the file extension is allowed.
             */
            if (in_array($fileExtension, $allowedExtensions)) {
                // Moving the uploaded file to the "uploads" directory
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
                echo "File uploaded successfully.";
            } else {
                // Error messages are displayed if any of the conditions fail.
                echo "Error: Invalid file extension. Allowed extensions are .gif, .jpeg, .jpg, .png";
            }
        }

    } else {
        // Error messages are displayed if any of the conditions fail.
        echo "Error: " . $_FILES["file"]["error"];
    }
}

/*
`$_FILES` is a superglobal array in PHP that is used to handle file uploads.
It is populated with information about uploaded files, such as file name,
file type, temporary location, error codes, and more.

In the context of our code:
- `$_FILES["file"]` refers to the file input with the name attribute set to "file"
in our HTML form (`<input type="file" name="file" id="file" accept=".gif, .jpeg, .jpg, .png" required>`).
- `["size"]` is used to access the size property of the uploaded file.
So, `$_FILES["file"]["size"]` specifically retrieves the size (in bytes) of the uploaded file.

Here's a breakdown:
- `$_FILES`: The superglobal array containing file upload information.
- `["file"]`: The name of the file input in the HTML form.
    You can think of it as the key in the associative array `$_FILES`.
- `["size"]`: The property of the file array that represents the size of the uploaded file in bytes.

So, `$_FILES["file"]["size"]` retrieves the size of the uploaded file
named "file" in your form. The code checks if this size exceeds the specified limit (976563 bytes)
as part of the file upload validation.
 */

