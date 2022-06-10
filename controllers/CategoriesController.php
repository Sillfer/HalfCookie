<?php

class CategoriesController{
    public function getAllCategories() {
        $categories = Category::getAll();
        return $categories;
    }

    public function getAllCategoriesWithProducts() {
        $categories = Category::getAllWithProducts();
        return $categories;
    }

    public function addCategory() {
        if(isset($_POST["submit"])) {
            $data = array(
                'name_category' => $_POST["name_category"]
            );
            $result = Category::add($data);
            if($result == 'ok') {
                Session::set("success", "Category Added!");
                Redirect::to("categories");
            } else {
                echo $result;
            }
        }
    }

    public function getCategory() {
        if(isset($_GET["id_category"])) {
            $id_category = $_GET["id_category"];
            $category = Category::getOne($id_category);
            return $category;
        }
    }

    public function removeCategory()
    {
        if (isset($_POST["delete_cat_id"])) {
            $data = array(
                'id_category' => $_POST["delete_cat_id"]
            );
            $result = Category::delete($data);
            if ($result === "ok") {
                Session::set("success", "Product Removed!");
                Redirect::to("categories");
            } else {
                echo $result;
            }
        }
    }
}