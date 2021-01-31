<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Session()->has('admin')){
        $librarain=User::all();
        return view('admin.view_librarian',compact('librarain'));
      }
      else{
        return redirect('adminlogout');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Session()->has('admin')){
          return view('admin.add_librarian');
        }
        else{
          return redirect('adminlogout');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Session()->has('admin')){
        User::create($request->all());
        return redirect('/librarain');
      }
      else{
        return redirect('adminlogout');
      }
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
      if(Session()->has('admin')){
        $user=User::find($id);
        return view('admin.update_librarian',compact('user'));
      }
      else{
        return redirect('adminlogout');
      }
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
      if(Session()->has('admin')){
        User::find($id)->update($request->all());
        return redirect('/librarain');
      }
      else{
        return redirect('adminlogout');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(Session()->has('admin')){
        User::find($id)->delete();
        return back();
      }
      else{
        return redirect('adminlogout');
      }
    }
}
