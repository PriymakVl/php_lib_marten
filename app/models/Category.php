<?php
namespace App\Models;

class Category extends \App\Models\Model
{
	const PARENT_MAIN = 0;

	public static function getTable()
	{
		return 'categories';
	}

	public static function getMain($sub = false)
	{
		$main = \ORM::forTable(self::getTable())->where('parent_id', self::PARENT_MAIN)->findMany();
		if ($sub) {
			foreach ($main as $cat) {
				$cat->sub = self::getSub($cat->id);
			}
		}
		return $main;
	}

	public static function findAll()
	{
		$cats = parent::findAll();
		foreach ($cats as $cat) {
			$cat->parent = self::getParent($cat->parent_id);
		}
		return $cats;
	}

	public static function findOne($id)
	{
		$cat = parent::findOne($id);
		$cat->parent = self::getParent($cat->parent_id);
		return $cat;
	}

	private static function getParent($id, $sub = false)
	{
		if (!$id) return;
		$cat = parent::findOne($id);
		if ($sub) $cat->sub = self::getSub($id);
		return $cat;
	}

	private static function getSub($parent_id) {
		return \ORM::forTable(self::getTable())->where('parent_id', $id)->findMany();
	}

	public static function add($form) 
	{
		$category = \ORM::forTable(self::getTable())->create();
		$category->name = $form['name'];
		$category->parent_id = $form['parent_id'];
		// $product->img = self::addImage();
		$category->img = null;
		return $category->save();
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

	// private static function addImage()
	// {
	// 	try {
	// 		$storage = new \Upload\Storage\FileSystem('assets/img');
	// 		$file = new \Upload\File('img', $storage);
	// 		$file->setName(uniqid());
	// 		$file = self::validateImage($file);
	// 		$file->upload();
	// 	} catch (\Exception $e) {
	// 		$errors = $file->getErrors();
	// 		$errors = serialize($errors);
	// 		header('Location: /product/add?error=' . $errors);
	// 		exit;		
	// 	}
	// }

	// private static function validateImage($file)
	// {
	// 	$types = ['image/png', 'image/jpg'];
	// 	$valid_types = new \Upload\Validation\Mimetype($types);
	// 	$max_size = new \Upload\Validation\Size('5M');
	// 	$rules = [$valid_types, $max_size];
	// 	$file->addValidations($rules);
	// 	return $file;
	// }

}