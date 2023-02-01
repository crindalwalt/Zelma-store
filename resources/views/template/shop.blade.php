<x-main-layout>

        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop</h2>
                    <p class="left">Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                </div>
            </div>
            <div class="breadcrumb-img-2">
                <img src="assets/images/about/breadcrumb-3.png" alt="">
            </div>
        </div>
        <div class="categorie-area">
            <div class="container-fluid p-0">
                <div class="row g-0 justify-content-center">

                    @foreach($categories as $cat)
                        <x-partials.category-card :cat="$cat"  />
                    @endforeach
                </div>
            </div>
        </div>





        <div class="shop-area pt-160 pb-160">
            <div class="container">

                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div id="shop-categorie-1" class="tab-pane active ">
                                <div class="shop-top-bar">
                                    <div class="shop-top-bar-left">
                                        <div class="shop-tab nav">
                                            <a href="#shop-1" class="active" data-bs-toggle="tab"><img class="inject-me" src="{{ asset('assets/images/icon-img/shop-grid.svg') }}" alt=""></a>
{{--                                            <a href="#shop-2" data-bs-toggle="tab"><img class="inject-me" src="assets/images/icon-img/shop-list.svg" alt=""></a>--}}
                                        </div>
                                    </div>
                                    <div class="shop-top-bar-right">
                                        <div class="shop-page-list">
                                            <ul>
                                                <li>Show</li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">6</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content pt-30">

                                    {{-- TAB position 1 => woman        --}}
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row">
                                            @foreach($products as $product)
                                                <x-shop.product-card-item :product="$product" />
                                            @endforeach


                                        </div>
                                    </div>

                                    <div class="pro-pagination-style text-center mt-50">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- SIDEBAR  --}}
                    <div class="col-lg-3">
                        <div class="shop-sidebar-style">
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Subcategories</h4>
                                <div class="sidebar-widget-categori mt-45 mb-70">
                                    <ul>
                                        <li><a href="#" class="active">All</a> </li>
                                        @foreach($categories as $cat)
                                            <li><a href="/shop?category={{$cat->id}}">{{ $cat->name }}</a> </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>





                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Price Range</h4>
                                <div class="price-filter mt-55 mb-65">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <span>Price: </span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Filter By Brand</h4>
                                <div class="sidebar-widget-brand-logo mt-50">
                                    <ul>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-1.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-2.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-3.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-6.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-5.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/brand-logo/brand-logo-4.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-main-layout>
