<div class="col-lg-3 col-md-4 col-12">
    <div class="category-sidebar">
        <!-- Start Single Widget -->
        <div class="single-widget search">
            <h3>Search Fashion</h3>
            <form action="item-listing-grid.html#">
                <input type="text" placeholder="Search Here...">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
            </form>
        </div>
        <!-- End Single Widget -->
        <!-- Start Single Widget -->
        <div class="single-widget d-none d-md-block">
            <h3>All Categories</h3>
            <ul class="list">

                @foreach ($categories as $category)
                    @if ($category->ad->count() > 0)
                        <li>
                            <a href="{{ route('category.show', $category->slug) }}"><i
                                    class="{{ $category->icon }}"></i>
                                {{ $category->name }}<span>{{ $category->ad->count() }}</span></a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
        <!-- End Single Widget -->
        <!-- Start Single Widget -->
        <div class="single-widget range d-none d-md-block">
            <h3>Price Range</h3>
            <input type="range" class="form-range" name="range" step="1" min="100" max="10000"
                value="10" onchange="rangePrimary.value=value">
            <div class="range-inner">
                <label>$</label>
                <input type="text" id="rangePrimary" placeholder="100" />
            </div>
        </div>
        <!-- End Single Widget -->
        <!-- Start Single Widget -->
        <div class="single-widget condition d-none d-md-block">
            <h3>Condition</h3>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-check-label" for="flexCheckDefault1">
                    All
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                    New
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">
                    Used
                </label>
            </div>
        </div>
        <!-- End Single Widget -->
        <!-- Start Single Widget -->
        <div class="single-widget banner d-none d-md-block">
            <h3>Advertisement</h3>
            <a href="javascript:void(0)">
                <img src="assets/images/banner/banner.jpg" alt="#">
            </a>
        </div>
        <!-- End Single Widget -->
    </div>
</div>
