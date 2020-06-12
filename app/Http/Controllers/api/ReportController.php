<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        $count = $employees->count();
        
        $male =  Employees::where("gender", "=", "masculino")->count();
        $woman = $count - $male;
        $media = $this->ages($employees);


        return response()->json($media); 
    }

    private function ages($employees){
        $total = 0;
        $older = 0;
        $newer = 0;

        for($i = 0 ; $i < $employees->count(); $i++){
            $unique = $employees[$i];
            $datas = explode('-',$unique); 
            // Função intval retirada do Manuel PHP https://www.php.net/manual/pt_BR/function.intval.php
            $age = 2020 - intval($datas[2]);

            if($i == 0){
             $older = $age;
             $newer = $age;
            }
            $total += $age;

            if($age > $older){
             $older = $age;
            }
            if($age < $newer){
             $newer = $age;
                
            }

        }
        
        $media = ($total/$employees->count());

        return [ $media, $older, $newer];

    }

    private function older($employees){

    }
}
