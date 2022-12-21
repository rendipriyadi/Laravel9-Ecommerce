<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use library here
use Illuminate\Support\Facades\Storage;

// request
use App\Http\Requests\Backsite\Product\StoreProductRequest;
use App\Http\Requests\Backsite\Product\UpdateProductRequest;

// use model here
use App\Models\Backsite\Category;
use App\Models\Backsite\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for table grid
        $product = Product::orderBy('created_at', 'desc')->get();

        // for select2 = ascending a to z
        $category = Category::orderBy('name', 'asc')->get();;

        return view('pages.backsite.product.index', compact('product', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // get all request from frontsite
        $data = $request->all();

        // re format before push to table
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price'] = str_replace('IDR ', '', $data['price']);

        // upload process here
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->storeAs('assets/file-product',  $request->file('photo')->getClientOriginalName());
        } else {
            $data['photo'] = "";
        }

        // store to database
        $product = Product::create($data);

        alert()->success('Sukses', 'Product Berhasil Ditambahkan');
        return redirect()->route('backsite.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decrypt_id = decrypt($id);
        $product = Product::find($decrypt_id);

        return view('pages.backsite.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt_id = decrypt($id);
        $product = Product::find($decrypt_id);

        $category = Category::orderBy('name', 'asc')->get();;

        return view('pages.backsite.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // get all request from frontsite
        $data = $request->all();

        // re format before push to table
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price'] = str_replace('IDR ', '', $data['price']);

        // cari old photo
        $path_file = $product['photo'];

        // upload process here
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->storeAs('assets/file-product',  $request->file('photo')->getClientOriginalName());
            // hapus file
            if ($path_file != null || $path_file != '') {
                Storage::delete($path_file);
            }
        } else {
            $data['photo'] = $path_file;
        }

        // update to database
        $product->update($data);

        alert()->success('Sukses', 'Produk Berhasil diupdate');
        return redirect()->route('backsite.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decrypt_id = decrypt($id);
        $product = Product::find($decrypt_id);

        // cari old photo
        $path_file = $product['photo'];

        // hapus file
        if ($path_file != null || $path_file != '') {
            Storage::delete($path_file);
        }

        $product->forceDelete();

        alert()->success('Sukses', 'Data Berhasil dihapus');
        return back();
    }
}
