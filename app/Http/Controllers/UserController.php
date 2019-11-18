<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function list()
	{
		return view('user.index');
	}
    public function index()
    {
    	return User::get();
    	//return view('user.index');
    }

    public function store(Request $request)
    {
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return $user;
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return $user;
    }

    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();

    }
}
