<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected function list()
    {
        $categories = CategoryModel::all();
//        dd($categories);
       return view('category.category-list')->with('categories', $categories);
    }
}
