 <div class="dashboard-sidebar">
     <div class="user-image">
         <img src="assets/images/dashboard/user-image.jpg" alt="#">
         <h3>Steve Aldridge
             <span><a href="javascript:void(0)">@username</a></span>
         </h3>
     </div>
     <div class="dashboard-menu">
         <ul>
             <li><a href="{{ route('dashboard') }}"><i class="lni lni-dashboard"></i> Dashboard</a></li>
             <li><a href="{{ route('edit.profile') }}"><i class="lni lni-pencil-alt"></i> Edit Profile</a>
             </li>
             <li><a href="{{ route('ads') }}"><i class="lni lni-bolt-alt"></i> My Ads</a></li>
             <li><a href="{{ route('ads.favourites') }}"><i class="lni lni-heart"></i> Favourite ads</a></li>
             <li><a class="active" href="{{ route('ad.create') }}"><i class="lni lni-circle-plus"></i> Post An
                     Ad</a></li>
             <li><a href="{{ route('ads.bookmarked') }}"><i class="lni lni-bookmark"></i> Bookmarked</a></li>
             <li><a href="{{ route('messages') }}"><i class="lni lni-envelope"></i> Messages</a></li>
             <li><a href=""><i class="lni lni-trash"></i> Close account</a></li>
             <li><a href=""><i class="lni lni-printer"></i> Invoice</a></li>
         </ul>
         <div class="button">
             <a class="btn" href="javascript:void(0)">Logout</a>
         </div>
     </div>
 </div>
