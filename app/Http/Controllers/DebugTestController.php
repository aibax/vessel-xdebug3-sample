<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugTestController extends Controller
{
    public function index(Request $request)
    {
        // ↓ここでブレークするか確認
        $message = 'Hello';
        $message .= ' ';
        $message .= 'World.';

        return $message;
    }
}
