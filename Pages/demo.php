<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (isset($_FILES['upload_file'])) {
    move_uploaded_file($_FILES["upload_file"]["tmp_name"], $_FILES["upload_file"]["name"]);
}
?>
<form name="from_file_upload" action="" method="post"
	enctype="multipart/form-data">
	<div class="input-row">
		<input type="file" name="upload_file" accept=".jpg,.jpeg,.png">
	</div>
	<input type="submit" name="upload" value="Upload File">
</form>
</body>
</html>