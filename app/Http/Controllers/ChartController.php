<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use chart;
use DB;

class ChartController extends Controller
{
    public function index(){
      $users=users::where(DB::raw("(DATE_FORMAT(created_at '%Y'))"),date('Y'))->get();
      $chart=Charts::database($users,'bar','highcharts')
      ->title("Product details")
      ->elementLabel("Total products")
      ->dimensions(1000,500)
      ->responsive(false)
      ->groupByMonth(date('Y'),true);

      return view('charts', compact('chart'));
    }
}
