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
}