<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;

class ProductController extends BaseController
{
    public $layout = 'admin';

    public function index()
    {
        $products = Product::getAll();
        $this->render('product/index', ['products' => $products]);
    }

    public function view($id)
    {
        $product = Product::getOne($id);
        $this->render('product/view/index', compact('product'));
    }

    public function add()
    {
        $this->render('product/add_form');
    }

    public function create($params, $file_name)
    {
        $id = Product::add($params);
        ProductImage::add($id, $file_name);
        $this->addMessage('add_prod');
        $this->redirect('admin/product/'. $id);   
    }

    public function edit()
    {
        $this->render('product/edit_form');
    }

    public function update($params, $file_name)
    {
        $id = Product::edit($params);
        if ($file_name) ProductImage::edit($id, $file_name);
        $this->addMessage('edit_prod');
        $this->redirect('admin/product/'. $id); 
    }

    public function delete()
    {
        $res = Product::delete($_GET['id']);
        $this->addMessage('del_prod', ($res ? 'ok' : 'error'));
        $this->redirect('admin/products');
    }
}