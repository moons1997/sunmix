@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/section">section</a></li>

                        <li class="breadcrumb-item active">update section</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <form action="/admin/section/{{$data->id}}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
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
                                            <label for="title">Section title</label>
                                            <input name="name_en" value="{{$data->name_en}}" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label>Section type</label>
                                            <select class="custom-select" name="type_id">
                                                <option {{$data->type_id == 1 ? 'selected' : ''}} value="1">About</option>
                                                <option {{$data->type_id == 2 ? 'selected' : ''}} value="2">Technology</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="order">Section order</label>
                                            <input name="order" value="{{$data->order}}" type="text" class="form-control" id="order" placeholder="Enter order">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Section info</label>
                                            <textarea name="info_en" style="min-height: 500px" class="form-control" id="info_en" placeholder="Enter text">
                                                {{$data->info_en}}
                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="name_ru">Section title</label>
                                            <input value="{{$data->name_ru}}" name="name_ru" type="text" class="form-control" id="name_ru" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="info_ru">Section info</label>
                                            <textarea name="info_ru" style="min-height: 500px" class="form-control" id="info_ru" placeholder="Enter text">
                                                {{$data->info_ru}}
                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="de" role="tabpanel" aria-labelledby="de-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="name_de">Section title</label>
                                            <input value="{{$data->name_de}}" name="name_de" type="text" class="form-control" id="name_de" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="info_de">Section info</label>
                                            <textarea value="{{$data->name_de}}" name="info_de" style="min-height: 500px" class="form-control" id="info_de" placeholder="Enter text">
                                                {{$data->info_de}}
                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="es" role="tabpanel" aria-labelledby="es-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="name_es">Section title</label>
                                            <input value="{{$data->name_es}}" name="name_es" type="text" class="form-control" id="name_es" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="info_es">Section info</label>
                                            <textarea name="info_es" style="min-height: 500px" class="form-control" id="info_es" placeholder="Enter text">
                                                {{$data->info_es}}
                                            </textarea>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="name_it">Section title</label>
                                            <input value="{{$data->name_it}}" name="name_it" type="text" class="form-control" id="name_it" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="info_it">Section info</label>
                                            <textarea name="info_it" style="min-height: 500px" class="form-control" id="info_it" placeholder="Enter text">
                                                {{$data->info_it}}
                                            </textarea>
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
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body card-info">
                                <div class="form-group">
                                    <label for="exampleInputFile">Menu image</label>
                                    <div class="upload-img" style="width: 180px; margin: 25px auto;">
                                        <img style="width: 100%" src="{{asset('uploads/sections/'. $data->img)}}" data-default="{{asset('uploads/sections/'. $data->img)}}" alt="img">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">

                                            <input name="img" type="file" class="custom-file-input" id="exampleInputFile" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
        let imgInput = document.querySelector('.custom-file-input');
        let imgContainer = document.querySelector('.upload-img img');
        imgInput.addEventListener('change', function (e) {
            const file = this.files[0];
            if(file){
                const reder = new FileReader();

                reder.addEventListener('load', function () {
                    imgContainer.setAttribute("src", this.result)
                })
                reder.readAsDataURL(file)
            }else {
                imgContainer.setAttribute("src", imgContainer.dataset.default)
            }
        })

        ClassicEditor
            .create( document.querySelector( '#info_en' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#info_ru' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#info_de' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#info_es' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#info_it' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- /.content -->
@endsection

