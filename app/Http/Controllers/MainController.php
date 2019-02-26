<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\brand;
use App\Type;
use Auth;
use App\brand_category;
use DB;
use Carbon\Carbon;

class MainController extends Controller
{
    public function main(){
        $Category=Category::get();
        return view('welcome',compact('Category'));
    }

    public function selectBrand($id)
    {
      $brand = DB::table('brands')
            ->join('brand_categories', 'brands.id', '=', 'brand_categories.brand_id')
            ->join('categories', 'categories.id', '=', 'brand_categories.category_id')
            ->select('brands.*')
            ->where('categories.id',$id)
            ->get();

            $Type=Type::where('category_id',$id)->get();

        $data = view('selectBrand',compact('brand','Type'))->render();

         return response()->json(['selectBrand'=>$data]);

    }

    public function selectType($brandId,$categoryId)
    {

      $Type=Type::where([['brand_id',$brandId],['category_id',$categoryId]])->get();

      $data = view('selectType',compact('Type'))->render();

       return response()->json(['selectType'=>$data]);


    }

    public function checkPoint(Request $request)
    {
        $today = Carbon::today();

        $date =new Carbon($request->date);

        $days=$date->diffInDays($today);
        $needPoint=$days*$request->urgently_kind;

        $points=Auth::user()->points-$needPoint;
        if ($points < 0) {
          $message="you dont have enough points to use this option, try another option or try make expiry date for less days";
        }else {
          $message="you have enough points to use this option";
        }

        return response()->json(['message'=>$message]);



    }
}
