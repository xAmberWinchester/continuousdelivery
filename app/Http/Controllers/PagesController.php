<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function whoami (){
        return view('whoami');
    }

    public function index (){
        return view('index');
    }

    public function opdrachten(){
        return view('opdrachten');
    }
    
//    public function dashboard()
//    {
//        $myResults = [
//            [
//                'course' => 'programming basics',
//                'grade' => 8,
//                'teacher' => 'Loek van der Linde'
//            ],
//            [
//                'course' => 'object oriented programming',
//                'grade' => 7,
//                'teacher' => 'Rimmert Zelle'
//            ]
//        ];
//
//        return view('dashboard', [
//            'results' => $myResults
//        ]);
//
//        //equally right (the word after the with keyword is the variable which blade will use)
//        //return view('dashboard')->withResults($myResults);
//    }
}
