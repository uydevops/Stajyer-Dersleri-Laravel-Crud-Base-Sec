<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=auth()->user();
        $books = $user->Books()->notDeleteds()->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookStoreRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->user_id = auth()->user()->id;
        $book->save();

        return redirect()
            ->back()
            ->with('success', 'Kitap başarıyla eklendi');
    }

    public function edit($id)
    {
        $user = auth()->user();
        $book = $user->books()->notDeleteds()->findOrFail($id);
        return view('books.book_edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $user =auth()->user();
        $book =$user->books()->notDeleteds()->findOrFail($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();

        return redirect()
            ->back()
            ->with('success', 'Kitap başarıyla güncellendi');
    }
    public function delete($id)
    {
        $book = Book::findOrFail($id)->update(['is_deleted' => 1]);

        return redirect()->back();
    }
}
