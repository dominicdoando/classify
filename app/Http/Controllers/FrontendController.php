<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ChildCategory;
class FrontendController extends Controller
{
    public function findBaseOnSubcategory(Request $request,$categorySlug,Subcategory $subcategorySlug){

        $advertisementBaseOnFilter = Advertisement::where('subcategory_id', $subcategorySlug->id)->when($request->minPrice, function($query, $minPrice) {
            return $query->where('price','>=' ,$minPrice);
        })->when($request->maxPrice, function($query, $maxPrice) {
            return $query->where('price','<=', $maxPrice);
        })->get();
        $advertisementWithoutFilter = $subcategorySlug->ads;//NO CHOOSE PRICE
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');
        $advertisements = $request->minPrice||$request->maxPrice?$advertisementBaseOnFilter:$advertisementWithoutFilter;// CHOOSE PRICE

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
