<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
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
  
public function docmotnguoidung($idnguoi_dung)
{
    $users = DB::table('users')->where('id',$idnguoi_dung)->get();
//dd($users);
        return view(
            'docmotnguoidung',
            [
                'nguoi_dung' => $users,
            ]
        );
}
public function Signin()
{
    return view('signin');
}

public function index()
{
    $users = DB::table('users')->get();
    return view('users.index', [
        'users' => $users
    ]);
}

function show($id)
{
    $user = DB::table('users')->where('id', $id)->get();
    return view('users.show',[
        'users'=>$user[0]
    ]);
}
function destroy($id)
{
    $user = DB::table('users')->where('id', $id)->delete();
    $users = DB::table('users')->get();
    return view('users.index', [
        'users' => $users
    ]);
}
function edit($id)
{
    $users = DB::table('users')->where('id', $id)->get();
    return view('users.edit', [
        'users' => $users[0]
    ]);
}
function update($id)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $_GET $_POST
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'email' => $email
        ]);
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.show',[
            'users' => $user[0]
        ]);
}

}
