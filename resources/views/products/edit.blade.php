@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/product">product</a></li>

                        <li class="breadcrumb-item active">add product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-body card-info">
                    <div class="col-md-12">
                        @if (count($data->images)>0)
                            <div class="text-bold">Images:</div>
                            <div class="row">
                                @foreach ($data->images as $img)
                                    <div class="col-md-1">
                                        <form action="/admin/productimg/{{ $img->id }}" method="post">
                                            <button class="btn text-danger">X</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <img src="{{asset('/uploads/products/images/'.$img->image)}}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                    </div>
                                @endforeach
                            </div>

                        @endif
                    </div>
                </div>
            </div>

            <form action="/admin/product/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body card-info">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="en-tab" data-toggle="tab" href="#en" role="tab" aria-controls="en" aria-selected="true">En</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="ru-tab" data-toggle="tab" href="#ru" role="tab" aria-controls="ru" aria-selected="false">Ru</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="de-tab" data-toggle="tab" href="#de" role="tab" aria-controls="de" aria-selected="false">De</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="es-tab" data-toggle="tab" href="#es" role="tab" aria-controls="es" aria-selected="false">Es</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="it-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="false">It</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="en" role="tabpanel" aria-labelledby="en-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_en" value="{{$data->name_en}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label>Parent menu</label>
                                            <select class="custom-select" name="category_id">
                                                <option>Select category</option>
                                                @forelse($productCategory as $item)
                                                    @if($item->id == $data->category_id)
                                                        <option selected value="{{$item->id}}">{{$item->name_en}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->name_en}}</option>
                                                    @endif
                                                @empty
                                                    <option>Category not Fount</option>
                                                @endforelse
                                            </select>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="images">Product images</label>
                                                    <input name="images[]" type="file" multiple class="form-control" id="images" placeholder="Enter img">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_en" style="min-height: 500px" class="form-control" id="product_about_en" placeholder="Enter text">
                                                {{$data->product_about_en}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_en" style="min-height: 500px" class="form-control" id="product_info_en" placeholder="Enter text">
                                                {{$data->product_info_en}}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_ru" value="{{$data->name_ru}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_ru" style="min-height: 500px" class="form-control" id="product_about_ru" placeholder="Enter text">
                                                {{$data->product_about_ru}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_ru" style="min-height: 500px" class="form-control" id="product_info_ru" placeholder="Enter text">
                                                {{$data->product_info_ru}}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="de" role="tabpanel" aria-labelledby="de-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_de" value="{{$data->name_de}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_de" style="min-height: 500px" class="form-control" id="product_about_de" placeholder="Enter text">
                                                {{$data->product_about_de}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_de" style="min-height: 500px" class="form-control" id="product_info_de" placeholder="Enter text">
                                                {{$data->product_info_de}}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="es" role="tabpanel" aria-labelledby="es-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_es" value="{{$data->name_es}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_es" style="min-height: 500px" class="form-control" id="product_about_es" placeholder="Enter text">
                                                {{$data->product_about_es}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_es" style="min-height: 500px" class="form-control" id="product_info_es" placeholder="Enter text">
                                                {{$data->product_info_es}}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_it" value="{{$data->name_it}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_it" style="min-height: 500px" class="form-control" id="product_about_it" placeholder="Enter text">
                                                {{$data->product_about_it}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_it" style="min-height: 500px" class="form-control" id="product_info_it" placeholder="Enter text">
                                                {{$data->product_info_it}}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        @if($errors->any())

                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.container-fluid -->
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#product_info_en' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_about_en' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#product_info_ru' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_about_ru' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#product_info_de' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_about_de' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#product_info_es' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_about_es' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_info_it' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#product_about_it' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection



