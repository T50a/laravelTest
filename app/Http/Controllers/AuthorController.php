<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  public function author()
  {
    return view('author');
  }

  public function submit(Request $request)
  {
    $valid = $request->validate([
      'name' => 'required|min:4'
    ]);

    $review = new Author();
    $review->name = $request->input('name');

    $review->save();
  }

  public function show()
  {
    $list = new Author();
    return view('show', ['list' => $list->all()]);
  }
}
