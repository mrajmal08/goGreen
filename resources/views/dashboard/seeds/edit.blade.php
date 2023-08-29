@extends('layouts.app')
@push('css')
@endpush

@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('layouts.admin.navbar');
            @include('layouts.admin.sidebar');

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Edit Seeds</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('seeds.index') }}">All
                                        Seeds</a></li>
                                    <li class="breadcrumb-item active">Edit Seeds</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                    <form method="POST" action="{{ route('seeds.update', [$seed->id]) }}" enctype="multipart/form-data" id="quickForm">
                        @CSRF
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">

                                    <div class="card-header">
                                        <h3 class="card-title">Seeds</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Seeds Category</label>
                                        <select class="form-control" name="cat_id" style="width: 100%;">
                                          <option {{ $seed->cat_id? 'selected':'' }} value="{{ $seed->cat_id }}" >{{ DB::table('seeds_categories')->where('id',$seed->cat_id)->pluck('name')->first() }} </option>
                                           @foreach($categories as $category)
                                            <option value="{{ $category->id}} ">{{ $category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Seeds Type</label>
                                            <select class="form-control" name="type_id" style="width: 100%;">
                                                <option {{ $seed->type_id? 'selected':'' }} value="{{ $seed->type_id }}" >{{ DB::table('seeds_types')->where('id',$seed->type_id)->pluck('name')->first()}}</option>
                                               @foreach($types as $type)
                                                <option value="{{ $type->id}} ">{{ $type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputName">Seeds Name</label>
                                            <input type="text" id="inputName" name="name" value="{{ $seed->name}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputName">Seeds Description</label>
                                                <textarea id="summernote" name="description" row="4">
                                                </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputTitle">Seeds Price</label>
                                            <input type="number" id="inputTitle" name="price" value="{{$seed->price}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTitle">Discounted Price</label>
                                            <input type="number" id="inputTitle" name="discount_price" value="{{$seed->discount_price}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputClientCompany">Feature image</label>
                                            <div class="custom-file">
                                                <input type="file" name="feature_image" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose Image</label>

                                            </div>
                                            <div class="">
                                                <a href="{{ asset('assets/seedsFiles') . '/' . $seed->photo }}?text=1"
                                                    data-toggle="lightbox"
                                                    data-title="{{ $seed->name }}"
                                                    data-gallery="gallery">
                                                    <img src="{{ asset('assets/seedsFiles') . '/' . $seed->photo }}?text=1"
                                                        class="img-fluid" alt="{{ $seed->name }}"
                                                        style="width:40px" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="col-12">

                                <input type="submit" value="Update seeds" class="btn btn-success float-right">
                            </div>
                        </div>
                    </form>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('layouts.admin.footer');

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    @endsection

    @push('js')
        <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- CodeMirror -->
        <script src="{{ asset('assets/plugins/codemirror/codemirror.js') }}"></script>
        <script src="{{ asset('assets/plugins/codemirror/mode/css/css.js') }}"></script>
        <script src="{{ asset('assets/plugins/codemirror/mode/xml/xml.js') }}"></script>
        <script src="{{ asset('assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>


        <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>


        <script>
            $(function() {
                bsCustomFileInput.init();
            });
        </script>

        <script>
            $(function() {
                // Summernote
                $('#summernote').summernote()

                // CodeMirror
                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                });
            })
        </script>

    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>

    @endpush
