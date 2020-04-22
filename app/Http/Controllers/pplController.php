<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class pplController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('ppl'))return $next($request);
            abort(403, 'Anda tidak memiliki cukup akses');
        });
    }
    public function index()
    {
     $title='ppl';
     return view('admin.ppl',compact('title'));
    }
}