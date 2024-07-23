<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        Brand::create([
            'name'=>$request->name,
        ]);
        return redirect()->back()->with(['success'=>'Brand created']);
    }

    public function show(Brand $brand)
    {
        return view('brands.show',['brand'=>$brand]);
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit',compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update([
            'name'=>$request->name,
        ]);
        return redirect()->back()->with(['success'=>'Brand edited']);
    }

    public function destroy(Brand $brand)
    {
        foreach($brand->cars as $car){
            $car->update([
                'brand_id'=>null,
            ]);
        }

        $brand->delete();

        return redirect()->back()->with(['success'=>'Brand deleted successfully.']);
    }
}
