<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ChildCategory;
class FrontendController extends Controller
{
    public function findBaseOnCategory(Category $categorySlug){
        $advertisements = $categorySlug->ads;
        $filterBySubcategories = Subcategory::where('category_id', $categorySlug->id)->get();
        return view('product.category', compact('filterBySubcategories', 'advertisements'));
    }

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
        Request $request,
        $categorySlug,
        Subcategory $subcategorySlug,
        ChildCategory $childcategorySlug){
        $advertisementBaseOnFilter = Advertisement::where(
            'childcategory_id',
            $childcategorySlug->id
            )->when($request->minPrice, function($query, $minPrice) {
            return $query->where('price','>=' ,$minPrice);
        })->when($request->maxPrice, function($query, $maxPrice) {
            return $query->where('price','<=', $maxPrice);
        })->get();


        $advertisementsWithoutFilter = $childcategorySlug->ads;
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');

        $advertisements = $request->minPrice||$request->maxPrice?$advertisementBaseOnFilter:$advertisementsWithoutFilter;// CHOOSE PRICE
        return view('product.childcategory', compact('advertisements', 'filterByChildCategories'));
    }
    public function show($id, $slug){
        $advertisement = Advertisement::where('id', $id)->where('slug', $slug)->first();
        return view('product.show', compact('advertisement'));
    }
}
