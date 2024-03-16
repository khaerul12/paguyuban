<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Biodata;
use App\Models\City;
use App\Models\Province;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }


    public function landingpage(){
        return view('landingpage', [
            'activities' => Activity::skip(0)->take(3)->get(),
            // 'city' => City::where('count','<>', 0)->count()

        ]);
    }



    public function detail($id){

         return view('detail',[
             'biodata' => Biodata::find($id)
         ]);
    }

    public function province(){
//        $jsonProvinces = Storage::json('/public');

//        dd($jsonContent);

//        foreach ($jsonProvinces as $data){
//            $province = new Province();
//            $province->name=$data['name'];
//            $province->save();
//        }

        return 'successfully';
    }
}
