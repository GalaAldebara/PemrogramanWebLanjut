<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $user = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $user]);
    }

    public function edit_simpan($id, Request $request)
    {
        $user = KategoriModel::find($id);
        $user->kategori_kode = $request->kategori_kode;
        $user->kategori_nama = $request->kategori_nama;
        $user->save();

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        $user = KategoriModel::find($id)->delete();
        $user->delete();
    }
}
