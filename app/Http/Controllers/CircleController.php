<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circle;

class CircleController extends Controller
{
    public function getCirclesData()
    {
        $circles = Circle::with('books')->get();

        return response()->json($circles);
    }
}
