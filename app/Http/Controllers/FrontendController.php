<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ChildCategory;
class FrontendController extends Controller
{
    public function findBaseOnSubcategory($categorySlug,Subcategory $subcategorySlug){
        $advertisements = $subcategorySlug->ads;
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');
        return view('product.subcategory', compact('advertisements', 'filterByChildCategories'));
    }
    public function findBaseOnChildcategory(
        $categorySlug,
        Subcategory $subcategorySlug,
        ChildCategory $childcategorySlug){
        $advertisements = $childcategorySlug->ads;
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');
        return view('product.childcategory', compact('advertisements', 'filterByChildCategories'));
    }
}
