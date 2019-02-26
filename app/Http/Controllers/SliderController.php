<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSlider;
use App\Http\Requests\UpdateSlider;
use File;
use App\Http\Resources\SliderResource;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders=Slider::paginate();
        return view('admin.slider',compact('sliders'));
        
    }
//
    public function indexJson()
    {

        $sliders=Slider::paginate();
        return new SliderResource($sliders);
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
    public function store(StoreSlider $request)
    {
      if($slider= Slider::create($request->all())){

         return redirect()->route('Slider')->with('success', 'You have just add one image');
      }else {
          return back()->with('failed', 'one image Not saved.');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlider $request, Slider $slider)
    {


      if (! is_null($request->image)) {
        $oldImage=$slider->image;
      }
      if($slider->update($request->all())){
        if(File::exists($oldImage)) {
            File::delete($oldImage);
        }
         return redirect()->route('Slider')->with('success', 'You have just update one image');
      }else {
          return back()->with('failed', 'one image Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
     {
           $Slider=Slider::find($request->id);
         if (! $Slider) {
           return back()->with('failed', 'image  Not deleted.');
         }else {
           $oldImage=$Slider->image;
           $Slider->delete();
           if(File::exists($oldImage)) {
               File::delete($oldImage);
           }
           return back()->with('success', 'You have just delete one image');
         }
     }
}
