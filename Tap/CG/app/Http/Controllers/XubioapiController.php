<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\xubioapi;
use Illuminate\Http\Request;

class XubioapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function token()
     { $token = 'token1';
       return view('hometc')->with('token', $token);
     }


    }
