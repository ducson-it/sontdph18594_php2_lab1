<?php
function insert_categories($name)
{
    $sql = "INSERT INTO categories (name) VALUES ('$name')";

    pdo_execute($sql);
}

function delete_categories($id)
{
    $sql = "DELETE FROM categories where id=" . $_GET['id'];

    pdo_execute($sql);
}

function update_categories($id, $name) 
{
    $sql = "UPDATE categories SET name = '$name' WHERE id='$id'";

    pdo_execute($sql);
}

function loadall_categories()
{
    $sql = "SELECT * FROM categories";

    $categories = pdo_query($sql);

    return $categories;
}
function loadone_categories($id)
{
    $sql = "SELECT * FROM categories WHERE id=" . $id;

    $dm = pdo_query_one($sql);
    
    return $dm;
}