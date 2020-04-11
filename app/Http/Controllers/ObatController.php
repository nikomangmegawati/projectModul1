<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
     $title='obat';
     $obat=Obat::paginate(5);
     
     return view('admin.beranda',compact('title','obat'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='obat';
        return view('admin.InputObat',compact('title',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
        'required'=> 'Kolom :attribute Harus di isi dengan lengkap',
        'date'    => 'Kolom :attribute Harus Tanggal.',
        'numeric' => 'Kolom :attribute Harus di isi dengan Angka.',
        ];
        $validasi = $request->validate([
            'namaObat'=>'required',
            'jenisObat'=>'required',
            'harga'=>'numeric',
            'stock'=>'numeric',
            'kadaluarsa'=>'date'
        ],$messages);
        //dd($validasi);
        Obat::create($validasi);
        return redirect('obat')->with('success', 'Data Berhasil di update');
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
        $title='Input Obat';
        $obat=Obat::find($id);
        return view('admin.InputObat',compact('title','obat'));
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
        $messages = [
            'required'=> 'Kolom :attribute Harus di isi dengan lengkap',
            'date'    => 'Kolom :attribute Harus Tanggal.',
            'numeric' => 'Kolom :attribute Harus di isi dengan Angka.',
            ];
            $validasi = $request->validate([
                'namaObat'=>'required',
                'jenisObat'=>'required',
                'harga'=>'numeric',
                'stock'=>'numeric',
                'kadaluarsa'=>'date'
            ],$messages);
            //dd($validasi);
            Obat::whereid_obat($id)->update($validasi);
            return redirect('obat')->with('success', 'Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::whereid_obat($id)->delete();
        return redirect('obat')->with('success', 'Data Berhasil di Hapus');
    }
}
