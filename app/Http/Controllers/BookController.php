<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $data = Book::all();

        return view('book.index', compact('data'));
        // return response()->json([
        //   'pesan' => 'berhasil',
        //   'member' => $data
        // ], 200);
    }

    public function create() {
        return view('book.create');
    }

    public function store(Request $request) {
        $request->validate([
            'isbn' => 'required',
            'judul'      => 'required|min:5|max:100',
            'pengarang'       => 'required|min:5',
            'penerbit'     => 'required|min:5',
            'tahun_terbit'  => 'required|numeric' 
        ]);

        $book = new Book;
        $book->isbn = $request->isbn;
        $book->judul = $request->judul;
        $book->pengarang = $request->pengarang;
        $book->penerbit = $request->penerbit;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->save();

        return redirect()->route('book.index');
    }

    public function show($id) {
        $data = Book::where('isbn', '=', $id)->firstOrFail();
        return view('book.show', compact('data'));
    }

    public function edit($id) {
        $data = Book::where('isbn', '=', $id)->firstOrFail();
        return view('book.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Book::where('isbn', '=', $id);

        $data->update([
            'judul'      =>  $request->judul,
            'pengarang'       =>  $request->pengarang,
            'penerbit'     =>  $request->penerbit,
            'tahun_terbit'  =>  $request->tahun_terbit
        ]);    

        // $data->save();
        return redirect()->route('book.index');   
    }

    public function destroy($id) {
        $data = Book::where('isbn', '=', $id);
        $data->delete();
        return redirect()->back();
    }
}
