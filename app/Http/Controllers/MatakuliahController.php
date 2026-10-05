<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        return "Menampilkan form tambah matakuliah";
    }

    public function store(Request $request)
    {
        return "Menyimpan data matakuliah";
    }

    public function show($kode)
    {
        return "Masukan kode matakuliah ";
    }

    public function edit($kode)
    {
        return "Menampilkan form edit matakuliah $kode";
    }

    public function update(Request $request, $kode)
    {
        return "Mengupdate data matakuliah $kode";
    }

    public function destroy($kode)
    {
        return "Menghapus data matakuliah $kode";
    }
}
