<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create tour</h1>
    <form action="index.php?act=store_tour" method="post" enctype="multipart/form-data">
        <div class="Name_tour">
            <input type="text" name="name" placeholder="Tour name">
        </div>
        <div class="image">
            <input type="file" name="image">
            <span style="color: red;"><?= $errors['image'] ?? '' ?></span>
        </div>
        <div class="intro">
            <input type="text" name="intro" placeholder="intro">
        </div>
        <div class="description">
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="price">
            <input type="number" name="price" placeholder="price">
        </div>
        <div class="number_date">
            <input type="date" name="number_date" placeholder="number_date">
        </div>
        <div class="category">
            <select name="category">
                <?php
                foreach ($categories as $category){
                    extract($category);
                    echo '<option value="' . $id . '"> ' . $name . ' </option>';
                }
                ?>
            </select>
        </div>

        <div class="btn">
            <button type="submit" name="send">Thêm</button>
        </div>
    </form>
</body>

</html>