<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorbikes extends Model
{
    protected $fillable = ['name','make','modelMotorbike','engineSize','year','weight','price','color','image'];

    /**
     * Make a where for query
     *
     * @param $query
     * @return mixed
     */
    public function scopeLatestFirst($query) {
        return $query->orderby('created_at','desc');
    }

    /**
     * Make a where for query
     *
     * @param $query
     * @return mixed
     */
    public function scopeLatestFirstPrice($query) {
        return $query->orderby('price','desc');
    }

    /**
     * Get image url a motorbike
     *
     * @param $value
     * @return string
     */
    public function getImageUrlAttribute($value) {
        $imageUrl = '';
        $directory = config('cms.image.directory');
        if(!is_null($this->image)) {
            $imagePath = public_path()."/{$directory}/".$this->image;
            if(file_exists($imagePath)) {
                $imageUrl = asset("{$directory}/".$this->image);
            }
            return $imageUrl;
        }
    }
}
