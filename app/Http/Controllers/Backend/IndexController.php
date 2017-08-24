<?php

namespace App\Http\Controllers\Backend;

use App\Motorbikes;

class IndexController extends BackendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Motorbikes $motorbike)
    {
        return view('backend.index',compact('motorbike'));
    }
}
