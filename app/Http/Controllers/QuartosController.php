<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuartosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastro_quarto_get()
    {
        //
        return view('quarto/cadastro_quarto');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    #region Cadastro de Quartos
    public function create(Request $request)
    {
        $post = $request->only(['valor','status']);

        $quarto = new Quarto();

        $quarto->valor = $request->valor;
        $quarto->status = $request->status;

        $quarto->save();

        return redirect()->route('/quarto/cadastro_quarto');
    }
    #endregion


    #region redenrizando tela dos Quartos
        public function quarto(Request $request)
        {
            try{   
               $db_quarto = DB::table('db_quarto')->get();
               return view('quarto/index',['db' =>$db_quarto]);

            }catch(Exception $e){
                dd($e);
            }
        }
        #endregion

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
