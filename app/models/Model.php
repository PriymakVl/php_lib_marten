<?php
namespace App\Models;

class Model 
{

	public static function findAll() 
    {
        $table = static::getTable();
        return \ORM::forTable($table)->findMany();
	}

    public static function findOne($id) 
    {
        $table = static::getTable();
		return \ORM::forTable($table)->findOne($id);
	}

    public static function delete($id)
    {
        $table = static::getTable();
		$item = \ORM::for_table($table)->findOne($id);
        return $item->delete();
    }

}