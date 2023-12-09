 <div class="dashboard-sidebar">
     <div class="user-image">
         <img src="{{ auth()->user()->gender === 'male' ? asset('assets/images/man-default.png') : asset('assets/images/woman-default.png') }}"
             alt="#">
         <h3>{{ auth()->user()->name }}
             <span><a href="javascript:void(0)">{{ '@' . auth()->user()->username }}</a></span>
         </h3>
     </div>
     <div class="dashboard-menu">
         <ul>
             <li><a class="@if (Route::current()->getName() == 'profile') {{ 'active' }} @endif" href="{{ route('profile') }}"><i
                         class="lni lni-pencil-alt"></i>Profile</a>
             </li>
             <li><a class="@if (Route::current()->getName() == 'ads.favourites') {{ 'active' }} @endif"
                     href="{{ route('ads.favourites') }}"><i class="lni lni-heart"></i> Favourite ads</a></li>
             <li><a class="@if (Route::current()->getName() == 'ads.bookmarked') {{ 'active' }} @endif"
                     href="{{ route('ads.bookmarked') }}"><i class="lni lni-bookmark"></i> Bookmarked</a></li>
             {{-- If user hasn't created a shop. show the link to create a shop --}}
             @if (auth()->user()->shop === null)
                 <li><a class="@if (Route::current()->getName() == 'create.shop') {{ 'active' }} @endif"
                         href="{{ route('create.shop') }}"><i class="lni lni-printer"></i>Create your shop</a></li>
             @endif
             {{-- If user has creted a shop, show the shop associated links --}}
             @if (auth()->user()->shop != null)
                 <li><a class="@if (Route::current()->getName() == 'dashboard') {{ 'active' }} @endif"
                         href="{{ route('dashboard') }}"><i class="lni lni-dashboard"></i>Shop Dashboard</a></li>
                 <li><a class="@if (Route::current()->getName() == 'show.shops') {{ 'active' }} @endif"
                         href="{{ route('user.shop') }}"><i class="lni lni-printer"></i>My Shop</a></li>
                 <li><a class="@if (Route::current()->getName() == 'my.ads') {{ 'active' }} @endif"
                         href="{{ route('my.ads') }}"><i class="lni lni-bolt-alt"></i> My Ads</a></li>
                 <li><a class="@if (Route::current()->getName() == 'ad.create') {{ 'active' }} @endif"
                         href="{{ route('ad.create') }}"><i class="lni lni-circle-plus"></i> Post An
                         Ad</a></li>
             @endif
             <li><a class="@if (Route::current()->getName() == 'messages') {{ 'active' }} @endif"
                     href="{{ route('messages') }}"><i class="lni lni-envelope"></i> Messages</a></li>
             <li><a href="#"><i class="lni lni-trash red"></i> Close account</a></li>
         </ul>
         <div class="button">
             <a class="btn" href="javascript:void(0)">Logout</a>
         </div>
     </div>
 </div>
