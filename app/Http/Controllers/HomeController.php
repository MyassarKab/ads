<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeProducts=Product::where([['user_id',auth()->user()->id],['is_active',1],['approved',1]])->get();
      $archivedProducts=Product::where([['user_id',auth()->user()->id],['is_active',0],['approved',1]])->get();
      $pendingProducts=Product::where([['user_id',auth()->user()->id],['is_active',1],['approved',0]])->get();
      if (! auth()->user()->verified) {
     auth()->logout();

     return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
       }
      if (Auth::check()) {

        switch (auth()->user()->role) {
          case 1:
            return view('admin.index');
            break;

          case 0:
              return view('normal_user',compact('activeProducts','archivedProducts','pendingProducts'));
              break;

          case 2:
              return view('saler_home');
              break;

         case 3:
             return view('market_home');
             break;
          default:
            return Redirect::route('main');
            break;
        }
    // if(->isAdmin()) {
    //
    // }

  }
        return view('home');

    }
}
