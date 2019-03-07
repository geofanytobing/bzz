<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function pesan()
    {
    	return redirect('/admin/profile')->with('success','Berhasil Tambah Data');
    }
}
