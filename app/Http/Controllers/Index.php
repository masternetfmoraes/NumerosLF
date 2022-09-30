<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    //
    public function index(){
        $json = file_get_contents("file.json");
        $data = json_decode($json);
        return view('welcome',['items'=>$data]);
    }
    public function lotof(){
        
        $arquivo = fopen ('lf.txt', 'r');
        $arquivo2 = fopen ('volante.txt', 'r');
        // Lê o conteúdo do arquivo
        $ar = [];
        $ar2 = [];
        $lf = [];
        $vl = [];
        $ccexp = [];

        while(!feof($arquivo)){
            $linha = fgets($arquivo, 1024);
            $str = explode(' ', $linha);
            $lf[]= $str;   
        }
        while(!feof($arquivo2)){
            $linha2 = fgets($arquivo2, 1024);
            $str2 = explode(' ', $linha2);
            $vl[] = $str2;
        }
        foreach($vl as $key=>$val){
            $exi = implode(" ",$val);
            $str3i = explode(" ",$exi);
            
            foreach($lf as $keys=>$val2){
                $ex = implode(" ",$val2);
                $str3 = explode(" ",$ex);
            
                $vers = array_intersect($str3i,$str3);
                $implo = implode(" ",$vers);
                //echo count($vers)."<br>";
                if(count($vers)=== 13){
                    $cc = count($vers);
                    $ccexp[] = explode(" ",$cc);
                    //echo size($ccexp);
                    echo $exi."<br>";
                }
            }
            echo "<hr>";
        }
            // Fecha arquivo aberto
            fclose($arquivo);
            fclose($arquivo2);
    } 
}