<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getItems(){
        dd(collect([1,2,3,4,5])->sortDesc());
    }
}
