<?php 
namespace App\Helpers;

/**
* 
*/
class FileUpload
{
	public function saveImg($file, $rootFolder){
		$extension = $file->getClientOriginalExtension();
        if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'JPG') {
            return redirect('admin/video/add');
        }
        $oriName = $file->getClientOriginalName();
        $name = str_random(4)."_".$oriName;
        while (file_exists($rootFolder.$name)) {
            $name = str_random(4)."_".$oriName;
        }
        $file->move($rootFolder, $name);
        return $name;
	}
}