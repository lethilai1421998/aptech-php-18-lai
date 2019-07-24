<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $users = DB::table('users')->get();
    return view('users.index', [
        'users' => $users
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password'=>$password
        ]);
        $users = DB::table('users')->get();
        return view('users.index',['users'=>$users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.show',[
            'users'=>$user[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::table('users')->where('id', $id)->get();
    return view('users.edit', [
        'users' => $users[0]
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('users')->where('id', $id)->delete();
    $users = DB::table('users')->get();
    return view('users.index', [
        'users' => $users
    ]);
    }
}
