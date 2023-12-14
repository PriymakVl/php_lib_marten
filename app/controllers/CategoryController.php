<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $layout = 'admin';

    public function index()
    {
        $cats = Category::findAll();
        $this->render('category/index', compact('cats'));
    }

    public function view($id)
    {
        $cat = Category::getOne($id);
        $this->render('category/view', compact('cat'));
    }

    public function add()
    {
        $cats = Category::getMain(true);
        $this->render('category/add', compact('cats'));
    }

    public function create()
    {
        $id = Category::add($_POST);
        $this->addMessage($id, 'add_cat');
        $this->redirect('admin/category/'. $id);   
    }

    public function edit()
    {
        $this->render('category/edit');
    }

    public function update($params)
    {
        $result = Category::edit($params);
        $this->addMessage($result, 'edit_cat');
        $this->redirect('admin/product/'. $id); 
    }

    public function delete($id)
    {
        $result = Category::delete($id);
        $this->addMessage($result, 'del_cat');
        $this->redirect('admin/categories');
    }
}