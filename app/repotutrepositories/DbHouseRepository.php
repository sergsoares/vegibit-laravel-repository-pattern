<?php

namespace App\repotutrepositories;

use App\House;

class DbHouseRepository implements HouseRepositoryInterface {

    public function selectAll()
    {
        return House::all();
    }

    public function find($id)
    {
        return House::find($id);
    }
}