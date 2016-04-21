<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artikel;
use Alert;
use File;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Artikel::orderBy('id','desc')->paginate(5);
        // $data = Blog::simplePaginate(5);
        return view('Admin.Blog.index',['blog'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tanggal = $request['tanggal'];
        $judul = $request['judul'];
        $slug = str_slug($judul);
        $berita = $request['berita'];
        $gambar = $request['file'];
        $tmpFilePath = 'public/img';
        $filename  = time() . '.' . $gambar->getClientOriginalExtension();
        $path = $tmpFilePath.$filename;
        $data_file = $gambar->move($tmpFilePath,$filename);

        $artikel = new Artikel();
        $artikel->tanggal = $tanggal;
        $artikel->judul = $judul;
        $artikel->slug = $slug;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Artikel::where('id', '=', $id)->first();

        return view('admin.updeta')->with(['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Artikel::findOrFail($id);
        $hapusGambar = $this->deletePhoto($blog->gambar);
        $blog->delete();

        Session::flash('flash_message', 'Artikel Berhasil Dihapus');
        return redirect('/admin/csv');
    }

    public function deletePhoto($gambar)
    {
        File::delete($gambar);
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
