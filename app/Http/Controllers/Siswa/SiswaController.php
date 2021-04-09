<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siswa;
use Carbon\Carbon;
use App\Http\Requests\SiswaRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa_list = Siswa::all();
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $input = $request->all();
        //perintah utk menyimpan ke database
        Siswa::create($request->all());
        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return  view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $tglLahir = date('Y-m-d', strtotime($siswa->tanggal_lahir));
        return view('siswa.edit', compact('siswa','tglLahir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::whereId($id)->delete();
        return redirect('siswa');
    }

    public function cari(Request $request) {
        $data = $request->all();

        $siswa_list = Siswa::where('jenis_kelamin', '=', $data['jenis_kelamin'])->get();
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }
}
