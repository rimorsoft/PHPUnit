<?php

namespace App;

class Slug
{
	protected $original;

	public function __construct($original)
	{
		$this->original = $original;
	}

	public function getOriginal()
	{
		return trim($this->original);
	}
	
	public function render()
	{
		$slug = str_replace(" ", "-", $this->getOriginal());

		return strtolower($slug);
	}
}