<x-layout>
    <section class="category-page section">
        <div class="container mt-5">
            <div class="row">
                {{-- Sidebar --}}
                <x-sidebar :categories='$categories' />
                {{-- End of Sidebar --}}
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">
                            <div class="col-12">

                                {{-- Grid Topbar --}}
                                <x-shop-grid-topbar :shops="$shops" />
                                {{-- End Gride Topbar --}}

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                         aria-labelledby="nav-grid-tab">

                                        @if($shops->count() === 0)
                                            <div class="row mt-5">
                                                <div class="col-12">
                                                    <p class="text-center"> No Shop found that matches your search query</p>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row">
                                            {{-- Ad Cards --}}
                                            @foreach ($shops as $shop)
                                                <x-shop-card-grid :shop="$shop" />
                                            @endforeach
                                            {{-- End Add Cards --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pagination -->
                                                <div class="pagination left">
                                                    {{ $shops->links() }}

                                                </div>
                                                <!--/ End Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                         aria-labelledby="nav-list-tab">
{{--                                        <div class="row">--}}
{{--                                            @foreach ($shops as $shop)--}}
{{--                                                <x-ad-card-list :ad="$shop" />--}}
{{--                                            @endforeach--}}

{{--                                        </div>--}}
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pagination -->


                                                <div class="pagination left">

                                                    {{ $shops->links() }}
                                                    {{-- <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul> --}}
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
