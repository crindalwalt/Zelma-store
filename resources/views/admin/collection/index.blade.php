<x-layouts.admin>
    {{-- @dd($products) --}}
    <!-- ============================================================== -->
    @include('sweetalert::alert')
    <div class="main-content">


        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Add Collections</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/collections">Collections</a></li>
                                    <li class="breadcrumb-item active">Add Collections</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="/admin" class="btn btn-success">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('collections.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <h4 class="header-title">Add New Collections</h4>
                                        <p class="card-title-desc">You can add product collections here</p>
                                        <div class="row">

                                            <div class="col-6 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter collection name" id="example-text-input"
                                                        name="name">
                                                    @error('name')
                                                        <div class="text-danger"></div>  
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter collection title" id="example-text-input"
                                                        name="title">
                                                    @error('title')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="example-text-input" class=" col-form-label">Discount
                                                    Price</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter discount price" id="example-text-input"
                                                        name="discount_price">
                                                    @error('discount_price')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="example-text-input"
                                                    class=" col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter collection description"
                                                        id="example-text-input" name="description">
                                                    @error('description')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <label for="example-email-input" class=" col-form-label">Banner
                                                    Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"  type="file" id="example-email-input"
                                                        name="banner_image">
                                                    @error('banner_image')
                                                        <div class="text-danger"></div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="control-label">Collection Product</label>
                                                <select name="collection_products[]" class="form-control select2" multiple>
                                                    <option>Select</option>
                                                    @foreach ($products as $product)

                                                        <option value="{{ $product->id }}" class="d-flex justify-content-between">
                                                            {{ $product->name }}
                                                            <small class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;({{$product->category->name}})</small>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('banner_image')
                                                    <div class="text-danger fw-semibold">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <div class="#">
                                                <input class="btn btn-lg px-4 py-2 btn-primary" type="submit"
                                                    value="Add Collection" id="example-email-input">
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Browse all Collections</h4>
                                    <p class="card-title-desc">All of the below Collections are fetched from the
                                        DateBase</p>
                                    <div class="table-responsive">

                                        <table class="table mb-0">
                                            @if ($collections->isNotEmpty())
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Title</th>
                                                    <th> Discount percentage</th>

                                                    <th>Actions</th>

                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($collections as $collection)
                                                      
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$collection->name}}</td>
                                                    <td>{{$collection->title}}</td>
                                                    <td>{{$collection->discount_percentage}}%</td>

                                                    <td class="">

                                                            <td class="">
                                                                <a href="/admin/collection/{{$collection->id}}" class="btn btn-outline-success btn-sm">Show</a>

                                                                <form action="{{ route('delete_category') }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" value=""
                                                                        name="id">
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-outline-danger">Delete</button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <div
                                                        class="text-center text-warning text-lg font-size-24 font-semibold d-flex justify-content-center align-items-center
                                            ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" fill="currentColor"
                                                            class="bi bi-exclamation-triangle-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                        <span class="mx-3">
                                                            No Collections to show <br>

                                                        </span>
                                                    </div>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                </div>


            </div> <!-- container-fluid -->
        </div>
        <x-partials.admin-footer />
    </div>









    <!-- ============================================================== -->




</x-layouts.admin>
