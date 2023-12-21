 <div class="col-lg-4 col-md-6 col-12">
     <!-- Start Single Item -->


     <div class="single-item-grid single-shop-grid">
         <div class="content">
             <a href="{{ route('show.shops', $shop->slug) }}" class="tag">{{ $shop->name }}</a>
             <h3 class="title">
                 <a href="{{ route('show.shops', $shop->slug) }}">{{ $shop->name }}</a>
             </h3>
             <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                     </i>{{ $shop->location }}</a></p>

         </div>
     </div>
     <!-- End Single Item -->
 </div>
