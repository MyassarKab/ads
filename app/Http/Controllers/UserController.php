<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    public function ajaxImage(Request $request)
    {

            $validator = Validator::make($request->all(),
                [
                    'file' => 'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:5000',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)',
                    'file.max'=>'the image size must be less than 0.5 mb.'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'upload/users';

            $filename = str_random(5).'.' . $extension;
            $request->file('file')->move($dir, $filename);
            $finel=$dir.'/'.$filename;


              //
              $user = \Auth::user();
              // $this->UserImage($finel);

              $user->image=$finel;
              $user->save();
            echo  $filename;

    }

    public function deleteImage($filename)
    {
        File::delete('upload/users' . $filename);
          $user = \Auth::user();
          $user->image=null;
          $user->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
