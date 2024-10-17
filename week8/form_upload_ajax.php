<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" id="file">
        <input type="submit" value="Unggah" name="submit">
    </form>

    <div id="status"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>