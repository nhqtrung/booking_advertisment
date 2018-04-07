<?php 
namespace App\Helpers;

/**
* 
*/
class Path
{
	public function changePathToBreadcrumb($path) {
		$arrBreadcrumb = explode('/', $path);
		return $arrBreadcrumb;
	}
}