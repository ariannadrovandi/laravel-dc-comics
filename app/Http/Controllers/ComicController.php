<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $form_data = $request->all();
        $newComic = new Comic();
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
        // $newComic->artists = $form_data['artists'];
        // $newComic->writers = $form_data['writers'];
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show')->with('message', "Il comic con id {$newComic->id} è stato salvato con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Comic $comic)
    {
        //$comics = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($form_data);
        $data_form = $request->all();
         // $comic = Comic::findOrFail($id);
        $comic->update($data_form);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        //
    }
}
