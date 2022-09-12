<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return BookResource::collection($books);
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
        //ulogovani korisnik dodaje knjige
        $validator = Validator::make($request->all(), 
            [
                'naziv'=>'required|string|max:255',
                // 'broj_strana'=>'required|integer',
                // 'godina_izdavanja'=>'required|integer|min:0|max:2022',
                // 'writer_id'=>'required|integer',
                // 'genre_id'=>'required|integer',
            ]);
        
        if ($validator->fails())
            return response()->json($validator->errors());

        $book = Book::create([
            'naziv' => $request->naziv,
            'broj_strana' => $request->broj_strana,
            'godina_izdavanja' => $request->godina_izdavanja,
            'writer_id' => $request->writer_id,
            'genre_id' => $request->genre_id,
            'library_id' => Auth::user()->library_id,
        ]);

        return response()->json(['Book is created successfully.', new BookResource($book)]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
   
    public function show($book_id)
    {
        $book = Book::find($book_id);
        if(is_null($book))
            return response()->json('Book not found',404);
        return new BookResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), 
        [
            'naziv'=>'required|string|max:255',
            'broj_strana'=>'required|integer',
            'godina_izdavanja'=>'required|integer|min:0|max:2022',
            'writer_id'=>'required|integer',
            'genre_id'=>'required|integer',
        ]);
    
        if ($validator->fails())
            return response()->json($validator->errors());

        $book->naziv= $request->naziv;
        $book->broj_strana= $request->broj_strana;
        $book->godina_izdavanja= $request->godina_izdavanja;
        $book->writer_id= $request->writer_id;
        $book->genre_id= $request->genre_id;

        $book->save();

        return response()->json(['Book is updated successfully.', new BookResource($book)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json('Book is deleted successfully.');
    }
}
