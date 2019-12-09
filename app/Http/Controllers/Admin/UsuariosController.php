<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        /*$listaUsuarios = json_encode([
          ["id"=>1,"nome"=>"Vanessa","cpf"=>"99999999-99","data_nasc"=>"99/99/99","email"=>"us@gmail.com","tel"=>"9999999",
          "end"=>"rua tal","cep"=>"9999999","cid"=>"Manaus","est"=>"Am"]
        ]);*/

    
          $listaUsuarios = json_encode(Usuario::select('id','nome','data_nasc','email','cel','end','cid','est','cep')->get());
  
  
          return view('admin.usuarios.index',compact('listaUsuarios'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = \Validator::make($data,[
          'nome' => 'required',
          'email' => 'required',
          'data_nasc' => 'required',
        ]);
  
        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }
  
        Usuario::create($data);
        return redirect()->back();

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
        return Usuario::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         $data = $request->all();
        $validacao = \Validator::make($data,[
          'nome' => 'required',
          'email' => 'required',
          'data_nasc' => 'required',
        ]);
  
        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }
  
        Usuario::find($id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::find($id)->delete();
        return redirect()->back();
    }

    
}
