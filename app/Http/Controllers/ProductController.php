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
    public function manageForm($ids = NULL) {
        $item = Items::find($ids);
        // dd(isset($item));
        $companies = Company::all();
        $categories = Categories::all();
        return view('admin.product-manage', ['item'=>$item, 'companies'=>$companies, 'categories'=>$categories]);
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
                $product->mainpic = $namafile;
            }
            if(!empty($request->detailImage1)){
                $ext = $request->detailImage1->clientExtension();
                $namafile2 = "PRODUCT-".$productSlug. '-' . date("Ymd-His") . "." . $ext;
                $filepath = $request->file('detailImage1')->move(public_path("assets/images/products"), $namafile2);
                $product->detail1 = $namafile2;
            }
            if(!empty($request->detailImage2)){
                $ext = $request->detailImage2->clientExtension();
                $namafile3 = "PRODUCT-".$productSlug. '-' . date("Ymd-His") . "." . $ext;
                $filepath = $request->file('detailImage2')->move(public_path("assets/images/products"), $namafile3);
                $product->detail2 = $namafile3;
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

    public function getProductList(Request $request) {
        // Log::info($request);
        $offset = $request->start;
        $limit = $request->length;
        $keyword = $request->search['value'];
        $order = $request->order[0];
        $sort = [];
        foreach ($request->order as $key => $o) {
            $columnIdx = $o['column'];
            $sortDir = $o['dir'];
            $sort[] = [
                'column' => $request->columns[$columnIdx]['name'],
                'dir' => $sortDir
            ];
        }
        $columns = $request->columns;
        $draw = $request->draw;
        $model = new Items;
        $fields = $model->getTableColumns();
        $list = $model->select('*');
        if (!empty($keyword)) {
            $list->where(function($que) use ($keyword, $fields){
                foreach ($fields as $fs) {
                    // Log::info($fs.' LIKE '."%$keyword%");
                    $que->orWhere($fs, 'LIKE', "%$keyword%");
                }
            });
        }
        $filtered = $list->get();
        // Log::info(json_encode($filtered));
        if (!empty($sort)) {
            if (!is_array($sort)) {
                $message = "Invalid array for parameter sort";
                $data = [
                    'result' => FALSE,
                    'message' => $message
                ];
                return response()->json($data);
            }

            foreach ($sort as $key => $sort) {
                $column = $sort['column'];
                $direction = $sort['dir'];
                if (!in_array($column, $fields)) {
                    $message = "Invalid array for parameter sort";
                    $data = [
                        'result' => FALSE,
                        'message' => $message
                    ];
                    return response()->json($data, 500);
                } 
                else {
                    $list->orderBy($column, $direction);
                }
            }
        }
        $total_rows = $list->count();

        $page = $offset / $limit + 1;
        $offset = ($page - 1) * $limit;
        if ($offset < 0) {
            $offset = 0;
        }
        $list->skip($offset)->take($limit);
        $res = $list->get();
        foreach ($res as $rs => $value) {
            $res[$rs]->companyName = Company::find($value->companyId)->name;
            $res[$rs]->categoriesName = Categories::find($value->categoriesId)->name;
        }

        $table['draw'] = $draw;
        $table['recordsTotal'] = $total_rows;
        $table['recordsFiltered'] = count($filtered);
        $table['data'] = $res;

        return json_encode($table);
    }
}
