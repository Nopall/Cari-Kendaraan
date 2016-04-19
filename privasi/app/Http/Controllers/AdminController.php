<?php

namespace App\Http\Controllers;

use App\User;
use App\Artikel;
use Alert;
use Hash;
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

      Alert::success('Pendaftaran Berhasil', 'Success');

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
            Alert::error('Gagal','Error');
            return redirect()->back();
        }
        return redirect()->route('admin.index');
    }

    public function logout()
    {
      Auth::logout();

      Alert::success('Anda Berhasil Logout');

      return view('index');
    }

    public function inputCsv(Request $request)
    {
      $tanggal = $request['tanggal'];
      $judul = $request['judul'];
      $berita = $request['berita'];
      $gambar = $request['file'];
      $tmpFilePath = 'public/img';
      $filename  = time() . '.' . $gambar->getClientOriginalExtension();
      $path = $tmpFilePath.$filename;
      $data_file = $gambar->move($tmpFilePath,$filename);

      $artikel = new Artikel();
      $artikel->tanggal = $tanggal;
      $artikel->judul = $judul;
      $artikel->berita = $berita;
      $artikel->gambar = $data_file;

      if ($artikel->save()) {
        # code...
      Alert::success('Artikel Berhasil Ditambahkan', 'Success');

      return redirect('/admin/putcsv');
      } else {
        # code...
        Alert::error('Artikel Gagal Ditambahkan');
        return redirect('/admin/dashboard');
      }

    }

    public function update(Request $request, $id)
    {
      $blog = Artikel::find($id);

      if ($request->hasFile('file')) {
        # code...
        $blog['file'] = $this->deletePhoto($gambar);

        $blog['file'] = $this->simpanPhoto($request->file('file'));
        $blog->gambar = $blog['file'];
      }

      $blog->judul = Input::get('judul');
      $blog->tanggal = Input::get('tanggal');
      $blog->berita = Input::get('berita');
      $blog->save();

      Alert::success('Artikel Baru Diupdate', 'Success');
      return redirect('/admin/csv');
    }

    public function deletePhoto($gambar)
    {
      Find::delete($gambar);
      return $gambar;
    }

    public function simpanPhoto($gambar)
    {
      $tmpFilePath = 'public/img';
      $filename  = time() . '.' . $gambar->getClientOriginalExtension();
      $path = $tmpFilePath.$filename;
      $data_file = $gambar->move($tmpFilePath,$filename);

      return $blog['gambar'];
    }

}
