<?php

namespace App\Http\Controllers;

use App\Type;
use App\brand;
use App\Category;
use App\Http\Requests\StoreType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $brands=brand::get();
      $categories= Category::all();
      $Type=Type::with(['Category','Brand'])->get();
      return view('admin.type',compact('brands','categories','Type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType $request)
    {
      if(Type::create($request->all())){

         return redirect()->route('Type')->with('success', 'You have just added one Type');
      }else {
          return back()->with('failed', 'one Type Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
   
        $brands=brand::get();
        $categories= Category::all();
        return view('admin.TypeEdit',compact('brands','categories','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(StoreType $request, Type $type)
    {
      if($type->update($request->all())){

         return redirect()->route('Type')->with('success', 'You have just updated one Type');
      }else {
          return back()->with('failed', 'one Type Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
          $Type=Type::find($request->id);
        if (! $Type) {
          return back()->with('failed', 'Type  Not deleted.');
        }else {
          $Type->delete();
          return back()->with('success', 'You have just deleted one Type');
        }
    }
}
