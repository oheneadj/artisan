 <div class="col-lg-4 col-md-6 col-12">
     <!-- Start Single Item -->


     <div class="single-item-grid">

         <div class="image">
             <a href="{{ route('ad.single', $ad->slug) }}">
                 <img class="image-card" src="/images/{{ $ad->image->first()->name }}" alt="{{ $ad->name }}">
             </a>
             @if($ad->sale === 1)
                 <i class="cross-badge lni lni-bolt"></i>
                 <span class="flat-badge sale">Sale</span>
             @endif

         </div>

         <div class="content">
             <a href="{{ route('show.shops', $ad->shop->slug) }}" class="tag">{{ $ad->shop->name }}</a>
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
     <!-- End Single Item -->
 </div>
