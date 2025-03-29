<?php

namespace App\Http\Controllers\Comptabilite;

use Carbon\Carbon;

use App\Http\Controllers\Controller;


class TableauController extends Controller
{


    /**
     * Affiche le tableau de bord
     *
     * @return \Illuminate\Http\Response
     */
    public function tableau ()
    {





        return view('comptabilite.pagetableau')->with(
            [



            ]


        );


    }







}
