<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form to Upload Files</title>
</head>
<body>
<!--The attribute: enctype =="multipart/form data"data". -->
<!--It specifies which content type to use when submitting the form.-->
<form action="upload.php" method = "POST" enctype="multipart/form-data">
    <label for="file">Filename:</label>
<!-- "accept" attribute, limiting accepted file types to images with the specified extensions.-->
    <input type="file" name="file" id="file" accept=".gif, .jpeg, .jpg, .png" required/><br>
    <label for="file">Maximum file size: 976563 bytes (approx. 1 MB)</label><br>
    <input type="submit" name="btn_submit" value="Upload" /><br/>
</form>
</body>
</html>

