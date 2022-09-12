<?php
function insert_tours($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO tours (name	,image	,intro	,description	,number_date,	price,	category_id	
    ) VALUES ('$name','$image','$intro','$description','$number_date','$price','$category_id')";

    pdo_execute($sql);
}

function update_tours($id, $name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "UPDATE tours SET name = '$name',image = '$image',intro = '$intro',description = '$description',number_date = '$number_date',price = '$price',category_id = '$category_id' WHERE id='$id'";

    pdo_execute($sql);
}

function delete_tours($id)
{
    $sql = "DELETE FROM tours where id=" . $_GET['id'];

    pdo_execute($sql);
}

function loadall_tours()
{
    $sql = "SELECT * FROM tours";

    $tours = pdo_query($sql);

    return $tours;
}

function loadone_tours($id)
{
    $sql = "SELECT * FROM tours WHERE id=" . $id;

    $dm = pdo_query_one($sql);

    return $dm;
}
