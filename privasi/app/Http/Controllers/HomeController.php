<?php
/**
 * Created by PhpStorm.
 * User: outattacker
 * Date: 09/04/16
 * Time: 11:28
 */

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function getHome()
    {
      return view('index');
    }

    public function getRedir()
    {
      return view('redir');
    }

    public function getFav()
    {
      return view('fav');
    }

    public function getCari()
    {
        return view('template.sresult');
    }

    public function blog()
    {
        return view('template.blog');
    }

    public function about()
    {
      return view('template.about');
    }

    public function getDProduk()
    {
      return view('template.dproduk');
    }

    public function getMobil()
    {
      return view('template.mobil');
    }

    public function getMotor()
    {
      return view('template.motor');
    }

    public function getSepeda()
    {
      return view('template.sepeda');
    }

    public function cariData(Request $request)
    {
        $nama = $request->input('nama');
        $institusi = $request->input('ins');

        $cari = DB::select("SELECT * FROM tabel_biodata where nama = '.$nama.' AND nama_instansi = '.$institusi.' ");

        return redirect()->route('template.sresult')->with(['cari' => $cari ,'nama' => $nama ,'nama_instansi' => $institusi ]);
    }

    public function lihatData(Request $request)
    {
        $show = DB::select("SELECT * FROM tabel_biodata");

        return redirect()->route('template.sresult')->with(['show' => $show]);
    }
}
