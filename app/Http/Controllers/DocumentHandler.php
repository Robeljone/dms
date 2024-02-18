<?php

namespace App\Http\Controllers;

use App\Models\Directories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentHandler extends Controller
{
    public function list_directory()
    {
        $dir = Directories::query()
            ->where('parent','=',null)
            ->where('woreda','=',null)
            ->where('status','=',1)
            ->get();
        return view("folder",['dire'=>$dir,'script' => 'folder.js']);
    }
    public function list_sub_directory($id)
    {
        $dir = Directories::query()
            ->where('parent','=',$id)
            ->where('woreda','=',null)
            ->where('status','=',1)
            ->get();
        return view("folder",['dire'=>$dir,'script' => 'folder.js']);
    }
}
