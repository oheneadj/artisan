 <header class="header navbar-area">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-12">
                 <div class="nav-inner">
                     <nav class="navbar navbar-expand-lg">
                         <a class="navbar-brand" href="index.html">
                             <img src="assets/images/logo/logo.svg" alt="Logo">
                         </a>
                         <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                             aria-expanded="false" aria-label="Toggle navigation">
                             <span class="toggler-icon"></span>
                             <span class="toggler-icon"></span>
                             <span class="toggler-icon"></span>
                         </button>
                         <div class="navbar-collapse sub-menu-bar collapse" id="navbarSupportedContent">
                             <ul id="nav" class="navbar-nav ms-auto">
                                 <li class="nav-item">
                                     <a href="{{ route('home') }}" aria-label="Toggle navigation"
                                         class="@if (Route::current()->getName() == 'home') {{ 'active' }} @endif">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('home') }}" aria-label="Toggle navigation"
                                         class="@if (Route::current()->getName() == 'home') {{ 'active' }} @endif">All
                                         Shops</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('about') }}" aria-label="Toggle navigation"
                                         class="@if (Route::current()->getName() == 'about') {{ 'active' }} @endif">About</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('faq') }}" aria-label="Toggle navigation"
                                         class="@if (Route::current()->getName() == 'faq') {{ 'active' }} @endif">Faq</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('contact-us') }}" aria-label="Toggle navigation"
                                         class="@if (Route::current()->getName() == 'contact-us') {{ 'active' }} @endif">Contact</a>
                                 </li>
                             </ul>
                         </div> <!-- navbar collapse -->
                         <div class="login-button">
                             <ul>
                                 <li>
                                     <a href="{{ route('login') }}"><i class="lni lni-enter"></i> Login</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('register') }}"><i class="lni lni-user"></i> Register</a>
                                 </li>
                             </ul>
                         </div>
                         <div class="button header-button">
                             <a href="" class="btn">Post an Ad</a>
                         </div>
                     </nav> <!-- navbar -->
                 </div>
             </div>
         </div> <!-- row -->
     </div> <!-- container -->
 </header>