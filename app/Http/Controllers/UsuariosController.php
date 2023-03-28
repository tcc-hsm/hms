<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use DB;
use Crypt;
use Illuminate\Auth\SessionGuard;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Auth;


class UsuariosController extends Controller
{
    #region Autenticação
    public function autenticacao(Request $request)
    {
        
        
        //Recebendo dados do Formulario
        $user = $request->input('email');
        $pass = $request->input('pass');

        $credenciais = $request->validate([
            'email' => ['required','email'],
            'senha' => ['required'],
        ]);

        try{
        
        //Verificando usuário no banco de dados
        $users = DB::select('select * from db_usuarios where email = ?', [$user]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            dd("Autenticado nessa bosta");
            //return redirect('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        }catch(Exception $e){
            dd($e);
            return $e;
        }




    }
    #endregion

    #region Cadastrando Usuário
    public function cadastro_usuario(Request $request)
    {
       
        //Recebendo dados do Formulario
        $email = $request->input('email');
        $nome = $request->input('nome');
        $senha = $request->input('senha');
        $perfil = $request->input('perfil');

        $senhaCriptografada = encrypt($senha);
        
        try{
            
        $user = new usuarios;
 
        $user->email = $request->email;
        $user->nome = $request->nome;
        $user->perfil = $request->perfil;
        //$user->senha = $senhaCriptografada;

        $user->fill([
            'senha' => Crypt::encrypt($request->senha)
        ])->save();
 
        //$user->save();

        return view('index');
    
        }catch(Exception $e){
            return "Erro yooo -> ".$e->getMessage();
        }

    }
    #endregion
    
    #region Renderizando tela de cadastro de usuário
    public function cadastro_usuario_get(Request $request)
    {
        
        return view('cadastro_usuario/index');

    }
    #endregion

}
