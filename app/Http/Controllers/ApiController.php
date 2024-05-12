<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function userdata(Request $request)
    {
        return response()->json(User::all());
    }

    public function reservedata(Request $request)
    {
        return response()->json(Reservations::all());
    }
}
