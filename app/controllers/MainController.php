<?php
namespace  App\Controllers;

use App\Models\Product;
use App\Models\Category;

class MainController extends BaseController 
{
   
    public function home()
    {
        $this->layout = 'home';
        $products = Product::getAll();
        $this->setNamePage('Home Page');
        return $this->render('main/home', ['products' => $products]);
    }

    public function shop($cat_id)
    {
        $products = Product::getForCategory($cat_id);
        $cat = Category::get($cat_id);
        $this->setNamePage('Shop Page');
        return $this->render('main/shop/index', compact('products', 'cat'));
    }

    public function product($id)
    {
        $product = Product::getOne($id);
        $this->setNamePage('Product Details');
        return $this->render('main/product/index', ['product' => $product]);
    }
	
	public function contact()
	{
		return $this->render('main/contact');
	}
}