<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function index()
    {
      $establishments = \App\Establishment::all();
      return view('index')->withEstablishments($establishments);
    }

    public function extras()
    {
      $extras = \App\Extra::all();
      $categories = \App\Establishment::find($_POST['establishment-pickup'])->categories;
      return view('reservationExtras')->withCategories($categories)->withExtras($extras);
    }

    public function checkout()
    {
      
    }
}
