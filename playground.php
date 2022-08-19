<?php 
    include_once('includes/processor/upload-processor.php');
    if(count($_FILES) > 0) {
        upload_file($_FILES['product_img']['name'], $_FILES['product_img']['tmp_name'], '/greendenpeak/asset/img');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="playground.php" method="post" enctype="multipart/form-data">
        <input type="file" name="product_img"/>
        <button type="submit">Upload</button>
    </form>
</body>
</html>