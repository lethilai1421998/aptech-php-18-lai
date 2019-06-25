<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        //dd($users);
        return view(
            'welcome',
            [
                'nguoi_dung' => $users,
            ]
        );
    }
}
