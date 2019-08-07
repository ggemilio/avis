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
      setcookie('pickup',$_POST['establishment-pickup'], time()+2*24*60*60);
      setcookie('dropoff',$_POST['establishment-dropoff'], time()+2*24*60*60);
      return view('reservationExtras')->withCategories($categories)->withExtras($extras);
    }

    public function checkout()
    {
      echo $_COOKIE['pickup'];
      echo $_COOKIE['dropoff'];
    }
}
