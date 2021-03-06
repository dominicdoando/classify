<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childcategory;
use Illuminate\Support\Str;
use App\Http\Requests\ChildCategorRequest;
use App\Http\Requests\ChildCategoryUpdateRequest;
class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategories = Childcategory::orderBy('subcategory_id')->get();
        return view('backend.childcategory.index', compact('childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.childcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildCategorRequest $request)
    {
        Childcategory::create([
            'name' => $name = $request->name,
            'subcategory_id' => $request->subcategory_id,
            'slug' => Str::slug($name)
        ]);
        return back()->with('message', 'ChildCategory create successfully');
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
        $childcategory = Childcategory::find($id);
        return view('backend.childcategory.edit', compact('childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChildCategoryUpdateRequest $request, $id)
    {
        $childcategory = Childcategory::find($id);
        $childcategory->update([
            'name' => $request->name,
            'subcategory_id' => $request->subcategory_id,
        ]);
        return redirect()->route('childcategory.index')->with('message', 'Child Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $childcategory = Childcategory::find($id);
        $childcategory->delete();
        return redirect()->route('childcategory.index')->with('message', 'Child Category delete successfully');
    }
}
