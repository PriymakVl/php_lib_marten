<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\ProductController;
use App\Helpers\File;
use App\Helpers\Message;

//admin
SimpleRouter::get('/admin/products', 'ProductController@index');

SimpleRouter::get('/admin/product/add', 'ProductController@add');

SimpleRouter::post('/admin/product/add', function() {
    try {
        $file = new File('image', 5000000, ['png', 'jpg', 'jpeg']);
        $file->upload('assets/img/product/original');
        $controller = new ProductController;
        $controller->create($_POST, $file->filename);
    } catch(Exception $e) {
        Message::add($e->getMessage(), 'error');
        header('Location: /admin/product/add');
        exit;
    }
});

SimpleRouter::post('/admin/product/edit', function() {
    try {
        if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $file = new File('image', 5000000, ['png', 'jpg', 'jpeg']);
            $file->upload('assets/img/product/original');
            $file_name = $file->filename;
        }
        else {
            $file_name = null;
        }
        $controller = new ProductController;
        $controller->update($_POST, $file_name);
    } catch(Exception $e) {
        Message::add($e->getMessage(), 'error');
        header('Location: /admin/product/edit');
        exit;
    }
});

SimpleRouter::get('/admin/product/edit', 'ProductController@edit');

SimpleRouter::get('/admin/product/delete/{id}', 'ProductController@delete');

SimpleRouter::get('/admin/product/{id}', 'ProductController@view')->where([ 'id' => '[0-9]+' ]);

// admin category
SimpleRouter::get('/admin/categories', 'CategoryController@index');

SimpleRouter::get('/admin/category/add', 'CategoryController@add');

SimpleRouter::post('/admin/category/add', 'CategoryController@create');



// public

SimpleRouter::get('/shop/{cat_id}', 'MainController@shop');

SimpleRouter::get('/', 'MainController@home');

SimpleRouter::get('/product/{id}', 'MainController@product');