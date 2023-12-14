<?php
namespace App\Models;

use App\Models\ProductImage;

class Product extends \App\Models\Model
{

	public static function getTable()
	{
		return 'products';
	}

	public static function getOne($id)
	{
		$product = self::findOne($id);
		$product->images = ProductImage::get($id);
		$product->category = Category::get($product->cat_id);
		return $product;
	}

	public static function getForCategory($cat_id)
	{
		$table = self::getTable();
		$products = \ORM::forTable($table)->where('cat_id', $cat_id)->findMany();
		return self::addImages($products);
	}

	private static function addImages($products)
	{
		if (!$products) return;
		foreach ($products as $product) {
			$product->images = ProductImage::get($product->id);
		}
		return $products;
	}

	public static function getAll()
	{
		$table = self::getTable();
		$products = \ORM::forTable($table)->findMany();
		$products = self::addCategories($products);
		return self::addImages($products);
	}

	public static function addCategories($products) {
		if (!$products) return;
		foreach ($products as $product) {
			$product->category = Category::findOne($product->cat_id);
		}
		return $products;
	}

	public static function getCategory($product)
	{
		$product->category = Category::findOne($product->сat_id);
		return $product;
	}

	public static function add($form) 
	{
		$product = \ORM::forTable(self::getTable())->create();
		$product->name = $form['name'];
		$product->price = $form['price'];
		$product->cat_id = $form['cat_id'];
		$product->description = $form['description'];
		$result = $product->save();
		if (!$result) throw new \Exception('prod_add');
		return $product->id();
	}


	// public static function edit($form) 
	// {
	// 	$product = ORM::forTable('products')->findOne($form['id']);
	// 	if ($_FILES['img']['error'] == UPLOAD_ERR_OK) {
	// 		if (file_exists($product->img)) unlink( 'public/img/'. $product->img);
	// 		$form['img'] = self::addImage();
	// 	}
	// 	$product->set($form);
	// 	return $product->save();
	// }




}