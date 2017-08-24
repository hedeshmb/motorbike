<?php

namespace App\Http\Controllers;

use App\Motorbikes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $limit = 5;

    /**
     * Show the motorbikes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( ($sortType = $request->get('sortType')) && ($sortType == 'price') )
        {
            $motorbikes = Motorbikes::latestFirstPrice()->Paginate($this->limit);
        }
        elseif( ($filterType=$request->get('filterType')) )
        {
            $motorbikes = Motorbikes::where('color',$filterType)->Paginate($this->limit);
        }
        else
        {
            $motorbikes = Motorbikes::latestFirst()->Paginate($this->limit);
        }
        $colors = Motorbikes::select('color')->get();
        foreach ($colors as $val) {
            $colorsMotorbikes[$val->color] = $val->color;
        }
        return view('home',compact('motorbikes','sortType','colorsMotorbikes'));
    }

    /**
     * Display a detail a motorbike.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motorbike = Motorbikes::findOrFail($id);
        return view('show',compact('motorbike'));
    }
}
