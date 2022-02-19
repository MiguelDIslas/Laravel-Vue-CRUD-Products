<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\ProductType;

class DashboardController extends Controller
{
    public function index(){
        $data['products'] = Product::get()->count();
        $data['categories'] = Category::get()->count();
        $data['productTypes'] = ProductType::get()->count();
        $data['users'] = User::get()->count();
        return Inertia::render('Dashboard', ['data' => $data]);
    }

}
