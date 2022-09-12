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
    <form action="index.php?act=update_tour" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $id ?>">
        <div class="Name_tour">
            <input type="text" name="name" placeholder="Tour name" value="<?= $name ?>">
        </div>
        <div class="image">
            <img src="./uploads/<?= $image ?>" width="120" alt="image-tour">
        </div>
        <div class="image">
            <input type="file" name="image" value="./uploads/<?= $image ?>">
            <span style="color: red;"><?= $errors['image'] ?? '' ?></span>
        </div>
        <div class="intro">
            <input type="text" name="intro" placeholder="intro" value="<?= $intro ?>">
        </div>
        <div class="description">
            <textarea name="description" id="" cols="30" rows="10"><?= $description ?></textarea>
        </div>
        <div class="price">
            <input type="number" name="price" placeholder="price" value="<?= $price ?>">
        </div>
        <div class="number_date">
            <input type="date" name="number_date" placeholder="number_date" value="<?= $number_date ?>">
        </div>
        <div class="category">
            <select name="category">
                <?php
                foreach ($categories as $category) {
                    extract($category);
                    if ($id == $category_id) {
                        echo '<option value="' . $id . '" selected> ' . $name . ' </option>';
                    } else {
                        echo '<option value="' . $id . '"> ' . $name . ' </option>';
                    }
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