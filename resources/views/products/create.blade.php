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
            <form action="/admin/product"  name="demoform" method="POST" enctype="multipart/form-data" class="dropzone" id="form">
                @csrf

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
                                            <input name="name_en" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label>Parent menu</label>
                                            <select class="custom-select" name="category_id">
                                                <option>Select category</option>
                                                @forelse($productCategory as $item)
                                                    <option value="{{$item->id}}">{{$item->name_en}}</option>
                                                @empty
                                                    <option>Category not Fount</option>
                                                @endforelse
                                            </select>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="custom-file">--}}
{{--                                                        <input  name="images[]" type="file" multiple class="custom-file-input two" id="image" >--}}
{{--                                                        <label class="custom-file-label" for="image">Choose file</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="form-group">
                                                    <label for="images">Product images</label>
                                                    <input name="images[]" type="file" multiple class="form-control" id="images" placeholder="Enter img">
                                                </div>
                                            </div>
{{--                                            <div class="col-md-8">--}}
{{--                                                <div class="upload-images" style="width: 180px;">--}}
{{--                                                    <img style="width: 100%" src="{{asset('./images/default.jpg')}}" data-default="{{asset('./images/default.jpg')}}" alt="img">--}}
{{--                                                    <div class="card-body d-flex flex-wrap justify-content-start" id="container">--}}
{{--                                                        <!-- Image will be show here-->--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>




                                        <div class="form-group">
                                            <label for="url">Product about</label>
                                            <textarea name="product_about_en" style="min-height: 500px" class="form-control" id="product_about_en" placeholder="Enter text">
                                            </textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="url">Product info</label>
                                            <textarea name="product_info_en" style="min-height: 500px" class="form-control" id="product_info_en" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_ru" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_ru" style="min-height: 500px" class="form-control" id="product_about_ru" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_ru" style="min-height: 500px" class="form-control" id="product_info_ru" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="de" role="tabpanel" aria-labelledby="de-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_de" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_de" style="min-height: 500px" class="form-control" id="product_about_de" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_de" style="min-height: 500px" class="form-control" id="product_info_de" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="es" role="tabpanel" aria-labelledby="es-tab" style="padding-top: 25px">
                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_es" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_es" style="min-height: 500px" class="form-control" id="product_about_es" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_es" style="min-height: 500px" class="form-control" id="product_info_es" placeholder="Enter text">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab" style="padding-top: 25px">

                                        <div class="form-group">
                                            <label for="title">Product name</label>
                                            <input name="name_it" type="text" class="form-control" id="title" placeholder="Enter name">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_about_it" style="min-height: 500px" class="form-control" id="product_about_it" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Product text</label>
                                            <textarea name="product_info_it" style="min-height: 500px" class="form-control" id="product_info_it" placeholder="Enter text">
                                            </textarea>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                            @if($errors->any())

                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif



                            <div class="card">
                                <button type="submit" class="btn btn-primary" id="submit-all">Create</button>
                            </div>

                    </div>
                </div>

            </form>
        </div>
        <!-- /.container-fluid -->
    </div>

    <style type="text/css">
        .image_container {
            height: 120px;
            width: 200px;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px;
        }
        .image_container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }
        .image_container span {
            top: -6px;
            right: 8px;
            color: red;
            font-size: 28px;
            font-weight: normal;
            cursor: pointer;
        }
    </style>



@endsection

@section('script')
{{--    <script>--}}

{{--        let imgInput = document.querySelector('.custom-file-input.one');--}}
{{--        let imgContainer = document.querySelector('.upload-img img');--}}

{{--        let imagesInput = document.querySelector('.custom-file-input.two');--}}
{{--        let imagesContainer = document.querySelector('.upload-images img');--}}
{{--        let images = [];--}}

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

{{--        imagesInput.addEventListener('change', function (e) {--}}
{{--            image_select()--}}
{{--        })--}}



{{--        function image_select() {--}}
{{--            var image = imagesInput.files;--}}
{{--            for (i = 0; i < image.length; i++) {--}}
{{--                if (check_duplicate(image[i].name)) {--}}
{{--                    images.push({--}}
{{--                        "name" : image[i].name,--}}
{{--                        "url" : URL.createObjectURL(image[i]),--}}
{{--                        "file" : image[i],--}}
{{--                    })--}}
{{--                } else--}}
{{--                {--}}
{{--                    alert(image[i].name + " is already added to the list");--}}
{{--                }--}}
{{--            }--}}
{{--            document.getElementById('form').reset();--}}
{{--            document.getElementById('container').innerHTML = image_show();--}}
{{--        }--}}

{{--        function image_show() {--}}
{{--            var image = "";--}}
{{--            images.forEach((i) => {--}}
{{--                image += `<div class="image_container d-flex justify-content-center position-relative">--}}
{{--   	  	  	  	  <img src="`+ i.url +`" alt="Image">--}}
{{--   	  	  	  	  <span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>--}}
{{--   	  	  	  </div>`;--}}
{{--            })--}}
{{--            return image;--}}
{{--        }--}}

{{--        function delete_image(e) {--}}
{{--            images.splice(e, 1);--}}
{{--            document.getElementById('container').innerHTML = image_show();--}}
{{--        }--}}

{{--        function check_duplicate(name) {--}}
{{--            var image = true;--}}
{{--            if (images.length > 0) {--}}
{{--                for (e = 0; e < images.length; e++) {--}}
{{--                    if (images[e].name == name) {--}}
{{--                        image = false;--}}
{{--                        break;--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--            return image;--}}
{{--        }--}}

{{--        function get_image_data() {--}}
{{--            var form = new FormData()--}}
{{--            for (let index = 0; index < images.length; index++) {--}}
{{--                form.append("file[" + index + "]", images[index]['file']);--}}
{{--            }--}}
{{--            return form;--}}
{{--        }--}}

{{--    </script>--}}
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


