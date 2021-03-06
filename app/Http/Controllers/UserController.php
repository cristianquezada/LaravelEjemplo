<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//listar usuarios

$users=User::orderBy('id','ASC')->paginate(5);
   return view('admin.users.index', ['users' => $users]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //crear variable que recibe los datos del formulario de la vista create

    $this->validate($request, [
        'name' => 'required|min:4|max:25',
        'email'=>'min:4|max:250|required|unique:users','password'=>'required|min:4|max:25'
    ]);

$user=new User($request->all());

$user->password=bcrypt($request->password);
$user->save();

flash('Se ha registrado '.$user->name.' de forma exitosa')->success();
return redirect()->route('users.index');


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
     $user=User::find($id);

return view('admin.users.edit')->with('user',$user);

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

$user=User::find($id);
$user->fill($request->all());
$user->save();

Flash('El usuario '.$user->name.' ha sido editado con éxito')->warning();
  return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   $user= User::find($id);
$user->delete();
Flash('El usuario '.$user->name.' ha sido borrado de forma exitosa')->error();
return redirect()->route('users.index');
    }
}
