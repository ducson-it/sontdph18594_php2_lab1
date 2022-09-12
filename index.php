<?php
include "config/connect.php";
include "models/categories.php";
include "models/tours.php";

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'categories':
            $categories = loadall_categories();
            include "views/categories/list.php";
            break;
        case 'create_category';
            include "views/categories/add.php";
            break;
        case 'store_category':
            $name = $_POST['name'];
            insert_categories($name);
            header('location:index.php?act=categories');
            break;
        case 'edit_category':
            $id = $_GET['id'];
            $category = loadone_categories($id);
            extract($category);
            include "views/categories/edit.php";
            break;
        case 'update_category':
            $id = $_POST['id'];
            $name = $_POST['name'];
            echo $id, $name;
            update_categories($id, $name);
            header('location:index.php?act=categories');
            break;
        case 'delete_category':
            $id = $_GET['id'];
            $delete = delete_categories($id);
            header('location:index.php?act=categories');
            break;
        case 'tours':
            $tours = loadall_tours();
            include "views/tours/list.php";
            break;
        case 'create_tour';
            $categories = loadall_categories();
            include "views/tours/add.php";
            break;
        case 'store_tour':
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $number_date =  $_POST['number_date'];
            $category_id = $_POST['category'];
            $intro =  $_POST['intro'];
            $image = $_FILES['image']['name'];

            if ($_FILES['image']['size'] <= 0) {
                $errors['image'] = "hãy chọn ảnh";
            }
            if ($_FILES['image']['size'] > 2000000) {
                $errors['image'] = "kích thước ảnh  ko quá 2mb";
            }
            $img = ['jpg', 'png'];
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (!in_array($ext, $img)) {
                $errors['image'] = "ảnh không đúng định dạng";
            }
            if (!array_filter($errors)) {
                insert_tours($name, $image, $intro, $description, $number_date, $price, $category_id);
                move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $_FILES['image']['name']);
                header("location: index.php?act=tours");
                die;
            }
            break;
        case 'edit_tour':
            $id = $_GET['id'];
            $tour = loadone_tours($id);
            $categories = loadall_categories();
            extract($tour);
            include "views/tours/edit.php";
            break;
        case 'update_tour':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $number_date =  $_POST['number_date'];
            $category_id = $_POST['category'];
            $intro =  $_POST['intro'];
            $image = $_FILES['image']['name'];
            if ($_FILES['image']['size'] <= 0) {
                $errors['image'] = "hãy chọn ảnh";
            }
            if ($_FILES['image']['size'] > 2000000) {
                $errors['image'] = "kích thước ảnh  ko quá 2mb";
            }
            $img = ['jpg', 'png'];
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (!in_array($ext, $img)) {
                $errors['image'] = "ảnh không đúng định dạng";
            }
            update_tours($id, $name, $image, $intro, $description, $number_date, $price, $category_id);
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $_FILES['image']['name']);
            header("location: index.php?act=tours");
            break;
        case 'delete_tour':
            $id = $_GET['id'];
            $delete = delete_tours($id);
            header('location:index.php?act=tours');
            break;
        default:
            break;
    }
} else {
}
