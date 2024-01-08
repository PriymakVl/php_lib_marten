<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $layout = 'admin';

    public function main()
    {
        $cats = Category::getMain();
        $this->render('category/main', compact('cats'));
    }

    public function parent($cat_id)
    {
        $cat = Category::getParent($cat_id, true);
        $this->render('category/parent', ['cat' => $cat]);
    }

    public function add($parent_id)
    {
        $this->render('category/add', ['parent_id' => $parent_id]);
    }

    public function create()
    {
        $result = Category::add($_POST);
        $this->addMessageKey($result, 'add_cat');
        $url = [
            'ok' => 'admin/category/' . $_POST['parent_id'], 
            'error' => 'admin/category/add/' . $_POST['parent_id']
        ];
        $this->redirectTwo($result, $url);   
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