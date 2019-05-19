<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Listar usuários na página principal
    public function index()
    {
        $usuarios = Usuarios::all();

        return view('index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function criarUsuario(Request $request)
    {        

        $request->validate([
            'nome'=>'required',
            'email'=> 'required',
            'senha' => 'required',
            'dataNascimento' => 'required'
        ]);

        $usuario = new Usuarios([
            'nome' => $request->get('nome'),
            'email'=> $request->get('email'),
            'senha'=> $request->get('senha'),
            'dataNascimento'=> $request->get('dataNascimento')
        ]);

        $usuario->save();
        return redirect('/')->with('success', 'Usuário adicionado com sucesso');
        
        
    }

    public function listarUsuario($id)
    {
        $usuario = Usuarios::find($id);

        return view('edit-user', compact('usuario'));
    }

    public function atualizarUsuario(Request $request)
    {

       $id = $request->input('id');

       $request->validate([
           'nome'=>'required',
           'email'=> 'required',
           'senha' => 'required',
           'dataNascimento' => 'required'
       ]);

        $usuario                  = Usuarios::find($id);       
        $usuario->nome           = $request->get('nome');
        $usuario->email          = $request->get('email');
        $usuario->senha          = $request->get('senha');
        $usuario->dataNascimento = $request->get('dataNascimento');
       

        $usuario->save();
        return redirect('/')->with('success', 'Usuário atualizado com sucesso');
    }

    public function deletarUsuario(Request $request)
    {
        $id = $request->input('id');


        $usuario = Usuarios::find($id);
        $usuario->delete();
        return redirect('/')->with('success', 'Usuário excluído com sucesso');
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
