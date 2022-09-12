<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
<h1>hiển thị sản phẩm</h1>
    <table border="1" style="border: 1px solid black;">
        <tr>
            <th>Tên tours</th>
            <th>categories id</th>
            <th>ảnh</th>
            <th>mô tả</th>
            <th>number_date </th>
            <th>price</th>
            <th>intro</th>
            <th> <a href="index.php?act=create_tour">Thêm</a></th>
        </tr>
        <?php 
        $i = 1;
        foreach ($tours as $tour) {
            extract($tour);
            echo '<tr>
                <td>'. $name .'</td>
                <td>'. $category_id .'</td>
                <td><img src="./uploads/'. $image .'" width="120" alt="image-tour"></td>
                <td>'. $description .'</td>
                <td>'. $number_date .'</td>
                <td>'. $price .'</td>
                <td>'. $intro .'</td>
                <td>
                    <a href="index.php?act=edit_tour&id='.$id.'" >edit</a>
                    <a href="index.php?act=delete_tour&id='. $id .'">delete</a>        
                </td>
            </tr>';
        }
        ?>
    </table>
</body>

</html>