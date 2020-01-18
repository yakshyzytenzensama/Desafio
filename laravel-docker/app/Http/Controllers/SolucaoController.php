<?php

namespace App\Http\Controllers;

use App\solucao;
use Illuminate\Http\Request;

use App\Classes\Resolve;


class SolucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($valor)
    {
        $r = new Resolve();
        if($valor>0){

            $x = array("extenso"=>$r->converte($valor, true, false));
            echo json_encode($x);
            // return view('welcome',compact('x'));

        }else{

            $x =  array("extenso"=>$r->converte($valor*-1, true, false));

            $w= json_encode($x);

            echo "Menos ".$w;
            // return view('welcome',compact('w'));
        }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\solucao  $solucao
     * @return \Illuminate\Http\Response
     */
    public function show(solucao $solucao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\solucao  $solucao
     * @return \Illuminate\Http\Response
     */
    public function edit(solucao $solucao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\solucao  $solucao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solucao $solucao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\solucao  $solucao
     * @return \Illuminate\Http\Response
     */
    public function destroy(solucao $solucao)
    {
        //
    }
}
