<?php

namespace App\Http\Controllers;

use App\Trash;
use App\Category;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trashes = Trash::all();
        return view('trash/index', ['trashes' => $trashes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('trash/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form before storing
        $request->validate([
            'trashName' => 'required'
        ]);

        // find correspondent category
        $categories = Category::all();
        $category = $categories->find($request->category_id);

        Trash::create([
            'category_id' => $request->category_id,
            'name' => $request->trashName,
            'category_name' => $category->name,
        ]);
        return redirect('/trashes')->with('status', 'Trash Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function show(Trash $trash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function edit(Trash $trash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trash $trash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trash $trash)
    {
        Trash::destroy($trash->id);
        return redirect('/')->with('status', 'Trash Deleted!');
    }
}
