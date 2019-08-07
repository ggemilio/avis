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
      setcookie('pickup-date', $_POST['start-date'], time()+2*24*60*60);
      setcookie('dropoff-date', $_POST['finish-date'], time()+2*24*60*60);
      return view('reservationExtras')->withCategories($categories)->withExtras($extras);
    }

    public function checkout()
    {
      $dropoff_location = \App\Establishment::find($_COOKIE['dropoff']);
      $pickup_location = \App\Establishment::find($_COOKIE['pickup']);
      $pickup_date = $_COOKIE['pickup-date'];
      $dropoff_date = $_COOKIE['dropoff-date'];
      $extras_price = 0;
      $category = \App\Category::find($_POST['category']);

      echo 'Category to rent: '.$category['category_name'].'<br>';
      echo 'Extras: '.'<br>';
      if(isset($_POST['extras']))
      {
        foreach ($_POST['extras'] as $extra) {
          $extra = \App\Extra::find($extra);
          echo $extra['name'].' - '.$extra['price'];
          $extras_price += $extra['price'];
          echo '<br>';
        }
      }

      echo 'Total extras: '.$extras_price;

      if(1 == $pickup_location['is_airport'])
      {
        echo 'is airport';
      }
    }
}
