<div class="col-lg-12 col-md-12 col-12">
    <!-- Start Single Item -->
    <div class="single-item-grid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-7 col-12">
                <div class="image">
                    <a href="{{ route('ad.single', $ad->slug) }}"><img class="image-card" height="250" src="/images/{{$ad->image->first()->name}}" alt="#"></a>
                    <i class="cross-badge lni lni-bolt"></i>
                    <span class="flat-badge rent">Sale</span>
                </div>
            </div>
            <div class="col-lg-7 col-md-5 col-12">
                <div class="content">
                    <a href="javascript:void(0)" class="tag">{{ $ad->shop->name }}</a>
                    <h3 class="title">
                        <a href="{{ route('ad.single', $ad->slug) }}">{{ $ad->name }}</a>
                    </h3>
                    <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                            </i>{{ $ad->shop->location }}</a></p>
                    <ul class="info">
                        <li class="price">GH₵{{ $ad->price }}</li>
                        <li class="like"><a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Item -->
</div>
