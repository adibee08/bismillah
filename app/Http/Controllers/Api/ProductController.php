<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info("user sedang menampilkan semua data produk");
        $product = Product::select('id', 'namaproduk', 'harga', 'gambar')->get();
        return response()->json([
            "data" => $product
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
	$Validasi = Validator::make($request->all(), [
		'namaproduk'=> 'required',
		'deskripsi' => 'required',
		'harga'     => 'required|integer',
		'gambar'    =>'required|image|mimes:jpg,png|max:4096'
	]);

    
	if($Validasi->fails()){
		return response()->json($Validasi->error(),422);
	}

	$gambar = $request->file('gambar')->store('public/gambar');
	$data = Product::create([
		'namaproduk'=> $request->namaproduk,
		'deskripsi' => $request->deskripsi,
		'harga'     => $request->harga,
		'gambar'    => $gambar
	]);

    Log::info("user sedang menambahkan semua data produk");
	return response()->json([
		'status'    => 'berhasil',
		'data'      => $data
    ], 201);
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::select('id', 'namaproduk', 'harga', 'gambar')
        ->where('id', $id)->first();

        Log::info('user sedang menampilkan data produk dengan id='.$id);
        return response()->json([
            "data" => $product
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $Validasi = validator::make($request->all(), [
            'namaproduk'       => 'required',
            'deskripsi'        => 'required',
            'harga'            => 'required|integer'
        ]);

        Log::info('user sedang mengubah data produk  id='.$id);
        //respons kalau validasi gagal
        if ($Validasi->fails()) {
            return response()->json($Validasi->errors(), 422);
        }

        Product::where('id', $id)->update($request->all());

        return response()->json([
            "status"        => "Update Sukses" 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
	    if($product->gambar){
            Storage::delete($product->gambar);
	    }

        Log::info('user sedang menghapus data produk  id='.$id);
	    $product->delete();
	    return response()->json([
		"status" => "Hapus sukses"
	    ], 200);
    }
}
