<?php

namespace App\Http\Controllers;

use App\Ammo;
use Illuminate\Http\Request;

class AmmoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
    $ammos = Ammo::All();
    
    $VAC = compact('ammos');
    return view('ammo.index', $VAC);
  }
  
  /**
  * Display the specified resource.
  *
  * @param  \App\slug  $slug
  * @return \Illuminate\Http\Response
  */
  public function show(string $slug){
    $ammo = Ammo::where('slug', $slug)->first();
    
    return view('ammo.show', compact('ammo'));
  }
  
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(){
    return view('ammo.new');
  }
  
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request){
    $rules = [
      "name" => "required|bail|string",
      "weight" => "required|numeric",
      "description" => "required|string",
      "img" => "required|image",
    ];
    
    $mesage = [
      "required" => "El campo :attribute es requerido",
      "unique" => "El :attribute ya existe en nuestra Base de Datos",
      "image" => ":attribute tiene que ser una imagen",
      "numeric" => ":attribute deberia ser un numero",
    ];
    
    $this->validate($request, $reglas, $mensajes);
    
    $ammo = new Ammo();
    
    $ammoImg = $request->file("photo");
    $ammoImgPath = $ammoImg->storePublicly("public/ammo/photo");
    $ammoImgPath = str_replace("public", "storage", $ammoImgPath);
    
    $ammo->name = $request["name"];
    $ammo->slug = str_slug($request["name"]);
    $ammo->weight = $request["weight"];
    $ammo->description = $request["description"];
    $ammo->img = $prodImgPath;
    $ammo->status = 0;
    //$ammo->owner_id = Auth::user()->id;
    
    $ammo->save();

    $VAC = compact('ammo');
    return view('ammo.preview', $VAC);
  }
  
  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\slug  $slug
  * @return \Illuminate\Http\Response
  */
  public function edit(string $slug){
    $ammo = Ammo::where('slug', $slug)->first();
    
    return view('ammo.edit', compact('ammo'));
  }
  
  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\slug  $slug
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, slug $slug){
    $ammo = Ammo::find($slug);

    $rules = [
    "name" => "required|bail|string",
    "weight" => "required|numeric",
    "description" => "required|string",
    "img" => "required|image",
    ];

    $mesage = [
        "required" => "El campo :attribute es requerido",
        "unique" => "El :attribute ya existe en nuestra Base de Datos",
        "image" => ":attribute tiene que ser una imagen",
        "numeric" => ":attribute deberia ser un numero",
    ];

    $this->validate($request, $reglas, $mensajes);


    $ammoImg = $request->file("photo");
    $ammoImgPath = $ammoImg->storePublicly("public/ammo/photo");
    $ammoImgPath = str_replace("public", "storage", $ammoImgPath);

    $ammo->name = $request["name"];
    $ammo->slug = str_slug($request["name"]);
    $ammo->weight = $request["weight"];
    $ammo->description = $request["description"];
    $ammo->img = $prodImgPath;

    $ammo->save();
    $VAC = compact('ammo');

    if($ammo->status === 0){
      return view('ammo.preview', $VAC);
    } elseif ($ammo->status === 0) {
      return view('ammo.show', $VAC);
    }
  }
  
  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Ammo  $slug
  * @return \Illuminate\Http\Response
  */
  public function destroy(string $slug)
  {
    // delete
    $ammo = Ammo::find($slug);
    $ammo->delete();

    // redirect //maybe fix?
    Session::flash('message', 'Successfully deleted the ammo!');
    return Redirect::to('ammos');
  }
  
  /**
  * Shows the ammos inactive.
  *
  * @return \Illuminate\Http\Response
  */
  public function historial()
  {
    $ammos = Ammo::orderBy('id', 'DESC')
    ->where('status', '=', '0')
    ->get();
    
    return view('ammo.history', compact('ammos'));
  }

  /**
  * Activates a deactive ammo.
  *
  * @param  \App\Ammo $slug
  * @return \Illuminate\Http\Response
  */
  public function activate(string $slug)
  {
    $ammo = Ammo::where('slug', $slug)->first();

    $ammo->status = 1;
    $ammo->save();

    return redirect("/ammo");
  }

  /**
   * Deactivates an active ammo.
   *
   * @param  \App\Ammo $slug
   * @return \Illuminate\Http\Response
   */
  public function deactivate(string $slug)
  {
    $ammo = Ammo::where('slug', $slug)->first();

    $ammo->status = 0;
    $ammo->save();

    return redirect("/ammo");
  }
}
