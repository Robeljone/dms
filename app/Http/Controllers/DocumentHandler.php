<?php

namespace App\Http\Controllers;

use App\Models\Directories;
use App\Models\Files;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

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
    public function list_files()
    {
        $files = Files::query()->with(['directory'])->get();
        return view("file_list_city",['files'=>$files,'script' => 'files.js']);
    }
    public function list_sub_directory($id)
    {
        $dir = Directories::query()
            ->where('parent','=',$id)
            ->where('woreda','=',null)
            ->where('status','=',1)
            ->get();
        return view("sub_folder",['dire'=>$dir,'dir_id'=>$id,'script' => 'sub_folder.js']);
    }
    public function save_folder(Request $request)
    {
        try {
            $request->validate([
                "folder_name"=>"required|string"
            ]);
            Directories::query()->create([
                "parent"=>$request->dir_id,
                "name"=>$request->folder_name,
                "status"=>1,
                "cuid"=>1,
            ]);
            return Redirect::to("sub_folder/$request->dir_id");
        }catch (Exception $e)
        {
            Log::debug($e);
            return response()->json([
                'message' => "Record Add Failed",
                'status' => 'Error',
            ], 400);
        }
    }

    public function save_file(Request $request)
    {
        try {
            $base64Image = base64_encode($request->file_na);
            $file = explode('.',$request->file_na);
            $request->validate([
                "file_name"=>"required|string",
                "file_na"=>"required"
            ]);
            Files::query()->create([
                "dir_id"=>$request->dir_id,
                "name"=>$request->file_name,
                "base"=>$base64Image,
                "extension"=>$file[1],
                "status"=>1,
                "cuid"=>1,
            ]);
            return Redirect::to("sub_folder/$request->dir_id");
        }catch (Exception $e)
        {
            Log::debug($e);
            return response()->json([
                'message' => "Record Add Failed",
                'status' => 'Error',
            ], 400);
        }
    }

}
