@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/category">category</a></li>

                        <li class="breadcrumb-item active">update category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <form action="/admin/category/{{$data->id}}}" method="POST" enctype="multipart/form-data">
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
                                            <label for="title">Catageory name</label>
                                            <input name="name_en" value="{{$data->name_en}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label>Parent menu</label>

                                            <select class="custom-select" name="category_type">
{{--                                                <option>Select category</option>--}}
                                                @forelse($datas as $item)
                                                    @if($item->id == $data->category_type)
                                                        <option selected value="{{$item->id}}">{{$item->name_en}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->name_en}}</option>
                                                    @endif
                                                @empty
                                                    <option>Category not Fount</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Catageory name</label>
                                            <input name="name_ru" value="{{$data->name_ru}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="de" role="tabpanel" aria-labelledby="de-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Catageory name</label>
                                            <input name="name_de" value="{{$data->name_de}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="es" role="tabpanel" aria-labelledby="es-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Catageory name</label>
                                            <input name="name_es" value="{{$data->name_es}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Catageory name</label>
                                            <input name="name_it" value="{{$data->name_it}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>
                                    </div>

                                </div>






                                {{--                                <div class="form-group">--}}
                                {{--                                    <label>Parent menu</label>--}}
                                {{--                                    <select class="custom-select" name="parent_id">--}}
                                {{--                                        <option value="0">Parent not</option>--}}
                                {{--                                        @forelse($menus as $menu)--}}
                                {{--                                            <option value="{{$menu->id}}">{{$menu->name}}</option>--}}
                                {{--                                        @empty--}}
                                {{--                                            <option value="0">Parent not</option>--}}
                                {{--                                        @endforelse--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="col-md-4">--}}
                    {{--                        <div class="card card-primary">--}}
                    {{--                            <div class="card-body card-info">--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label for="exampleInputFile">Menu image</label>--}}
                    {{--                                    <div class="upload-img" style="width: 180px; margin: 25px auto;">--}}
                    {{--                                        <img style="width: 100%" src="{{asset('./images/default.jpg')}}" data-default="{{asset('./images/default.jpg')}}" alt="img">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="input-group">--}}
                    {{--                                        <div class="custom-file">--}}

                    {{--                                            <input name="img" type="file" class="custom-file-input" id="exampleInputFile" >--}}
                    {{--                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

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

    {{--    <script>--}}
    {{--        let imgInput = document.querySelector('.custom-file-input');--}}
    {{--        let imgContainer = document.querySelector('.upload-img img');--}}
    {{--        imgInput.addEventListener('change', function (e) {--}}
    {{--            const file = this.files[0];--}}
    {{--            if(file){--}}
    {{--                const reder = new FileReader();--}}

    {{--                reder.addEventListener('load', function () {--}}
    {{--                    imgContainer.setAttribute("src", this.result)--}}
    {{--                })--}}
    {{--                reder.readAsDataURL(file)--}}
    {{--            }else {--}}
    {{--                imgContainer.setAttribute("src", imgContainer.dataset.default)--}}
    {{--            }--}}
    {{--        })--}}
    {{--    </script>--}}
    <!-- /.content -->
@endsection

