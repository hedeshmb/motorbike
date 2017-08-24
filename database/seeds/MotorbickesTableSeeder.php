<?php

use Illuminate\Database\Seeder;

class MotorbickesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the motorbikes table
        DB::table('motorbikes')->truncate();

        //generate 10 motorbikes
        DB::table('motorbikes')->insert([
            [
                'name'              =>  "Kubota RTV900XT 2014",
                'make'              =>  "Kubota",
                'modelMotorbike'    =>  "RTV900XT",
                'engineSize'        =>  "2200",
                'year'              =>  "2014",
                'color'             =>  "Red",
                'weight'            =>  "900",
                "price"             =>  "3000",
                "image"             =>  "1.jpg",
                "created_at"        =>  "2015-03-01 11:01:02",
                "updated_at"        =>  "2015-08-01 13:01:02"
            ],
            [
                'name'              =>  "Yamaha YFM450 2008",
                'make'              =>  "Yamaha",
                'modelMotorbike'    =>  "YFM450",
                'engineSize'        =>  "450",
                'year'              =>  "2008",
                'color'             =>  "Blue",
                'weight'            =>  "700",
                "price"             =>  "1000",
                "image"             =>  "2.jpg",
                "created_at"        =>  "2016-03-01 11:01:02",
                "updated_at"        =>  "2016-08-01 13:01:02"
            ],
            [
                'name'              =>  "Yamaha YZF R3 2017",
                'make'              =>  "Yamaha",
                'modelMotorbike'    =>  "YZF R3",
                'engineSize'        =>  "320",
                'year'              =>  "2017",
                'color'             =>  "Blue",
                'weight'            =>  "500",
                "price"             =>  "2500",
                "image"             =>  "3.jpg",
                "created_at"        =>  "2016-05-01 11:01:02",
                "updated_at"        =>  "2016-09-01 13:01:02"
            ],
            [
                'name'              =>  "Harley Davidson Tri Glide Ultra 2017",
                'make'              =>  "Harley Davidson",
                'modelMotorbike'    =>  "Tri Glide Ultra",
                'engineSize'        =>  "1745",
                'year'              =>  "2017",
                'color'             =>  "Red",
                'weight'            =>  "780",
                "price"             =>  "3200",
                "image"             =>  "4.jpg",
                "created_at"        =>  "2016-11-10 11:01:02",
                "updated_at"        =>  "2016-12-01 13:01:02"
            ],
            [
                'name'              =>  "Other Ultima Fat Bastard 2011",
                'make'              =>  "Bastard",
                'modelMotorbike'    =>  "Ultima Fat Bastard",
                'engineSize'        =>  "2081",
                'year'              =>  "2011",
                'color'             =>  "Gray",
                'weight'            =>  "300",
                "price"             =>  "2300",
                "image"             =>  "5.jpg",
                "created_at"        =>  "2017-03-01 11:01:02",
                "updated_at"        =>  "2017-04-01 13:01:02"
            ],
            [
                'name'              =>  "Honda 500 2008",
                'make'              =>  "Honda",
                'modelMotorbike'    =>  "500",
                'engineSize'        =>  "500",
                'year'              =>  "2008",
                'color'             =>  "Yellow",
                'weight'            =>  "960",
                "price"             =>  "1300",
                "image"             =>  "6.jpg",
                "created_at"        =>  "2017-05-01 11:01:02",
                "updated_at"        =>  "2017-07-01 13:01:02"
            ],
            [
                'name'              =>  "KTM SXF 250 2016",
                'make'              =>  "KTM",
                'modelMotorbike'    =>  "SXF 250",
                'engineSize'        =>  "250",
                'year'              =>  "2016",
                'color'             =>  "Orange",
                'weight'            =>  "490",
                "price"             =>  "4500",
                "image"             =>  "7.jpg",
                "created_at"        =>  "2017-06-01 11:01:02",
                "updated_at"        =>  "2017-11-01 13:01:02"
            ],
        ]);
    }
}
