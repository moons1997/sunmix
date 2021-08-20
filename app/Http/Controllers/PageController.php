<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Section;

class PageController extends Controller
{
    public function about(){
        $datas = Section::where('type_id', '=', 1)->get();
        foreach ($datas as $data){
            if($data->order == 1){
                $data_1 = $data;
            }elseif ($data->order == 2){
                $data_2 = $data;
            }elseif ($data->order == 3){
                $data_3 = $data;
            }
        }

//        dd($data_2);


        return view('pages.about', [
            'data_1' => $data_1,
            'data_2' => $data_2,
            'data_3' => $data_3,
        ]);
    }

    public function technology(){
        $datas = Section::where('type_id', '=', 2)->get();
        foreach ($datas as $data){
            if($data->order == 1){
                $data_1 = $data;
            }elseif ($data->order == 2){
                $data_2 = $data;
            }elseif ($data->order == 3){
                $data_3 = $data;
            }elseif ($data->order == 4){
                $data_4 = $data;
            }
        }
        return view('pages.technology', [
            'data_1' => $data_1,
            'data_2' => $data_2,
            'data_3' => $data_3,
            'data_4' => $data_4,
        ]);
    }

    public function contact(){
        return view('pages.contact', [

        ]);
    }

    public function catalog($id = 3){

        $datas = ProductCategory::all();
        $products = Product::where('category_id', '=', $id)->get();
        return view('pages.catalog', [
            'datas' => $datas,
            'id' => $id,
            'products' => $products
        ]);
    }

    public function product($id = 1){

        $data = Product::findOrFail($id);

//        dd($data->product_categories->name_en);
        return view('pages.product', [
            'data' => $data,
        ]);
    }
}
