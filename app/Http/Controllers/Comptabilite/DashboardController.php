<?php

namespace App\Http\Controllers\Comptabilite;

use Carbon\Carbon;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{


    /**
     * Affiche le tableau de bord 
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard ()
    {


      


        return view('comptabilite.pagedashboard')->with(
            [



            ]


        );


    }







}
