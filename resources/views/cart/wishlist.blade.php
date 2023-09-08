@extends('layouts.home')

@push('frontCss')
    <link rel="stylesheet" href="{{ asset('css/homepage/plants.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endpush
@section('content')
    <div class="container">

        <table id="wishlist" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>

            <tbody>
                @php $total = 0 @endphp
                @if (session('wishlist'))
                    @foreach (session('wishlist') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    @if($details['type'] == "plant")
                                    <div class="col-sm-3 hidden-xs"><img
                                            src="{{ asset('assets/plantsFiles') . '/' . $details['image'] }}" width="100"
                                            height="100" class="img-responsive" />
                                    </div>
                                    @elseif($details['type'] == "seed")
                                    <div class="col-sm-3 hidden-xs"><img
                                        src="{{ asset('assets/seedsFiles') . '/' . $details['image'] }}" width="100"
                                        height="100" class="img-responsive" />
                                </div>
                                @elseif($details['type'] == "soil")
                                    <div class="col-sm-3 hidden-xs"><img
                                        src="{{ asset('assets/fertilizersFiles') . '/' . $details['image'] }}" width="100"
                                        height="100" class="img-responsive" />
                                </div>
                                @elseif($details['type'] == "accessory")
                                <div class="col-sm-3 hidden-xs"><img
                                    src="{{ asset('assets/accessoriesFiles') . '/' . $details['image'] }}" width="100"
                                    height="100" class="img-responsive" />
                            </div>
                            @elseif($details['type'] == "pot")
                            <div class="col-sm-3 hidden-xs"><img
                                src="{{ asset('assets/potsFiles') . '/' . $details['image'] }}" width="100"
                                height="100" class="img-responsive" />
                        </div>
                                @endif
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}"
                                    class="form-control quantity update-wishlist" />
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-wishlist"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>



    @include('layouts.welcome.footer')
    @push('frontJs')
        <script type="text/javascript">
            $(".update-wishlist").change(function(e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '{{ route('update.wishlist') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });

            $(".remove-from-wishlist").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: '{{ route('remove.from.wishlist') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>

        <script src="{{ asset('js/homescript.js') }}" defer></script>
        <script src="{{ asset('js/script.js') }}" defer></script>
    @endpush
@endsection

