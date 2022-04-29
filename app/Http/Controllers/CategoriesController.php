<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\categories;

use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = categories::orderBy('created_at')->paginate(5);
        return view('dashboard.post.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.post.createCat', [
            'categories' => new categories()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $categories)
    {
        //
        //echo "Post Store";
        //var_dump($request);
        //dd($request);
       /* $validated = $request->validate([
            'tittle' => 'required | min:5 | max:500',
            'url_clean' => 'required',
            'content' => 'min:1 | max:500'
        ]);*/
        //dd($validated);
        //dd($request->validated());
        categories::create($categories->validated());
        return back()->with('status','Category created successfully');
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
        return "show: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories)
    {
        //
        return view('dashboard.post.editCategories', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $categories, categories $post)
    {
        $post->update($categories->validated());
        //dd($request->validated());
        return back()->with('status','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $post)
    {
        $post -> delete();
        return back()->with('status','Category deleted successfully');
    }
}
