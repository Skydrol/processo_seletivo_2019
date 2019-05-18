<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Noticia;
use App\Http\Resources\Noticia as NoticiaResource;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jsonurl = "http://www.marcha.cnm.org.br/webservice/noticias";
        $json = file_get_contents($jsonurl);
        $noticias = json_decode($json);

        //response()->json($noticias)




       return view('noticias', [
        'noticias' => $noticias->noticias

       ]);
    }

    public function pesquisa($key){



        $jsonurl = "http://www.marcha.cnm.org.br/webservice/noticias?pesquisa=".$key;
        $json = file_get_contents($jsonurl);
        $noticias = json_decode($json);

        if($noticias->total_noticias > 0){

            return view('noticias', [

                'noticias' => $noticias->noticias

            ]);
       }

       return view('noticias', [

                'noticias' => 0

        ]);


    }

    public function pagina($page){

         $jsonurl = "http://www.marcha.cnm.org.br/webservice/noticias?page=".$page;
         $json = file_get_contents($jsonurl);
         $noticias = json_decode($json);

         //response()->json($noticias)




        return view('noticias', [
         'noticias' => $noticias->noticias

        ]);


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
