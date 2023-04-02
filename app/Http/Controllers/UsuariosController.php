<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Carbon\Carbon;
use DB;
use Hash;



class UsuariosController extends Controller
{
    #region Autenticação
    public function autenticacao(Request $request )
    {    
        return redirect()->route('/home');
    }
    #endregion

    #region Cadastrando Usuário
    public function cadastro_usuario(Request $request)
    {
        //Recebendo dados do Formulario
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        $profile = $request->input('profile');
        
        try{
            
        $user = new User;
 
        $user->email = $request->email;
        $user->name = $request->name;
        $user->profile = $request->profile;
        $user->password = Hash::make($password);

        $user->save();
 
        return view('index');
    
        }catch(Exception $e){
            return "Erro ao cadastrar o usuário -> ".$e->getMessage();
        }

    }
    #endregion
    
    #region Renderizando tela de cadastro de usuário
    public function cadastro_usuario_get(Request $request)
    {
        return view('cadastro_usuario/index');
    }
    #endregion

    #region homepage
    public function home(){
        try{
            $dataAtual = Carbon::now();
            $hoje = Carbon::now()->format('Y-m-d');

            $db_agenda = DB::table('db_agenda')->get();
            
            return view('home/index',['agenda' =>$db_agenda]);
        }catch(Exception $e){
            dd($e);
        }
    }
    #endregion
}
