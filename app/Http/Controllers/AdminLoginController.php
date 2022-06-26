<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Manager;
use App\Models\AdminUser;

class AdminLoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function adminShow()
    {
        $shops = Shop::all();
        $managers = AdminUser::all();
        return view('admin',compact('shops','managers'));
    }

    public function add(Request $request)
    {
        AdminUser::create([
            'name' => $request->manager_name,
            'shop_id' => $request->shop_name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/admin');
    }

    public function manageShow()
    {
        return view('manager');
    }
}
