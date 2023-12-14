<?php

namespace App\Helpers;

class File 
{
	private $file; 

	public function __construct($key, $path)
	{
		$storage = new \Upload\Storage\FileSystem($path);
		$this->file = new \Upload\File($key, $storage);
	}

    public function save()
    {
		$this->file->setName(uniqid());
		$this->file->upload();
		return $this;
    }

	public function validate($max_size, $valid_types)
	{
		$valid_mime_types = array_map(function($type) { return 'image/' . $type;}, $valid_types);
		$types_obj = new \Upload\Validation\Mimetype($valid_mime_types);
		$size_obj = new \Upload\Validation\Size($max_size);
		$rules = [$types_obj, $size_obj];
		$this->file->addValidations($rules);
		return $this;
	}

	public function errors()
	{
		return $this->file->getErrors();
	}

	public function getName()
	{
		return $this->file->getNameWithExtension();
	}
}