<x-layout>
    <section class="category-page section">
        <div class="container mt-5">
            <div class="row">
                {{-- Sidebar --}}
                <x-sidebar />
                {{-- End of Sidebar --}}
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">
                            <div class="col-12">

                                {{-- Grid Topbar --}}
                                <x-grid-topbar />
                                {{-- End Gride Topbar --}}

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                        aria-labelledby="nav-grid-tab">
                                        <div class="row">
                                            {{-- Ad Cards --}}

                                            @foreach ($ads as $ad)
                                                <x-ad-card :ad="$ad"></x-ad-card>
                                            @endforeach

                                            {{-- End Add Cards --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pagination -->
                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!--/ End Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                        aria-labelledby="nav-list-tab">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-2.jpg"
                                                                        alt="#"></a>
                                                                <i class="cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Others</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Travel Kit</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>San Francisco</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$580.00</li>
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-3.jpg"
                                                                        alt="#"></a>
                                                                <i class="cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Electronic</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Nikon DSLR Camera</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Alaska, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$560.00</li>
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-1.jpg"
                                                                        alt="#"></a>
                                                                <i class="cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Mobile</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Apple Iphone X</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Boston</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$890.00</li>
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-4.jpg"
                                                                        alt="#"></a>
                                                                <i class="cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Furniture</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Poster Paint</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Las Vegas</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$85.00</li>
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-6.jpg"
                                                                        alt="#"></a>
                                                                <i class="cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge rent">Rent</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Books &
                                                                    Magazine</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Story Book</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>New York, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$120.00</li>
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pagination -->
                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!--/ End Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
