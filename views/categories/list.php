<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="border: 1px solid black;">
        <tr>
            <th>stt</th>
            <th>name</th>
            <th><a href="index.php?act=create_category">Thêm</a></th>
        </tr>
        <tr>
            <?php
                $i = 1;
                foreach ($categories as $key => $category) {
                    extract($category);
                    echo '
                    <tr>
                    <td>'. $i++ .'</td>
                    <td>'. $name .'</td>
                    <td>
                         <a href="index.php?act=edit_category&id='. $id .'">edit</a>                    
                     <a href="index.php?act=delete_category&id='. $id .'">delete</a>                    
                    </td>
                    </tr>'
                    ;
                }
                ?>
        </tr>
    </table>
    
</body>
</html>