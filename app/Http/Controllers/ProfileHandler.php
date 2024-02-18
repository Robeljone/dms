<?php

namespace App\Http\Controllers;

use App\Models\Citys;
use App\Models\FiledStudys;
use App\Models\Zones;
use Illuminate\Http\Request;
use App\Models\LeadersProfiles;
use Illuminate\Support\Facades\Log;

class ProfileHandler extends Controller
{
    public function sub_city_pg()
    {
        $fields = FiledStudys::query()->get();
        $citys = Citys::query()->get();
        $zones = Zones::query()->get();
        $records = LeadersProfiles::query()->where('woreda','=',null)->get();
        return view('subcity',['leaders'=>$records,'fileds'=>$fields,'city'=>$citys,'zones'=>$zones,'script'=>'subcity.js']);
    }
    public function new_profile_sub(Request $request)
    {
        $request->validate([
            "fname"=>"required|string",
            "gender"=>"required|string",
            "age"=>"required",
            "city"=>"required",
            "zone"=>"required",
            "nation"=>"required",
            "edu_level"=>"required",
            "fos"=>"required",
            "pre_role"=>"required",
            "cur_role"=>"required",
            "profile_pic"=>"required"
        ]);
        try {
//            LeadersProfiles::query()->create([
//                "name"=>$request->fname,
//                "gender"=>$request->gender,
//                "age"=>$request->age,
//                "city"=>$request->city,
//                "zone"=>$request->zone,
//                "nationality"=>$request->nation,
//                "edu_level"=>$request->edu_level,
//                "field_of_study"=>$request->fos,
//                "prev_role"=>$request->pre_role,
//                "curr_role"=>$request->fname,
//                "org_id"=>"",
//                "img"=>"",
//                "extension"=>,
//                "cuid"=>
//            ]);
            Log::debug($request);
            return response()->json([
                'message' => "Profile Add Success",
                'status' => 'Error',
            ], 200);
        }catch (Exception $e)
        {
            Log::debug($e);
            return response()->json([
                'message' => "Failed Please contact Admin",
                'status' => 'Error',
            ], 500);
        }
    }

}
