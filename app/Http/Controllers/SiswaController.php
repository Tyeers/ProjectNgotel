<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //digunakan untuk menampilkan data ke halamanan alamat url siswa
        // seperti di halaman 9
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan form inputan tambah data 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //digunakan untuk proses menambah data
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
     //digunakan untuk menampilkan halaman lihat data   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}
