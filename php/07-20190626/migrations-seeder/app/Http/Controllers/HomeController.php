<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    
    public function __construct() {
    	$this->middleware('auth');
    }

    public function getIndex() {
        $users = DB::table('users')->get();
        echo 'gia tri la' . $users->count();

        //dd($users);
        return view(
            'docTatCaNguoiDung',
            [
                'nguoi_dung' => $users,
            ]
        );
    }
}