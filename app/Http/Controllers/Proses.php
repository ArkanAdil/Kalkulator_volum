<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Proses extends Controller
{
    public function tabung(Request $request){
        $phi = 3.14;
        $j = $request->input('bungjari');
        $t = $request->input('bungtinggi');
        $result = $phi * $j * $j * $t;
        if($result == 0){
            return redirect('/tabung')->with('tabung', 'Masukan Angka Terlebih Dahulu'); 
        } else {
            return redirect('/tabung')->with('tabung', 'Hasil : '. $result);
        }   
    }
    
    public function bola(Request $request) 
    {
        $j = $request->input('la');       
        $phi = 3.14;
        $result = 4/3 * $phi * $j * $j * $j;
        if($result == 0){
            return redirect('/bola')->with('bola', 'Masukan Angka Terlebih Dahulu'); 
        } else {
            return redirect('/bola')->with('bola', 'Hasil : '.$result);
        }       

    }

    public function kerucut(Request $request){
        $paga = 4/3;
        $phi = 3.14;
        $j = $request->input('cutjari');
        $t = $request->input('cuttinggi');
        $result = $paga * $phi * $j * $j * $j;
        if($result == 0){
            return redirect('/kerucut')->with('kerucut', 'Masukan Angka Terlebih Dahulu'); 
        } else {
            return redirect('/kerucut')->with('kerucut', 'Hasil : '.$result);
        }
    }
}

