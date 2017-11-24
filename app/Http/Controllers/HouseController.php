<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repotutrepositories\HouseRepositoryInterface;

class HouseController extends Controller
{

    public $house;

    public function __construct(HouseRepositoryInterface $house)
    {
        $this->house = $house;
    }

    public function index()
    {
        $houses = $this->house->selectAll();

        return $houses;
    }

    public function show($id)
    {
        $house = $this->house->find($id);

        return $house;
    }
}
