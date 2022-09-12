<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?act=update_category" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="name" value="<?= $name ?>">
        <br>
        <input type="submit" name="send">
    </form>    
</body>
</html>