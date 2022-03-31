<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Company;
use App\Models\Categories;
use App\Models\Items;

use Log;

class ProductController extends Controller
{
    public function manageForm() {
        $companies = Company::all();
        $categories = Categories::all();
        return view('admin.product-manage', ['companies'=>$companies, 'categories'=>$categories]);
    }

    public function store(Request $request) {
        // dd($request->all());
        try {
            $product = new Items;
            $product->title = $request->productName;
            $productSlug = Str::of($request->productName)->slug('-');
            $checkSlug = Items::where('slug', $productSlug)->get();
            $product->slug = (count($checkSlug) > 0)?$productSlug.'('.count($checkSlug).')':$productSlug;
            $product->companyId = $request->company;
            $product->categoriesId = $request->category;
            $product->price = $request->productPrice;
            $product->description = $request->productDescription;
            if(!empty($request->thumbnailImage)){
                $ext = $request->thumbnailImage->clientExtension();
                $namafile = "PRODUCT-".$productSlug. '-' . date("Ymd-His") . "." . $ext;
                $filepath = $request->file('thumbnailImage')->move(public_path("assets/images/products"), $namafile);
                $product->mainpic = $filepath;
            }
            if(!empty($request->detailImage1)){
                $ext = $request->detailImage1->clientExtension();
                $namafile = "PRODUCT-".$productSlug. '-' . date("Ymd-His") . "." . $ext;
                $filepath = $request->file('detailImage1')->move(public_path("assets/images/products"), $namafile);
                $product->detail1 = $filepath;
            }
            if(!empty($request->detailImage2)){
                $ext = $request->detailImage2->clientExtension();
                $namafile = "PRODUCT-".$productSlug. '-' . date("Ymd-His") . "." . $ext;
                $filepath = $request->file('detailImage2')->move(public_path("assets/images/products"), $namafile);
                $product->detail2 = $filepath;
            }
            if (!$product->save()) {
                Log::info("Error when saving product.");
                return response()->json([
                    'status'=>FALSE,
                    'message'=>'Error when saving product'
                ]);
            }
            Log::info("Success when saving product.");
            return response()->json([
                'status'=>TRUE,
                'message'=>'Success when saving product'
            ]);
        }
        catch (\Throwable $e) {
            Log::info("Error when submit product.".$e);
            return response()->json([
                'status'=>FALSE,
                'message'=>'Error when submit product'
            ]);
        }
    }
}
