@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@section('content')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts.admin.navbar');
            @include('layouts.admin.sidebar');

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @elseif(Session::has('warning'))
                    {{ Session::get('warning') }}
                @endif

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                       <h3>All The Orders</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Product Name</th>
                                                    <th>Product Photo</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->product_name }}</td>
                                                        <td>
                                                            <div class="">
                                                                @if($item->type == 'plant')
                                                                <a href="{{ asset('assets/plantsFiles') . '/' . $item->product_photo }}?text=1"
                                                                    data-toggle="lightbox"
                                                                    data-title="{{ $item->product_name }}"
                                                                    data-gallery="gallery">
                                                                    <img src="{{ asset('assets/plantsFiles') . '/' . $item->product_photo }}?text=1"
                                                                        class="img-fluid" alt="{{ $item->product_name }}"
                                                                        style="width:40px" />
                                                                </a>
                                                                @elseif($item->type == 'seed')
                                                                <a href="{{ asset('assets/seedsFiles') . '/' . $item->product_photo }}?text=1"
                                                                    data-toggle="lightbox"
                                                                    data-title="{{ $item->product_name }}"
                                                                    data-gallery="gallery">
                                                                    <img src="{{ asset('assets/seedsFiles') . '/' . $item->product_photo }}?text=1"
                                                                        class="img-fluid" alt="{{ $item->product_name }}"
                                                                        style="width:40px" />
                                                                </a>
                                                                @elseif($item->type == 'soil')
                                                                <a href="{{ asset('assets/fertilizersFiles') . '/' . $item->product_photo }}?text=1"
                                                                    data-toggle="lightbox"
                                                                    data-title="{{ $item->product_name }}"
                                                                    data-gallery="gallery">
                                                                    <img src="{{ asset('assets/fertilizersFiles') . '/' . $item->product_photo }}?text=1"
                                                                        class="img-fluid" alt="{{ $item->product_name }}"
                                                                        style="width:40px" />
                                                                </a>
                                                                @elseif($item->type == 'accessory')
                                                                <a href="{{ asset('assets/accessoriesFiles') . '/' . $item->product_photo }}?text=1"
                                                                    data-toggle="lightbox"
                                                                    data-title="{{ $item->product_name }}"
                                                                    data-gallery="gallery">
                                                                    <img src="{{ asset('assets/accessoriesFiles') . '/' . $item->product_photo }}?text=1"
                                                                        class="img-fluid" alt="{{ $item->product_name }}"
                                                                        style="width:40px" />
                                                                </a>
                                                                @elseif($item->type == 'pot')
                                                                <a href="{{ asset('assets/potsFiles') . '/' . $item->product_photo }}?text=1"
                                                                    data-toggle="lightbox"
                                                                    data-title="{{ $item->product_name }}"
                                                                    data-gallery="gallery">
                                                                    <img src="{{ asset('assets/potsFiles') . '/' . $item->product_photo }}?text=1"
                                                                        class="img-fluid" alt="{{ $item->product_name }}"
                                                                        style="width:40px" />
                                                                </a>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->price }}</td>

                                                        <td>
                                                            <form method="POST" action="{{ route('updateStatus') }}"
                                                                id="statusForm">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <select class="form-control" name="status"
                                                                    id="statusSelect" onchange="submitForm()">
                                                                    <option
                                                                        {{ $item->status === 'pending' ? 'selected' : '' }}
                                                                        value="pending">Pending</option>
                                                                    <option
                                                                        {{ $item->status === 'on-hold' ? 'selected' : '' }}
                                                                        value="on-hold">On Hold</option>
                                                                    <option
                                                                        {{ $item->status === 'complete' ? 'selected' : '' }}
                                                                        value="complete">Complete</option>
                                                                </select>
                                                            </form>

                                                            <script>
                                                                function submitForm() {
                                                                    document.getElementById('statusForm').submit();
                                                                }
                                                            </script>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Product Name</th>
                                                    <th>Product Photo</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Status</th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
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
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

        {{-- Seet Alert --}}
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
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

        <script>
            $('.delete-btn').on('click', function(event) {
                event.preventDefault();

                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });

                            var url = $(this).attr('href');
                            $.ajax({
                                url: url,
                                type: 'GET',
                                data: {
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(result) {
                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                    });
                                    window.location.reload();
                                }
                            });

                        } else {

                            swal("Your imaginary file is safe!");
                        }
                    });

            });
        </script>
    @endpush
