<?php
namespace App\Services;
use App\Models\Filename;
use App\Events\FileAdded;

class GlobalService
{
    public static function checkAddedFile(){
        $dbfiles = Filename::pluck('name')->toArray();

        $filepath = base_path('public/files');
        $dirfiles = array_diff(scandir($filepath), array('.', '..'));
        
        $added = false;
        
        foreach($dirfiles as $dirfile){
            if(!in_array($dirfile, $dbfiles)){
                Filename::insert(
                    array('name' => $dirfile)
                );
                $added = true;
            }
        }
        if($added)
            broadcast(new FileAdded())->toOthers();
        return $added;
    }

}