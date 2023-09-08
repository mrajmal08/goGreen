<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGreenNursery</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/homepage/checkout.css') }}">




</head>

<body>
    <div class="container">
        <div class="checkoutLayout">
            <div class="returnCart">
                <h1>List Product in Cart</h1>
                <div class="list">

                    @php $total = 0 @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            <div class="item">
                                <img src="{{ asset('assets/plantsFiles') . '/' . $details['image'] }}" />
                                <div class="info">
                                    <div class="name">{{ $details['name'] }}</div>
                                    <div class="price">Rs. {{ $details['price'] }} / 1</div>
                                </div>
                                <div class="quantity">{{ $details['quantity'] }}</div>
                                <div class="returnPrice">Rs{{ $details['price'] }}</div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            {{-- @dd(session('cart')) --}}
            <?php $sum = 0;
            $quantity = 0;
            foreach (session('cart') as $item) {
                $sum += (int) $item['price'];
                $quantity += (int) $item['quantity'];
            } ?>

            <div class="right">

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

                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif



                <h1>Checkout</h1>
                <form method="POST" action="{{ route('cart.store') }}">
                    @CSRF
                    <div class="form">
                        <div class="group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="group">
                            <label for="phone">Phone Number</label>
                            <input type="number" name="phone" id="phone">
                        </div>

                        <div class="group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address">
                        </div>
                    </div>
                    @if (session('cart'))
                        <div class="return">
                            <div class="row">
                                <div>Total Quantity</div>
                                <input type="hidden" name="total_quantity" value="{{ $quantity }}">
                                <div class="totalQuantity">{{ $quantity }}</div>
                            </div>
                            <div class="row">
                                <div>Total Price</div>
                                <div class="totalPrice">{{ $sum }}</div>
                            </div>

                        </div>
                    @endif
                    <button type="submit" class="buttonCheckout">CHECKOUT</button>
                </form>
            </div>
        </div>
    </div>


    <script src="checkout.js">
        let listCart = [];

        function checkCart() {
            var cookieValue = document.cookie
                .split('; ')
                .find(row => row.startsWith('listCart='));
            if (cookieValue) {
                listCart = JSON.parse(cookieValue.split('=')[1]);
            }
        }
        checkCart();
        addCartToHTML();

        function addCartToHTML() {
            // clear data default
            let listCartHTML = document.querySelector('.returnCart .list');
            listCartHTML.innerHTML = '';

            let totalQuantityHTML = document.querySelector('.totalQuantity');
            let totalPriceHTML = document.querySelector('.totalPrice');
            let totalQuantity = 0;
            let totalPrice = 0;
            // if has product in Cart
            if (listCart) {
                listCart.forEach(product => {
                    if (product) {
                        let newCart = document.createElement('div');
                        newCart.classList.add('item');
                        newCart.innerHTML =
                            `<img src="${product.image}">
                    <div class="info">
                        <div class="name">${product.name}</div>
                        <div class="price">$${product.price}/1 product</div>
                    </div>
                    <div class="quantity">${product.quantity}</div>
                    <div class="returnPrice">$${product.price * product.quantity}</div>`;
                        listCartHTML.appendChild(newCart);
                        totalQuantity = totalQuantity + product.quantity;
                        totalPrice = totalPrice + (product.price * product.quantity);
                    }
                })
            }
            totalQuantityHTML.innerText = totalQuantity;
            totalPriceHTML.innerText = '$' + totalPrice;
        }
    </script>



</body>

</html>
