<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Categories;
use App\Models\Items;

class HomeController extends Controller
{
    public function index() {
        $recent = Items::limit(6)->orderBy('updated_at', 'desc')->get();
        return view('main.home', ['recent'=>$recent]);
    }

    public function mainList(Request $request, $keyword = null) {
        $items = ($keyword == null) ? Items::orderBy('title', 'asc')->get() : Items::like('title', "%$keyword%")->orderBy('title', 'asc')->get() ;
        return view('main.list', ['items'=>$items]);
    }

    public function detailProduct(Request $request, $ids = null) {
        $items = ($ids == null) ? abort(404) : Items::where('slug', $ids)->first();
        $company = (isset($items)) ? Company::find($items["companyId"]) : null;
        return (!isset($items)) ? abort(404) : view('main.detail', ['items'=>$items, 'company'=>$company]);
    }
}
