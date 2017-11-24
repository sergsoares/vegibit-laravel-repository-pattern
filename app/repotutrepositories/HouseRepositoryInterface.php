<?php

namespace App\repotutrepositories;

interface HouseRepositoryInterface {

    public function selectAll();

    public function find($id);

}