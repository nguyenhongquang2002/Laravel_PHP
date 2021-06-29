<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class BrandController extends Controller
{

    public function all()
    {
        $brands = DB::table("brands")->get();
        return view("brand.list", [
            "brands" => $brands
        ]);
    }
}
