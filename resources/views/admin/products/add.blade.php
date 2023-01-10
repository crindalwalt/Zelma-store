
<x-layouts.admin>

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
                                <h4>Add Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="" class="btn btn-success">Add Widget</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                        <ul class="twitter-bs-wizard-nav">
                                            <li class="nav-item add-product-border">
                                                <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">01. Basic Info</span>
                                                </a>
                                            </li>
                                            <li class="nav-item add-product-border">
                                                <a href="#product-img" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">02. Product Img</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#metadata" class="nav-link" data-toggle="tab">
                                                    <span class="step-number">03. Meta Data</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- ebd ul -->
                                        <form id="product_add_form" action="{{ route('products.store') }}" method="POST">
                                            @csrf
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                            <div class="tab-pane" id="basic-info">
                                                <h4 class="header-title">Basic Information</h4>
                                                <p class="card-title-desc">Fill all information below</p>


                                                    <div class="mb-3">
                                                        <label class="form-label" for="productname">Product
                                                            Name</label>
                                                        <input id="productname" name="productname" type="text"
                                                               class="form-control" placeholder="Enter your name">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                       for="manufacturername">Manufacturer Name</label>
                                                                <input id="manufacturername" name="manufacturername"
                                                                       type="text" class="form-control"
                                                                       placeholder="Enter manufacturer name">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                       for="manufacturerbrand">Manufacturer
                                                                    Brand</label>
                                                                <input id="manufacturerbrand"
                                                                       name="manufacturerbrand" type="text"
                                                                       class="form-control"
                                                                       placeholder="Enter manafacturer brand">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="price">Price</label>
                                                                <input id="price" name="price" type="text"
                                                                       class="form-control" placeholder="Enter Price">
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="control-label">Category</label>
                                                                <select name="productCategory" class="form-control select2">
                                                                    <option >Select</option>
                                                                    @foreach($categories as $cat)
                                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="control-label">Features</label>

                                                                <select
                                                                    class="select2 form-control select2-multiple"
                                                                    multiple="multiple"
                                                                    data-placeholder="Choose ...">
                                                                    <option value="TO">Touchscreen</option>
                                                                    <option value="CF">Call Function</option>
                                                                    <option value="NO" selected>Notifications
                                                                    </option>
                                                                    <option value="FI" selected>Fitness</option>
                                                                    <option value="OU">Outdoor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="productdesc">Product
                                                            Description</label>
                                                        <textarea class="form-control" id="productdesc" rows="5"
                                                                  placeholder="Enter Description"></textarea>
                                                    </div>


                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="next"><a href="#"> Product Img <i
                                                                class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- end tabpane -->
                                            <div class="tab-pane" id="product-img">
                                                <h4 class="header-title">Product Images</h4>
                                                <p class="card-title-desc">Upload product image</p>

                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i
                                                                    class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                            </div>

                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                    </div>

                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="#"><i
                                                                class="mdi mdi-arrow-left me-1"></i> Basic Info</a>
                                                    </li>
                                                    <li class="next"><a href="#">Meta Data <i
                                                                class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="metadata">
                                                <h4 class="header-title">Meta Data</h4>
                                                <p class="card-title-desc">Fill all information below</p>


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="metatitle">Meta
                                                                    title</label>
                                                                <input id="metatitle" name="metatitle" type="text"
                                                                       class="form-control"
                                                                       placeholder="Enter meta title">
                                                            </div>
                                                        </div><!-- end col -->
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="metakeywords">Meta
                                                                    Keywords</label>
                                                                <input id="metakeywords" name="metakeywords"
                                                                       type="text" class="form-control"
                                                                       placeholder="Enter keywords">
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metadescription">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metadescription" rows="5"
                                                                  placeholder="Enter Description"></textarea>
                                                    </div>

                                                <!-- end form -->
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="#"><i
                                                                class="mdi mdi-arrow-left me-1"></i> Product Img</a>
                                                    </li>
                                                    <li class="float-end"><input type="submit" class="btn btn-md btn-primary" value="Save Changes" > <i
                                                                class="mdi mdi-arrow-right ms-1"></i> </li>
                                                </ul>
                                                <!-- end ul -->
                                            </div>
                                            <!-- end tabpane -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->






 {{--   <div class="main-content">

{{--        <div class="page-content">--}}

{{--            <!-- start page title -->--}}
{{--            <div class="page-title-box">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="page-title">--}}
{{--                                <h4>Product Management</h4>--}}
{{--                                <ol class="breadcrumb m-0">--}}
{{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Production</a></li>--}}
{{--                                    <li class="breadcrumb-item active">Add Product</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <div class="float-end d-none d-sm-block">--}}
{{--                                <a href="/admin" class="btn btn-success">Dashboard</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end page title -->--}}


{{--            <div class="container-fluid">--}}

{{--                <div class="page-content-wrapper">--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}

{{--                                    <div class="my-4">--}}
{{--                                        <h4 class="header-title">Basic Information </h4>--}}
{{--                                        <p class="card-title-desc">General imformation about what you selling</p>--}}
{{--                                    </div>--}}

{{--                                    --}}{{--product name --}}
{{--                                    <div class="row mb-3 ">--}}
{{--                                        <div class="col-lg-6 col-md-12 col-sm-12 d-lg-flex flex-wrap w-100 my-2">--}}
{{--                                            <label for="product_name" class="col-sm-2 col-form-label">Name</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <input class="form-control" type="text" placeholder="Macbook pro 16" id="product_name">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 col-md-12 col-sm-12 d-lg-flex flex-wrap w-100 my-2">--}}
{{--                                            <label class="col-sm-2 col-form-label">Category</label>--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <select class="form-select" aria-label="Default select example">--}}
{{--                                                    <option selected="">Choose the product category</option>--}}
{{--                                                    <option value="1">Dress</option>--}}
{{--                                                    <option value="2">Electronics</option>--}}
{{--                                                    <option value="3">Trees</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--product Category --}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="product_brand" class="col-sm-2 col-form-label">Brand</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="text" placeholder="Apple" id="product_brand" name="product_brand">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    --}}{{--product Description --}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="product_description" class="col-sm-2 col-form-label">Description</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="text" placeholder="A little about about your product" id="product_description" name="product_description">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}



{{--                                    <div class="my-5">--}}
{{--                                        <h4 class="header-title">Selling Information </h4>--}}
{{--                                        <p class="card-title-desc">give imformation about price,stock and discounts</p>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--product Quantity --}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="number" placeholder="23" id="quantity" name="product_quantity">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--product Price orignal --}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="product_price" class="col-sm-2 col-form-label">Orignal Price</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="number" placeholder="$565" id="product_price">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--product price discounted --}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="product_price_discount" class="col-sm-2 col-form-label">Discounted Price</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="number" name="product_price_discount"  placeholder="$520" id="product_price_discount">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="product_featured_image" class="col-sm-2 col-form-label">Featured image</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="file" id="product_featured_image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="my-5">--}}
{{--                                        <h4 class="header-title">Basic Information </h4>--}}
{{--                                        <p class="card-title-desc">General imformation about what you selling</p>--}}
{{--                                    </div>--}}









{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="month" value="2020-03" id="example-month-input">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="week" value="2020-W14" id="example-week-input">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="color" class="form-control form-control-color w-100" id="example-color-input" value="#5664d2" title="Choose your color">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label class="col-sm-2 col-form-label">Select</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <select class="form-select" aria-label="Default select example">--}}
{{--                                                <option selected="">Open this select menu</option>--}}
{{--                                                <option value="1">One</option>--}}
{{--                                                <option value="2">Two</option>--}}
{{--                                                <option value="3">Three</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end row -->--}}

{{--                </div>--}}


{{--            </div> <!-- container-fluid -->--}}
{{--        </div>--}}
        <!-- End Page-content -->



        <x-partials.admin-footer />
    </div>
    <!-- end main content-->









    <!-- ============================================================== -->




</x-layouts.admin>
