 <x-layouts.admin>
    {{-- @dd($orders) --}}
    <!-- ============================================================== -->
    {{--    @include('sweetalert::alert') --}}

    @include('sweetalert::alert')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Orders</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                    <li class="breadcrumb-item active">Order Management</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">

                    <div class="col-xl-12">
                        <div class="row">
                            {{-- All Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16"> All Orders</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary">
                                                    <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-22">{{count($orders)}}</h5>

                                            <p class="text-muted">Order you recieved</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-primary" role="progressbar"
                                                    style="width: 100%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="70">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Pending Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Pending Orders</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-success">
                                                    <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-22">18</h5>

                                            <p class="text-muted">Order waiting to proceed</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-warning" role="progressbar"
                                                    style="width: 100%" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Delivered Orders --}}
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Delivered Order</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-success">
                                                    <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-22">40</h5>

                                            <p class="text-muted">Order you have completed</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-success" role="progressbar"
                                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <!-- Filters bar for product -->
                    <div class="row">


                        {{-- <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">All Orders</h4>
                                    <div class="table-responsive">
                                         @if ($products->isNotEmpty())
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product</th>

                                                    <th>Category</th>
                                                    <th>Stock</th>
                                                    <th>Sold </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><img src="{{ asset('storage/' . $product->productImage[0]->image) }}" width="42" class="me-3" alt="">{{ $product->name   }}</td>
                                                        <td>{{ $product->category->name   }}</td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>22</td>

                                                        <td>
                                                            <a href="/admin/product/{{$product->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                                            <form class="d-inline" action="/admin/product/{{$product->id}}/edit" method="GET">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary btn-sm">Edit</button>
                                                            </form>
                                                            <form class="d-inline" action="/admin/product/{{$product->id}}/delete" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                            </form>


                                                        </td>
                                                    </tr>
                                                @endforeach








                                                </tbody>
                                            </table>
                                        @else
                                            <div class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                        ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                                <span class="mx-3">
                                                No Products to show <br>

                                            </span>
                                            </div>


                                        @endif
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Products of the Month</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Order #</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Total Amount</th>
                                                    <th scope="col">Payment Method</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <th scope="row"> {{ $order->order_number }}</th>
                                                        <td>{{ $order->user_id }} </td>
                                                        <td>{{ $order->checkout_email }}</td>
                                                        <td>{{ $order->total_amount }}</td>
                                                        <td>{{ $order->payment_method }}</td>
                                                        <td>
                                                            <select id="{{ $order->id }}"
                                                                onchange="changeStatus({{ $order->id }})"
                                                                name="status" class="form-select">
                                                                <?php $status = old('status', @$order->status); ?>
                                                                <option value="pending"
                                                                    @if ($order->status == 'pending') selected="selected" @endif>
                                                                    Pending</option>
                                                                <option value="approved"
                                                                    @if ($order->status == 'approved') selected="selected" @endif>
                                                                    Approved</option>
                                                                <option value="cancelled"
                                                                    @if ($order->status == 'cancelled') selected="selected" @endif>
                                                                    Cancelled</option>
                                                                <option value="dispatched"
                                                                    @if ($order->status == 'dispatched') selected="selected" @endif>
                                                                    Dispatched</option>
                                                                <option value="delivered"
                                                                    @if ($order->status == 'delivered') selected="selected" @endif>
                                                                    Delivered</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Details
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalCenterTitle">
                                                                                {{ $order->order_number }}</h5>
                                                                            <button type="button" class="close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <div class="table-responsive">
                                                                                <table class="table">

                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th scope="col">#</th>
                                                                                            <th scope="col">Product
                                                                                                Name</th>
                                                                                            <th scope="col">Color
                                                                                            </th>
                                                                                            <th scope="col">Price
                                                                                            </th>
                                                                                            <th scope="col">Image
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($order->items as $detail)
                                                                                            <tr>
                                                                                                <th scope="row">1
                                                                                                </th>
                                                                                                <td>{{ $detail->product->name }}
                                                                                                </td>
                                                                                                <td>{{ $detail->color }}
                                                                                                </td>
                                                                                                <td>{{ $detail->total_amount }}
                                                                                                </td>
                                                                                                <td><img src="{{ asset('storage/product_images/'. $detail->product->product_image) }}"
                                                                                                        alt=""
                                                                                                        height="100px"
                                                                                                        width="100px">
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endforeach

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                   
                                                @endforeach
                                            </tbody>

                                        </table>

                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- end row -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->





        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
