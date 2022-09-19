<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function book()
  {
    return view('book');
  }

  public function submit(Request $request)
  {
    $valid = $request->validate([
      'name' => 'required'
    ]);

    $review = new Book();
    $review->title = $request->input('title');

    $review->save();
  }

  public function show()
  {
    $shows = new Book();
    return view('show', ['shows' => $shows->all()]);
  }
}
