<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('landing.index');
    }
    public function detail(){
        return view ('landing.detail');
    }
    public function product() {
        return view ('landing.detail-produk');
    }
    public function kontak() {
        return view ('landing.kontak');
    }
    public function tata_cara() {
        return view ('landing.tata-cara');
    }
    public function anggota() {
        return view ('landing.anggota');
    }
    public function kegiatan() {
        return view ('berita.kegiatan');
    }
}
