<?php

namespace App\repotutrepositories;

use App\House;

class MyOwnHouseRepository implements HouseRepositoryInterface {

    public function selectAll()
    {
        return [
            'Casa', 'apertada', 'muito'
        ];
    }

    public function find($id)
    {
        return [
            "id" => 1,
            "color" => "MistyRose",
      ];
    }
}