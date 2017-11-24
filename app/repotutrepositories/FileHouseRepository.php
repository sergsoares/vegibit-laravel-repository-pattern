<?php

namespace App\repotutrepositories;

use App\House;

class FileHouseRepository implements HouseRepositoryInterface {

    public function selectAll()
    {
        $houses = ['number' => '315', 'color' => 'yellow'];

        return $houses;
    }

    public function find($id)
    {
        return 'Here is a single house listing, again using the file system';        
    }
}