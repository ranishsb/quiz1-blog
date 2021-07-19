<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = category::all(); 
        return view('category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
        'id' => 'bail|required|unique:tb_album',
        'name' => 'required' 
    ],
    [
            'id.required' => 'id wajib diisi', 
            'id.unique' => 'id sudah ada', 
            'name.required' => 'Nama wajib diisi' 
     ]
    );
    category::create([
         'id' => $request->id, 
         'name' => $request->name, 
         'text' => $request->text, 
          ]);
          return redirect('/category'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = category::findOrFail($id);
        return view('category.edit', compact('row'));
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
        $request->validate(
            [
                  'id' => 'bail|required', 
                  'name' => 'required' 
                 ], 
                 [ 
                'id.required' => 'NIM wajib diisi',
                  'name.required' => 'Nama wajib diisi' 
                 ]
                );
                $row = category::findOrFail($id); 
                $row->update([ 
                'id' => $request->id, 
                'name' => $request->name,
                'text' => $request->text,
                ]);
                return redirect('category');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = category::findOrFail($id);
        $row->delete();
        return redirect('category');
    }
}
