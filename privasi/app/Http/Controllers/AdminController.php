<?php

namespace App\Http\Controllers;

use App\User;
use App\Artikel;
use Hash;
use Flash;
use Alert;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getDashboard()
    {
        return view('admin.index');
    }

    public function getCsv()
    {
      return view('admin.formin');
    }

    public function getDataCsv()
    {
        $blog = Artikel::query()->get();
        return view('admin.csv')->with(['blog' => $blog]);
    }

    public function postSignUp(Request $request)
    {
      $username = $request['username'];
      $password = $request['password'];
      $hashed = Hash::make($password);

      $user = new User();
      $user->username = $username;
      $user->password = $hashed;

      $user->save();

      Auth::login($user);

      Flash::success('Successfully Registered !');

      return redirect()->route('admin.index');
    }

    public function postSignIn(Request $request)
    {
      # code...
        $this->validate($request, [
            'username' => 'required|max:100',
            'password' => 'required|max:100'
        ]);

        if (!Auth::attempt(['username' => $request['username'] , 'password' => $request['password']])) {
            # code...
            Flash::error('Username atau Password Salah !');
            return redirect()->back()->withError('username');
        }
        return redirect()->route('admin.index');
    }

    public function logout()
    {
      Auth::logout();

      Flash::overlay('You have been logged out.');

      return view('index');
    }

}
