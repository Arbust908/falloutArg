<?php

namespace App\Http\Controllers;

use App\Armor;
use Illuminate\Http\Request;
use App\Item;

class ArmorController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }
  
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $items = Item::All();
    
    $VAC = compact('categorias');
    return view('productoNuevo', $VAC);
    
  }
  
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }
  
  /**
  * Display the specified resource.
  *
  * @param  \App\Armor  $armor
  * @return \Illuminate\Http\Response
  */
  public function show(Armor $armor)
  {
    //
  }
  
  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Armor  $armor
  * @return \Illuminate\Http\Response
  */
  public function edit(Armor $armor)
  {
    //
  }
  
  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Armor  $armor
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Armor $armor)
  {
    //
  }
  
  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Armor  $armor
  * @return \Illuminate\Http\Response
  */
  public function destroy(Armor $armor)
  {
    //
  }
}
