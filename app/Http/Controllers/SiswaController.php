<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return "Tabel Data Siswa";
    }

    public function tampil()
    {
        $datasiswa = Siswa::all();
        return view('siswa.dataSiswa', ['datasiswa' => $datasiswa]);
    }

    public function detail($siswa)
    {
        $result = Siswa::find($siswa);
        return view('siswa.detailSiswa', ['siswa' => $result]);
    }

    public function simpan()
    {
        return view('siswa.form');
    }
    public function prosesSimpan(Request $request)
    {
        // dump($request);
        $validateData = $request->validate([
            'nis' => 'required|size:10',
            'nama_siswa' => 'required|min:3|max:60',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jurusan' => 'required',
            'nohp' => 'required'
        ]);
        $siswa = new Siswa();
        $siswa->nis = $validateData['nis'];
        $siswa->nama_siswa = $validateData['nama_siswa'];
        $siswa->alamat = $validateData['alamat'];
        $siswa->tempat_lahir = $validateData['tempat_lahir'];
        $siswa->tanggal_lahir = $validateData['tanggal_lahir'];
        $siswa->jurusan = $validateData['jurusan'];
        $siswa->nohp = $validateData['nohp'];
        $siswa->save();

        $request->session()->flash('pesan', "Data {$validateData['nama_siswa']} berhasil ditambahkan");
        return redirect()->route('siswa.data');
    }

    public function hapus($id)
    {
        DB::table('siswas')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        session()->flash('hapus', "Data berhasil dihapus");
        return redirect()->route('siswa.data');
    }

    public function edit(Siswa $siswa)
    {
        // dd($siswa);
        return view('siswa.formeditsiswa', ['siswa' => $siswa]);
    }

    public function prosesEdit(Request $request, Siswa $siswa)
    {
        $validateData = $request->validate([
            'nis' => 'required|size:10',
            'nama_siswa' => 'required|min:3|max:60',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jurusan' => 'required',
            'nohp' => 'required'
        ]);
        Siswa::where('id', $siswa->id)->update($validateData);

        $request->session()->flash('pesan', "Data {$validateData['nama_siswa']} berhasil diubah");
        return redirect()->route('siswa.data');
    }
}
