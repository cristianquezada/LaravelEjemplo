<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;


class TestController extends Controller
{
 public function view($id){
$articulo=Articulo::find($id);


$articulo->category;
$articulo->users;
$articulo->tags;

// retorna vista  nombre vista y array con los datos que se va a mandar a la vista
return view('ProbandoCarpetaView.index',['articulo'=>$articulo]);


 }


}
