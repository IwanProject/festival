<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Pajak;
use Illuminate\Http\Request;

class PajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pajak.index',["title" => "Pajak",'pajak'=> Pajak::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pajak.create',['title' => 'Create Pajak','items' => Item::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'rate' => 'required|max:255',
            'items_id' => 'required|max:255'

        ]);
        Pajak::create($validateData);
        return redirect('/project/pajak')->with('success','New pajak has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pajak  $pajak
     * @return \Illuminate\Http\Response
     */
    public function show(Pajak $pajak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pajak  $pajak
     * @return \Illuminate\Http\Response
     */
    public function edit(Pajak $pajak)
    {
        return view('pajak.edit',['title' => 'Edit Pajak','items' => Item::all(),'pajak' => $pajak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pajak  $pajak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pajak $pajak)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'rate' => 'required|max:255',
            'items_id' => 'required|max:255'

        ]);


        Pajak::where('id',$pajak->id)
                    ->update($validateData);
        return redirect('/project/pajak')->with('success','Pajak has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pajak  $pajak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pajak $pajak)
    {
        Pajak::destroy($pajak->id);
        return redirect('/project/pajak')->with('success','Pajak has been deleted!');
    }
}
