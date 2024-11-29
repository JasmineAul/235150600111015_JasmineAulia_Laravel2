<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showBlogs()
    {
        $blogs = Blog::all();

        return view("blogs/list", [
            "blogs" => $blogs
        ]);
    }

    public function tambahBlog() {
        return view('blogs/create');
    }

    public function createBlog(Request $request) {
        $photoPath = null;
        if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('uploads', 'public'); // Simpan ke storage/public/uploads


        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pembuat' => $request->pembuat,
            'photo' => $photoPath, 
        ]);       
    }
        return redirect("/blogs");
    }

    public function destroy($id)
{
    $blog = Blog::findOrFail($id); 
    $blog->delete(); 

    // Redirect ke halaman utama dengan pesan sukses
    return redirect()->back()->with('success', 'Blog berhasil dihapus!');
}

public function edit($id)
{
    $blog = Blog::findOrFail($id); 
    return view('blogs.edit', compact('blog')); 
}

public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id); 

    $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required|string',
        'pembuat' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $blog->update([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'pembuat' => $request->pembuat,
        'photo' => $request->photo,
    ]);

    return redirect('/blogs')->with('success', 'Blog berhasil diperbarui!');
}

public function store(Request $request)
{

    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi file foto
    ]);

    $photoPath = null;
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('uploads', 'public'); 
    }

    Blog::create([
        'judul' => $validated['judul'],
        'isi' => $validated['isi'],
        'photo' => $photoPath, 
    ]);

    return redirect()->route('blog.index');
}



}