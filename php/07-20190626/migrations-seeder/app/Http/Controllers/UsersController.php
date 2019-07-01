<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
function HienThiFormNguoiDung()
{
    return view('HienThiFormNguoiDung');
}
public function docTatCaNguoiDung()
{
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
  
public function docMotNguoiDung($idnguoi_dung)
{
    $users = DB::table('users')->where('id',$idnguoi_dung)->get();

        //dd($users);
        return view(
            'docMotNguoiDung',
            [
                'nguoi_dung' => $users,
            ]
        );
}
  
function sua_Nguoi_dung()
{
    return view('sua-nguoi-dung');
}
}
