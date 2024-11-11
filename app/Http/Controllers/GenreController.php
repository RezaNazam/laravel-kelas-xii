<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Menampilkan semua genre
    public function index()
    {
        $genres = Genre::all();
        // untuk memembuat paginate dengan mengambil datat tertentu
        $genres = Genre::paginate(10); //mengambil data berjumlah 10 data per page  
        // Mengirim data genres ke view
        return view('genre.index', compact('genres'));
    }
    

    // Menampilkan form untuk membuat genre baru
    public function create()
    {
        return view('genre.create');
    }

    // Menyimpan genre baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create($request->all());
        return redirect()->route('genre.index')->with('success', 'Genre berhasil ditambahkan.');
    }

    // Menampilkan detail dari genre tertentu
    public function show($id)
    {
        $genre = Genre::findOrFail($id);

        // Ambil film berdasarkan genre
        $films = Film::where('genre_id', $genre->id)
        ->orderByDesc('year')
        ->orderBy('created_at', 'asc')
        ->paginate(18);

        // Kirim data genre dan film ke view
        return view('genre.show', compact('genre', 'films'));
    }

    // Menampilkan form edit untuk genre
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    // Memperbarui genre di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->update($request->all());
        return redirect()->route('genre.index')->with('success', 'Genre berhasil diperbarui.');
    }

    // Menghapus genre dari database
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect()->route('genre.index')->with('success', 'Genre berhasil dihapus.');
    }


}
