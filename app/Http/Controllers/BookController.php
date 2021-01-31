<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=book::all();
        return view('librarian.view_books',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('librarian.add_books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        book::create($request->all());
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=book::where('code_number',$id)->first();
        return view('librarian.update_books',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //book::where('code_number',$id)->update($request->all());
      book::where('code_number',$id)->first();
      $book=book::where('code_number',$id)->first();
      $book->code_number=$request->code_number;
      $book->name=$request->name;
      $book->auther=$request->auther;
      $book->pubisher=$request->pubisher;
      $book->quntity=$request->quntity;
      if($request->img){
      $value=$request->img;
      $img_name = time().rand(0,999).'.'.$value->getClientOriginalExtension();
      $value->move(public_path('/user/images'),$img_name);
      $book->img= $img_name ;}
      $book->save();
      return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book::where('code_number',$id)->delete();
        return back();
    }
}
