<x-layout>
    <section class="item-details section">
        <div class="container">
            <div class="top-area mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img class="single-ad" height="350" src="/images/{{ $ad->image->first()->name }}"
                                        id="current" alt="#">
                                </div>


                                <div class="images single-ad-img">
                                    @foreach ($ad->image as $image)
                                        <img height="60" src="/images/{{ $image->name }}"
                                            class="img single-ad-thumbnail" alt="#">
                                    @endforeach
                                </div>
                            </main>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $ad->name }}</h2>
                            <p class="location"><i class="lni lni-map-marker"></i><a
                                    href="javascript:void(0)">{{ $ad->shop->location }}</a></p>
                            <h3 class="price">GH₵{{ $ad->price }}</h3>
                            <div class="list-info">
                                <h4>Informations</h4>
                                <ul>
                                    <li><span>Condition:</span> New</li>
                                    <li><span>Brand:</span> Apple</li>
                                    <li><span>Model:</span> Mackbook Pro</li>
                                </ul>
                            </div>
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        @auth
                                            <a href="tel:{{ $ad->shop->phone_number }}" class="call">
                                                <i class="lni lni-phone-set"></i>
                                                <span>Call {{ $ad->shop->phone_number }}</span>
                                            </a>
                                        @endauth
                                        @guest
                                            <a href="{{ route('login') }}" class="call">
                                                <i class="lni lni-phone-set"></i>
                                                <span>Login to reveal contact details</span>
                                            </a>
                                        @endguest
                                    </li>
                                    {{-- <li>
                                        <a href="mailto:example@gmail.com" class="mail">
                                            <i class="lni lni-envelope"></i>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="social-share">
                                <h4>Share Ad</h4>
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i
                                                class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)" class="twitter"><i
                                                class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)" class="linkedin"><i
                                                class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)" class="pinterest"><i
                                                class="lni lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-details-blocks">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12">
                        <!-- Start Single Block -->
                        <div class="single-block description">
                            <h3>Description</h3>
                            <p>{{ $ad->description }}</p>
                        </div>
                        <!-- End Single Block -->
                        <!-- Start Single Block -->
                        <div class="single-block tags">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Bike</a></li>
                                <li><a href="javascript:void(0)">Services</a></li>
                                <li><a href="javascript:void(0)">Brand</a></li>
                                <li><a href="javascript:void(0)">Popular</a></li>
                            </ul>
                        </div>
                        <!-- End Single Block -->
                        <!-- Start Single Block -->
                        @if ($ad->comment->count() != 0)
                            <div class="single-block comments">
                                <h3>Comments</h3>

                                <!-- Start Single Comment -->
                                @foreach ($ad->comment as $comment)
                                    <div class="single-comment">
                                        <img src="assets/images/testimonial/testi2.jpg" alt="#">
                                        <div class="content">
                                            <a href="#">
                                                <h4>{{ $comment->user->name }}</h4>
                                            </a>
                                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                                            <p>
                                                {{ $comment->comment }}
                                            </p>
                                            <a href="javascript:void(0)" class="reply"><i class="lni lni-reply"></i>
                                                Reply</a>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End Single Comment -->


                            </div>
                        @endif
                        <!-- End Single Block -->
                        <!-- Start Single Block -->
                        <div class="single-block comment-form">
                            <h3>Post a comment</h3>
                            @auth
                                <form action="{{ route('comment.store', $ad->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <textarea name="comment" class="form-control form-control-custom" placeholder="Your Comments"></textarea>
                                                @error('comment')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="button">
                                                <button type="submit" class="btn">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endauth

                            @guest
                                <div class="button">
                                    <a href="{{ route('login') }}" class="btn"> Login to Post a Comment</a>
                                </div>
                            @endguest
                        </div>
                        <!-- End Single Block -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="item-details-sidebar">
                            <!-- Start Single Block -->
                            <div class="single-block author">
                                <h3>Owner</h3>
                                <div class="content">
                                    <img src="assets/images/testimonial/testi3.jpg" alt="#">
                                    <h4>{{ $ad->shop->name }}</h4>
                                    <span>Member Since {{ $ad->shop->created_at->toFormattedDateString() }}</span>
                                    <a href="javascript:void(0)" class="see-all">See All Ads</a>
                                </div>
                            </div>
                            <!-- End Single Block -->
                            <!-- Start Single Block -->
                            <div class="single-block contant-seller comment-form">
                                <h3>Contact Seller</h3>
                                @auth
                                    <form action="item-details.html#" method="POST">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-box form-group">
                                                    <textarea name="#" class="form-control form-control-custom" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="button">
                                                    <button type="submit" class="btn">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endauth

                                @guest
                                    <div class="button">
                                        <a href="{{ route('login') }}" class="btn">Login to Chat Owner</a>
                                    </div>
                                @endguest

                            </div>
                            <!-- End Single Block -->
                            <!-- Start Single Block -->
                            <div class="single-block">
                                <h3>Location</h3>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                            frameborder="0" scrolling="no" marginheight="0"
                                            marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br>
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
                                </div>
                            </div>
                            <!-- End Single Block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
