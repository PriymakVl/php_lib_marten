<?php

namespace App\Models;

use App\Helpers\File;
use Intervention\Image\ImageManager;

class ProductImage extends \App\Models\Model
{

	public static function getTable()
	{
		return 'product_images';
	}

    public static function get($prod_id)
    {
		$table = self::getTable();
        return \ORM::forTable($table)->where('prod_id', $prod_id)->findMany();
    }

	public static function add($prod_id, $file_name) 
	{
		$result = self::save($file_name, $prod_id);
		if (!$result) throw new Exception('prod_file_add');
		self::duplicateFile($file_name);
	}

	public static function save($file_name, $prod_id) 
	{
		$img = \ORM::forTable(self::getTable())->create();
		$img->src = $file_name;
		$img->prod_id = $prod_id;
		$img->alt = 'alt';
		return $img->save();
	}

	private static function dublicateFile($file_name) 
	{
		$manager = new ImageManager(['driver' => 'gd']);
		$img = $manager->make('assets/img/product/origial/' . $file_name);
		$img->resize(600);
		$img->save('assets/img/product/big/' . $file_name);
		$img->resize(270);
		$img->save('assets/img/product/card/' . $file_name);
		$img->resize(140);
		$img->save('assets/img/product/mini/' . $file_name);
	}



}