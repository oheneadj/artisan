 <div class="dashboard-sidebar">
     <div class="user-image">
         <img src="{{ asset('assets/images/dashboard/user-image.jpg') }}" alt="#">
         <h3>{{ auth()->user()->name }}
             <span><a href="javascript:void(0)">{{ '@' . auth()->user()->username }}</a></span>
         </h3>
     </div>
     <div class="dashboard-menu">
         <ul>
             <li><a class="@if (Route::current()->getName() == 'dashboard') {{ 'active' }} @endif"
                     href="{{ route('dashboard') }}"><i class="lni lni-dashboard"></i> Dashboard</a></li>
             <li><a class="@if (Route::current()->getName() == 'profile') {{ 'active' }} @endif" href="{{ route('profile') }}"><i
                         class="lni lni-pencil-alt"></i>Profile</a>
             </li>
             <li><a class="@if (Route::current()->getName() == 'show.shops') {{ 'active' }} @endif"
                     href="{{ route('user.shop') }}"><i class="lni lni-printer"></i>My Shop</a></li>
             <li><a class="@if (Route::current()->getName() == 'my.ads') {{ 'active' }} @endif"
                     href="{{ route('my.ads') }}"><i class="lni lni-bolt-alt"></i> My Ads</a></li>
             <li><a class="@if (Route::current()->getName() == 'ads.favourites') {{ 'active' }} @endif"
                     href="{{ route('ads.favourites') }}"><i class="lni lni-heart"></i> Favourite ads</a></li>
             <li><a class="@if (Route::current()->getName() == 'ad.create') {{ 'active' }} @endif"
                     href="{{ route('ad.create') }}"><i class="lni lni-circle-plus"></i> Post An
                     Ad</a></li>
             <li><a class="@if (Route::current()->getName() == 'ads.bookmarked') {{ 'active' }} @endif"
                     href="{{ route('ads.bookmarked') }}"><i class="lni lni-bookmark"></i> Bookmarked</a></li>
             <li><a class="@if (Route::current()->getName() == 'messages') {{ 'active' }} @endif"
                     href="{{ route('messages') }}"><i class="lni lni-envelope"></i> Messages</a></li>
             <li><a href=""><i class="lni lni-trash"></i> Close account</a></li>

         </ul>
         <div class="button">
             <a class="btn" href="javascript:void(0)">Logout</a>
         </div>
     </div>
 </div>
