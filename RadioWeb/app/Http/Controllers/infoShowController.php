<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Book;
class infoShowController extends Controller
{
    public function show()
    {
        $infos = Info::paginate(4);
        $cards = Book::all();


        return view('project.index',compact("infos","cards"));
    }
}
