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
                 @if($ad->sale === 1)
                     <li class="price">GH₵{{ $ad->sale_price }}</li>
                     <li class="">&nbsp; <del>GH₵{{ $ad->price }}</del></li>
                 @else
                     <li class="price">GH₵{{ $ad->price }}</li>
                 @endif

                 @auth()
                        @if(auth()->user()->id === $ad->user_id)
                             <li class="like"><a href="{{route('ad.edit', $ad->slug)}}"><i class="lni lni-pencil"></i></a>
                         @endif
                 @endauth
                    <li class="like"><a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                 </li>
             </ul>
         </div>
     </div>
     <!-- End Single Item -->
 </div>
