<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Visualizzazione della richiesta
       //dd($request->all());

       // Validare i dati inseriti dall'utente
        $validated_data = $request->validate([
            'title' => 'required|max:100',
            'thumb' => 'required',
            'price' => 'nullable',
            'series' => 'nullable',
            'description' => 'nullable'
        ]);

         //dd($validated_data);

        // Salvare i dati nel database
        Comic::create($validated_data);

       
       /* Alterativa estesa per l'inserimento di dati nel database
        $comic = new Comic();
       $comic->title = $request->title;
       $comic->thumb = $request->thumb;
       $comic->price = $request->price;
       $comic->series = $request->series;
       $comic->description = $request->description;
       $comic->save();
       */
      
       return redirect()->route('comics.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
