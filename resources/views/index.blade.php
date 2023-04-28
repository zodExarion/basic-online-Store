<x-layout>

    
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                    id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" action="/home">
                    <div class="input-group"><input class="bg-light form-control border-0 small" name="search"
                            type="text" placeholder="Search by Name, Category"><button class="btn btn-primary py-0"
                            type="submit"><i class="fas fa-search"></i></button></div>
                </form>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                            aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100" action="/home">
                                <div class="input-group"><input name="search"
                                        class="bg-light form-control border-0 small" type="text"
                                        placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0"
                                            type="submit"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                href="#"><span class="badge bg-danger badge-counter" id="notif"></span><i
                                    class="fas fa-shopping-cart fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                <h6 class="dropdown-header">Cart</h6>
                                <div class="overflow-auto overflow-x-hidden " style="max-height: 50vh;">

                                    <div class="" id="cartsContainer">

                                    </div>

                                </div>
                                <form action="{{ route('payment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="amount" value="">
                                    <button id="order" class="dropdown-item text-center small text-white bg-danger"
                                        type="submit">

                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-end"
                            aria-labelledby="alertsDropdown"></div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                    class="d-none d-lg-inline me-2 text-gray-600 small">{{ ucwords(Auth::user()->name) }}</span><img
                                    class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                    class="dropdown-item" href="#"><i
                                        class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                    class="dropdown-item" href="#"><i
                                        class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a
                                    class="dropdown-item" href="#"><i
                                        class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity
                                    log</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                <button type="submit" class="dropdown-item" ><i
                                        class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2><strong><span style="color: rgb(0, 0, 0); background-color: transparent;">Basic Online
                                Store</span></strong><br></h2>
                    <p class="w-lg-50">Take care of the Hendrerit until it is convenient for the Hendreit. The
                        world needs basketball.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3  ">
                @unless(count($products) == 0)
                    @foreach($products as $product)
                        <div class="col card-group">
                            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                <div class="card-body p-4 d-flex flex-column justify-content-between">
                                    <div>
                                        <p class="text-primary card-text mb-0">{{ $product->price }} pesos</p>
                                        <h4 class="card-title">{{ $product->name }}</h4>
                                    </div>

                                    <p class="card-text">{{ $product->description }}</p>
                                    <div class="d-flex align-items-center">
                                        <form action="#" method="POST" class="add_to_cart d-flex align-items-center">
                                            @csrf

                                            <div class="px-1 ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend btn-minus">
                                                        <span class="btn btn-sm btn-outline-secondary "><b><i
                                                                    class="fa fa-minus"></i></b></span>
                                                    </div>

                                                    <input class="qty" type="number" name="quantity" id="" value="1"
                                                        readonly>

                                                    <div class="input-group-append btn-plus">
                                                        <span class="btn btn-sm btn-outline-secondary "><b><i
                                                                    class="fa fa-plus"></i></b></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button class="btn btn-primary" type="submit">Add to
                                                cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Product found</p>
                @endunless

            </div>
            <div class="d-flex justify-content-center m-5">{{ $products->links() }}</div>

        </div>

    </div>

    <script>
        window._conf = function ($msg = '', $func = '', $params = []) {
            $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
            $('#confirm_modal .modal-body').html($msg)
            $('#confirm_modal').modal('show')
        }
        $(document).ready(function () {
            fetchAllCarts();

        });


        $(document).on('click', '.btn-minus', function () {
            var qty = $(this).siblings('input').val();
            qty = parseInt(qty) > 1 ? parseInt(qty) - 1 : parseInt(qty);

            $(this).siblings('input').val(qty).trigger('change');
            if (qty.val() == 0) {
                $('.add-to-cart').attr('disabled', true);
            }


        });

        $(document).on('click', '.btn-plus', function () {
            var qty = parseInt($(this).siblings('input').val());
            // var stock = parseInt($(this).attr('data-stock'));
            qty = parseInt(qty) + 1;
            $(this).siblings('input').val(qty).trigger('change');

        });

        $('.add_to_cart').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            
            $.ajax({
                type: 'POST',
                url: '{{ route('store') }}',
                data: formData,
                success: function (response) {
                    console.log(response);

                    fetchAllCarts();
                    $('#notification-container').append(
                        '<div class="alert alert-success alert-dismissible fade show m-1" role="alert"><strong>Success!</strong> ' +
                        response.message + '.</div>');
                    setTimeout(function () {
                        $('.alert').alert('close');
                    }, 3000);

                },
                error: function (response) {
                    console.log(response);
                }
            });
        });

        $(document).on('click', '.cart-plus', function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart/add/' + id,
                method: 'PUT',
                data: {
                    type: 'add'
                },
                success: function (response) {
                    if (response.message == 'delete') {

                        _conf("Are you sure to DELETE this from your CART?", "delete_product", [
                            id
                        ]);

                    } else {
                        console.log(response);

                        fetchAllCarts();
                    }
                }
            })
        });
        $(document).on('click', '.cart-minus', function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart/minus/' + id,
                method: 'PUT',
                data: {
                    type: 'minus'
                },
                success: function (response) {
                    if (response.message == 'delete') {

                        _conf("Are you sure to DELETE this from your CART?", "delete_product", [
                            id
                        ]);

                    } else {
                        console.log(response);

                        fetchAllCarts();
                    }
                }
            })

        });

        $(document).on('click', '.del', function () {
            _conf("Are you sure to DELETE this from your CART?", "delete_product", [$(this).attr('data-id')]);
        })

        function delete_product($id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart/delete/' + $id,
                method: 'DELETE',

                success: function (response) {
                    console.log(response);

                    fetchAllCarts();
                    $('#notification-container').append(
                        '<div class="alert alert-success alert-dismissible fade show m-1" role="alert"><strong>Success!</strong> ' +
                        response.message + '.</div>');
                    $('#confirm_modal').modal('hide');
                    setTimeout(function () {
                        $('.alert').alert('close');
                    }, 3000);

                }
            })
        };

        function fetchAllCarts() {
            $.ajax({
                type: 'GET',
                url: '{{ route('cart') }}',
                dataType: 'json',

                success: function (data) {
                    var cartsHtml = '';
                    var totalSum = 0;
                    $('#notif').html(data.cartCount);
                    $.each(data.carts, function (index, cart) {
                        var total = cart.quantity * cart.product.price;
                        totalSum += total;
                        cartsHtml += `
                            <div class=" d-flex align-items-center justify-content-between ">
                                <div class="d-flex p-2 align-items-center w-100 ">
                                    <div class="px-2 ">
                                        <div class="input-group d-flex flex-nowrap ">
                                            <div class="input-group-prepend cart-minus"
                                                data-id="${cart.id}">
                                                <span class="btn btn-sm btn-outline-secondary ">
                                                    <b>
                                                        <i class="fa fa-minus"></i>
                                                    </b>
                                                </span>
                                            </div>
                                            <input class="qty" type="number" name="qty" id="" value="${cart.quantity}" readonly>
                                            <div class="input-group-append cart-plus" data-id="${cart.id}" >
                                                <span class="btn btn-sm btn-outline-secondary ">
                                                    <b>
                                                        <i class="fa fa-plus"></i>
                                                    </b>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-bold " >
                                        <div  class="text-truncate" style=" width: 6rem;">
                                            ${cart.product.name}
                                        </div>
                                        <p class="small text-gray-500 mb-0">
                                            Total: ${parseFloat(total.toFixed(2))}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-center p-3" >
                                    <a class="btn btn-danger btn-circle ms-1 del" data-id="${cart.id}" role="button" type="submit"><i class="fas fa-trash text-white"></i></a>
                                </div>
                            </div>
                            <hr class="p-0 m-0">
                         `;
                    });

                    if (data.carts.length === 0) {
                        cartsHtml = '<p>Order Now</p>';
                    }
                    $('#cartsContainer').html(cartsHtml);
                    var formattedTotalSum = totalSum.toLocaleString('en-US', {
                        style: 'currency',
                        currency: 'PHP'
                    });
                    $('#order').text('PLACE ORDER: ' + formattedTotalSum);
                    $('[name="amount"]').val(totalSum);
                }
            });
        };

    </script>
</x-layout>
