<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() {

        $trains = Train::where('orario_di_partenza', '>', Carbon::now())->get();

       
        return view('guest.home', compact('trains'));
    }
}
