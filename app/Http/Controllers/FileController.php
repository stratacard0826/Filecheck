<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GlobalService;

class FileController extends controller {

    public function checkAddedFile(){
        $added = GlobalService::checkAddedFile();
        if($added){
            return "Added";
        }else{
            return "there is no";
        }
    }
    
}
