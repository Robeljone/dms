<?php

namespace App\Http\Controllers;

use App\Models\Citys;
use App\Models\LeadersProfiles;
use App\Models\MainOffices;
use App\Models\Organizations;
use App\Models\Roles;
use App\Models\Zones;
use Exception;
use Illuminate\Http\Request;
use App\Models\FiledStudys;
use Illuminate\Support\Facades\Log;

class Settings extends Controller
{

    public function woreda()
    {
        $fields = FiledStudys::query()->get();
        $citys = Citys::query()->get();
        $zones = Zones::query()->get();
        $records = LeadersProfiles::query()->where('woreda','!=',null)->get();
        return view('woreda',['leaders'=>$records,'fileds'=>$fields,'city'=>$citys,'zones'=>$zones,'script'=>'woreda.js']);
    }

    public function organ_pg()
    {
        $main_off = MainOffices::query()->where("status",'=',1)->get();
        $organs = Organizations::query()->where("status",'=',1)->get();
        return view('organ',['office'=>$main_off,'organs'=>$organs,'script'=>'organ.js']);
    }
    public function role_pg()
    {
        return view('role',['script'=>'role.js']);
    }

    public function organ_add(Request $request)
    {
        try {
            Log::debug($request);
           $request->validate([
               "office"=>"required",
               "org_name"=>"required"
           ]);
           Organizations::query()->create([
               "main_off_id"=>$request->office,
               "name"=>$request->org_name,
               "status"=>1,
               "cuid"=>1,
           ]);
            return response()->json([
                'message' => "Record Add Success",
                'status' => 'Success',
            ], 200);
        }catch (Exception $e)
        {
            Log::debug($e);
            return response()->json([
                'message' => "Record Add Failed",
                'status' => 'Error',
            ], 400);
        }
    }

    public function role_add(Request $request)
    {
        try {
            Log::debug($request);
            $request->validate([
                "role_name"=>"required",
            ]);
            Roles::query()->create([
                "name"=>$request->role_name,
                "status"=>1,
                "cuid"=>1,
            ]);
            return response()->json([
                'message' => "Record Add Success",
                'status' => 'Success',
            ], 200);
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
