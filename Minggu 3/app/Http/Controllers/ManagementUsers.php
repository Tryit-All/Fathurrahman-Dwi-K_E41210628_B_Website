<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUsers extends Controller
{
    //Method di bawah nantinya akan bisa di panggil melalui route
    public function register()
    {
        //memeberikan nilai pada variabel $nama dengan nilai berupa string
        $nama = "Fathur";

        //memeberikan nilai pada variabel $nama dengan nilai berupa array
        $dataDiri = ["Mahasiswa", "E41210628"];

        //memanggil file 'home' dengan menggunakan method view
        //method view berguna untuk menampilkan hasil saja dari file yang di panggil 
        return view(

            //file yang di panggil bernama 'home' di ambil dari nama dari file 
            //home.blade.php nama 'home' di panggil dari kata depan nya saja 
            'home',
            [
                //memeberikan nilai pada argumen 'nama' dan 'dataDiri'
                //nilai nya di dapat dari method di atas yang telah diisikan nilai sebelumnya 
                'nama' => $nama,
                'dataDiri' => $dataDiri
            ]


        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Method ini digunakan untuk mengambil semua data user";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Method ini digunakan untuk menampilkan form untuk menambah data user";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Method ini digunakan untuk melakukan proses tambah data user";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Method ini digunakan untuk menampilkan data user " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Method ini digunakan untuk menampilkan form untuk mengubah data " . $id;
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
        return "Method ini digunakan untuk melakukan proses update data " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Method ini digunakan untuk melakukan hapus data " . $id;
    }
}