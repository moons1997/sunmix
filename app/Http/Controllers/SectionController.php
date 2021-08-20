<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use File;

class SectionController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Section::all();
        return view('section.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('section.create', [
//            'datas' => $datas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $img = $request->file('img');
        if($img){
            $newImgName = time().'__' .'section'.'.'.$request->img->extension();

            $img->move(public_path('uploads/sections/'), $newImgName);
        }
        $datas = new Section();

        $request->validate([
            'info_en' => 'required',
            'order' => 'required'
        ]);

        $datas->type_id = $request->input('type_id');
        $datas->order = $request->input('order');

        $datas->name_en = $request->input('name_en');
        $datas->name_ru = $request->input('name_ru');
        $datas->name_de = $request->input('name_de');
        $datas->name_es = $request->input('name_es');
        $datas->name_it = $request->input('name_it');


        $datas->info_en = $request->input('info_en');
        $datas->info_ru = $request->input('info_ru');
        $datas->info_de = $request->input('info_de');
        $datas->info_es = $request->input('info_es');
        $datas->info_it = $request->input('info_it');

        $datas->img = $newImgName;

        $datas->save();

        return redirect('/admin/section');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Section::find($id);
        return view('section.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datas = Section::findOrFail($id);

        $request->validate([
            'info_en' => 'required',
            'order' => 'required'
        ]);

        $datas->type_id = $request->input('type_id');
        $datas->order = $request->input('order');

        $datas->name_en = $request->input('name_en');
        $datas->name_ru = $request->input('name_ru');
        $datas->name_de = $request->input('name_de');
        $datas->name_es = $request->input('name_es');
        $datas->name_it = $request->input('name_it');


        $datas->info_en = $request->input('info_en');
        $datas->info_ru = $request->input('info_ru');
        $datas->info_de = $request->input('info_de');
        $datas->info_es = $request->input('info_es');
        $datas->info_it = $request->input('info_it');



        if($request->hasFile('img')){

            $old_img = $datas->img;
            $img = $request->file('img');
            $newImgName = time().'__' .'section'.'.'.$request->img->extension();
            if (!empty($old_img)){
                File::delete(public_path('uploads/sections/'.$old_img));
            }
            $img->move(public_path('uploads/sections/'),$newImgName);
            $datas->img = $newImgName;
        }

        $datas->update();

        return redirect('/admin/section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Section::find($id);

        $data->delete();
        File::delete(public_path('uploads/sections/'.$data->img));
        return redirect('/admin/section');
    }
}
