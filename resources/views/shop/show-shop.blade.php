<x-layout>
    <x-breadcrumbs :message="$page_title" />
    <x-shop-layout :shop="$shop">

        <div class="row">
            <div class="col-12">
                {{-- Grid Topbar --}}
                <x-shop-topbar :ads="$ads" />
                {{-- End Gride Topbar --}}

                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                    <div class="row">
                        {{-- Ad Cards --}}
                        @foreach ($ads as $ad)
                            <x-ad-card-grid :ad="$ad" />
                        @endforeach
                        {{-- End Add Cards --}}
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Pagination -->
                            <div class="pagination left">
                                {{ $ads->links() }}

                            </div>
                            <!--/ End Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-shop-layout>
</x-layout>
