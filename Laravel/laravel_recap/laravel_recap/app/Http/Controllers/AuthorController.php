<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorStoreRequest;

class AuthorController extends Controller
{

    public function index()
    {
        $authors= Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorStoreRequest $request)
    {
        Author::create($request->all());
        return redirect()->back()->with(['success'=>'Author created!']);
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit',compact('author'));
    }

    public function update(AuthorStoreRequest $request, Author $author)
    {
        $author->update($request->all());
        return redirect()->back()->with(['success'=>'Author updated!']);
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back()->with(['success'=>'Author deleted!']);
    }
}
