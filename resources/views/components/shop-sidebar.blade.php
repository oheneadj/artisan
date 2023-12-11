 <div class="dashboard-sidebar">
     <div class="user-image">
         <img src="{{ isset($shop->logo) ? asset('images/' . $shop->logo) : asset('assets/images/shop-default.png') }}"
             alt="#">
         <h3>{{ $shop->name }}
             <span style="color: rgb(173, 173, 173)">{{ '@' . $shop->slug }}</span>
         </h3>
     </div>
     <div class="dashboard-menu">
         <ul>
             <li><i class="lni lni-timer dark"></i> <span class="dark"> Date Joined:</span>
                 {{ $shop->created_at->toFormattedDateString() }}</li>
             <li><i class="lni lni-phone dark"></i> <span class="dark"> Phone:</span> {{ $shop->phone_number }}</li>
             <li><i class="lni lni-map-marker dark"></i> <span class="dark"> Location:</span> {{ $shop->location }}
             </li>
             <li><i class="lni lni-certificate red"></i> <span class="red"> Status: Not Verified</span>
             </li>
             <li>
                 <div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas"
                         src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                         frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                         href="https://putlocker-is.org"></a><br>
                     <style>
                         .mapouter {
                             position: relative;
                             text-align: right;
                             height: 300px;
                             width: 100%;
                         }
                     </style><a href="https://www.embedgooglemap.net">google map code for
                         website</a>
                     <style>
                         .gmap_canvas {
                             overflow: hidden;
                             background: none !important;
                             height: 300px;
                             width: 100%;
                         }
                     </style>
                 </div>
             </li>
         </ul>

     </div>
 </div>
