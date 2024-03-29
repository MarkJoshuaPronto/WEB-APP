<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCategory($slug)
    {
        $getCategory = CategoryModel::getSingleSlug($slug);

        if(!empty($getCategory))
        {
            $data['getCategory'] = $getCategory;
            return view('product.list', $data);
        }
        else
        {
            abort(404);
        }
    }
}
