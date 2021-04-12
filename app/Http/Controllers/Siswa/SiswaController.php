<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siswa;
use App\Model\Telepon;
use App\Model\Kelas;
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
        $list_kelas = Kelas::all();
        return view('siswa.create', compact('list_kelas'));
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
        //perintah utk menyimpan ke table siswa
        $siswa = Siswa::create($request->all());

        //perintah utk menyimpan ke table telepon
        $telepon = new Telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);

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
        $siswa->no_telepon = !empty($siswa->telepon->no_telepon) ? $siswa->telepon->no_telepon : '-';
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
        $list_kelas = Kelas::all();
        $siswa->no_telepon = !empty($siswa->telepon->no_telepon) ? $siswa->telepon->no_telepon : '-';
        $tglLahir = date('Y-m-d', strtotime($siswa->tanggal_lahir));
        return view('siswa.edit', compact('siswa','tglLahir', 'list_kelas'));
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

        $telepon = $siswa->telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);

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
