<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        return redirect('/kategori');
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);

    //     return redirect('/kategori');
    // }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', [
            'data' => $data,
        ]);
    }

    public function update($id, Request $request)
    {
        KategoriModel::where('kategori_id', $id)->update([
            'kategori_kode' => $request->kategogori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        KategoriModel::destroy($id);
        return redirect('/kategori');
    }
}