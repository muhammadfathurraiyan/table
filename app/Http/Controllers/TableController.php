<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index()
    {  
        $data = User::paginate(5);
        return view('welcome', compact('data'));
    }
}
