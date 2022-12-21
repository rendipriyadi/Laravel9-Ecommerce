<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// request
use App\Http\Requests\Backsite\Category\StoreCategoryRequest;
use App\Http\Requests\Backsite\Category\UpdateCategoryRequest;

// use model here
use App\Models\Backsite\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('name', 'asc')->get();

        return view('pages.backsite.category.index', compact('category'));
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
    public function store(StoreCategoryRequest $request)
    {
        // get all request from 
        $data = $request->all();

        // store to database
        $category = Category::create($data);

        alert()->success('Sukses', 'Category Berhasil Ditambahkan');
        return redirect()->route('backsite.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // deskripsi id
        $decrypt_id = decrypt($id);
        $category = Category::find($decrypt_id);

        return view('pages.backsite.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $category->update($data);

        alert()->success('Sukses', 'Category berhasil diupdate');
        return redirect()->route('backsite.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deskripsi id
        $decrypt_id = decrypt($id);
        $category = Category::find($decrypt_id);

        // hapus ca$category
        $category->forceDelete();

        alert()->success('Sukses', 'Data berhasil dihapus');
        return back();
    }
}
