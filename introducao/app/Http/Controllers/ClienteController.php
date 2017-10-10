<?php
/**
 * Created by PhpStorm.
 * User: carlos.bruno
 * Date: 10/10/2017
 * Time: 08:03
 */

namespace App\Http\Controllers;
use Request;


class ClienteController extends Controller
{
   public function listar(){
       $data = date("Y-m-d");

       if( $data > '2017-10-09' ){
           $msg = "Inscrição finalizada!";
       }else{
           $msg = "Inscrição em aberto";
       }

       return view("listar")->with("msg", $msg);
   }

   public function listar2(){
        $nomes = array(1 => "João", 2 => "Maria", 3 => "Pedro");;
        return view('listar2')->with("nomes", $nomes);
   }

   public function editar( $id ){
     /*  if( Request::has('id') ){
           $id = Request::input("id");
       }else{
           $id = 0;
       }*/
     //  $id = Request::input("id", 0); // Request é como se fosse via $_GET na url id=1
     //  $id = Request::route("id"); // Request é como se fosse via $_GET  na url id/1
       $url = Request::url();
       $path = Request::path();


       return view('editar')->with("id", $id)->with("url", $url)->with("path", $path);
   }

    public function novo(){
       if( view()->exists("novo") ){
           return view("novo");
       }else{
           return view("welcome");
       }

    }
}