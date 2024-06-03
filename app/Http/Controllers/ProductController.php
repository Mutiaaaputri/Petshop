<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Stok;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Product List';
        $Products = Product::all();
        return view('product.index', [
        'pageTitle' => $pageTitle,
        'Products' => $Products
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Product';
        $stoks = DB::select('select * from stoks');
        return view('product.create', ['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':harus diisi.',
            'unic' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
        ];

        $validator = Validator::make($request->all(), [
            'Nama_Product' => 'required',
            'Code' => 'required',
            'Deskripsi' => 'required',
            'Harga' => 'required|numeric',
            'Stock' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = New Product;
        $Product->code_product = $request->Code;
        $Product->name_product = $request->Nama_Product;
        $Product->harga = $request->Harga;
        $Product->stock = $request->Stock;
        $Product->deskripsi = $request->Deskripsi;
        // $Product->original_imagename = $originalimagename;
        // $Product->encrypted_imagename = $encryptedimagename;
        $Product->save();

        // Alert::success('Berhasil di Tambahkan', 'Product Telah di Tambahkan Ke Catalog');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Product';
        $Products = Product::find($id);

        return view('show', [
        'pageTitle' => $pageTitle,
        'Products' => $Products
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Product';
        $Products = Product::find($id);
        return view('product.edit', [
        'pageTitle' => $pageTitle,
        'Products' => $Products
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'description' => 'Isi :attribute harus diisi dengan tulisan',
            'numeric' => 'Isi :attribute dengan angka'
        ];
    
        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required|numeric',
            'namabarang' => 'required',
            'jumlahbarang' => 'required|numeric',
            'hargabarang' => 'required|numeric',
            'description' => 'required',
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $product= New Product;
        $product->kodebarang =$request->kodebarang;
        $product->namabarang =$request->namabarang;
        $product->hargabarang =$request->hargabarang;
        $product->description =$request->desription;
        $product->satuans_id =$request->satuans_id;
        $product->save();
    
        return redirect()->route('Product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();

        return redirect()->route('product.index');
    }
}
