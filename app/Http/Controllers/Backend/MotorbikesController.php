<?php

namespace App\Http\Controllers\Backend;

use App\Motorbikes;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MotorbikesController extends BackendController
{

    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config("cms.image.directory"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\MotorbikeRequest $request)
    {
        $data = $this->handleRequest($request);
        $motorbike = new Motorbikes();
        $motorbike->name = $data['name'];
        $motorbike->make = $data['make'];
        $motorbike->modelMotorbike = $data['modelMotorbike'];
        $motorbike->engineSize = $data['engineSize'];
        $motorbike->year = $data['year'];
        $motorbike->color = $data['color'];
        $motorbike->weight = $data['weight'];
        $motorbike->price = $data['price'];
        $motorbike->image = $data['image'];
        $motorbike->save();
        return redirect(route('add'))->with('message','Your motorbike was added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $request
     * Validate a image file upload
     */
    private function handleRequest($request) {
        $data = $request->all();

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $successUploaded = $image->move($destination,$fileName);

            if($successUploaded) {
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}","_thumb.{$extension}",$fileName);
                $width = config("cms.image.thumbnail.width");
                $height = config("cms.image.thumbnail.height");
                Image::make($destination .'/'. $fileName)
                    ->resize($width,$height)
                    ->save($destination .'/'. $thumbnail);

            }
            $data['image'] = $fileName;
        }
        return $data;
    }
}
