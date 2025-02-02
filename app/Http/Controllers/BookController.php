<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  public function create()
  {
    return view('book.create');
  }

  public function store(Request $request)
  {
    //dd("$request");
    //dd($request->all());
    $name = $request->name;
    $descraption = $request->descraption;
    $price = $request->price;

    $date = [
      'name' => $name,
      'descraption' => $descraption,
      'price' => $price
    ];

    Book::create($date);
    return redirect()->route('book-success');
  }


  public function success()
  {
    return view('book.success');
  }
}
?>
