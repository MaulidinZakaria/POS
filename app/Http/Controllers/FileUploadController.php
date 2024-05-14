<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    // public function prosesFileUpload(Request $request)
    // {
        // dump($request->berkas);

        // $request->validate([
        //     'nama' => 'required',
        //     'berkas' => 'required|file|image|max:500'
        // ]);
        // $extFile = $request->berkas->getClientOriginalName();
        // $namaFile = 'web-'.time().".".$extFile;
        // $path = $request->berkas->move('gambar', $namaFile);
        // $path = str_replace('\\', '//', $path);
        // echo "Variabel path berisi: $path <br>";

        

        // if($request->hasFile('berkas')) {
        //     echo "path(): ".$request->berkas->path() ."<br>";
        //     echo "extension(): ".$request->berkas->extension()."<br>";
        //     echo "getClientOriginalExtension(): ".$request->berkas->getClientOriginalExtension()."<br>";
        //     echo "getMimeType(): ".$request->berkas->getMimeType()."<br>";
        //     echo "getClientOriginalName(): ".$request->berkas->getClientOriginalName()."<br>";
        //     echo "getSize(): ".$request->berkas->getSize()."<br>";
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }
    // }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'berkas' => 'required|file|image|max:500'
        ]);

        
        $path = $request->berkas->storeAs('public', $request->nama);
        $fileExt = $request->berkas->getClientOriginalExtension();
        $nama = $request->nama . '.' . $fileExt;

        $pathBaru = asset('storage/'.$request->nama);
        echo "Gambar berhasil di upload ke <a href='$pathBaru'>$nama</a>";
        echo "<br> <br>";
        echo "<img src='$pathBaru' alt='gambar yang diupload' height='200px' width='200px'>";
    }
}
