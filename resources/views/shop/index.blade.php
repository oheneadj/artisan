<x-layout>
    <x-breadcrumbs :message="$page_title" />
    <x-user-layout>
        <div class="dashboard-block mt-0">
            <h3 class="block-title">Your Shop</h3>
            <div class="inner-block">
                <!-- Start Post Ad Tab -->
                @if($shop !== null)
                   <div class="post-ad-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-item-info-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-item-info" type="button" role="tab"
                                aria-controls="nav-item-info" aria-selected="true">
                                <span class="serial">01</span>
                                Step
                                <span class="sub-title">Shop Information</span>
                            </button>
                            <button class="nav-link" id="nav-item-details-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-item-details" type="button" role="tab"
                                aria-controls="nav-item-details" aria-selected="false">
                                <span class="serial">02</span>
                                Step
                                <span class="sub-title">Ad Details</span>
                            </button>
                            <button class="nav-link" id="nav-user-info-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-user-info" type="button" role="tab"
                                aria-controls="nav-user-info" aria-selected="false">
                                <span class="serial">03</span>
                                Step
                                <span class="sub-title">User Information</span>
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel"
                            aria-labelledby="nav-item-info-tab">
                            <!-- Start Post Ad Step One Content -->
                            <div class="step-one-content">
                                <form class="default-form-style" method="post" action="post-item.html#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Shop Name*</label>
                                                <p>{{$shop->name}}</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Shop Location*</label>
                                               <p>{{$shop->location}}</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Verification Status*</label>
                                                @if($shop->verified == null)
                                               <span class="badge bg-danger">Not Verified</span>
                                                <a href="#" class="outer-link">Click here to veify your shop</a>
                                               @else
                                               <span class="badge bg-success">Verified</span>
                                              
                                               @endif
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Category*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select a Category
                                                        </option>
                                                        <option value="none">Mobile Phones</option>
                                                        <option value="none">Electronics</option>
                                                        <option value="none">Computers</option>
                                                        <option value="none">Headphones</option>
                                                        <option value="none">Furnitures</option>
                                                        <option value="none">Books</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="submit" class="btn">Next
                                                    Step</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Post Ad Step One Content -->
                        </div>
                        <div class="tab-pane fade" id="nav-item-details" role="tabpanel"
                            aria-labelledby="nav-item-details-tab">
                            <!-- Start Post Ad Step Two Content -->
                            <div class="step-two-content">
                                <form class="default-form-style" method="post" action="post-item.html#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Add Price*</label>
                                                <input name="price" type="text" placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Price Type*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select an option
                                                        </option>
                                                        <option value="none">Fixed</option>
                                                        <option value="none">Price On Call</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Select Currency*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select an option
                                                        </option>
                                                        <option value="none">Dollar</option>
                                                        <option value="none">Euro</option>
                                                        <option value="none">Rupee</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="upload-input">
                                                <input type="file" id="upload" name="upload">
                                                <label for="upload" class="content text-center">
                                                    <span class="text">
                                                        <span class="d-block mb-15">Drop files anywhere
                                                            to Upload</span>
                                                        <span class="mb-15 plus-icon"><i
                                                                class="lni lni-plus"></i></span>
                                                        <span class="main-btn d-block btn-hover">Select
                                                            File</span>
                                                        <span class="d-block">Maximum upload file size
                                                            10Mb</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="video-label">Video Link* <span>Input only
                                                        YouTube &amp; Vimeo</span></label>
                                                <input name="video" type="text" placeholder="Input link">
                                                <a href="javascript:void(0)" class="add-video"><i
                                                        class="lni lni-plus"></i> Add Video</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mt-30">
                                                <label>Ad Description*</label>
                                                <textarea name="message" placeholder="Input ad description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Type of Ad*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select an option
                                                        </option>
                                                        <option value="none">Option 1</option>
                                                        <option value="none">Option 2</option>
                                                        <option value="none">Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Item Condition*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select an option
                                                        </option>
                                                        <option value="none">Used</option>
                                                        <option value="none">Brand New</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="tag-label">Tags* <span>Comma(,)
                                                        separated</span></label>
                                                <input name="tag" type="text" placeholder="Type Product tag">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="submit" class="btn alt-btn">Previous</button>
                                                <button type="submit" class="btn">Next
                                                    Step</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Post Ad Step Two Content -->
                        </div>
                        <div class="tab-pane fade" id="nav-user-info" role="tabpanel"
                            aria-labelledby="nav-user-info-tab">
                            <!-- Start Post Ad Step Three Content -->
                            <div class="step-three-content">
                                <form class="default-form-style" method="post" action="post-item.html#">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Name*</label>
                                                <input name="name" type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Mobile Numbe*</label>
                                                <input name="number" type="text"
                                                    placeholder="Enter mobile number">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Country*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select a Country
                                                        </option>
                                                        <option value="none">Afghanistan</option>
                                                        <option value="none">America</option>
                                                        <option value="none">Albania</option>
                                                        <option value="none">Bangladesh</option>
                                                        <option value="none">Brazil</option>
                                                        <option value="none">India</option>
                                                        <option value="none">South Africa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Select City*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select City</option>
                                                        <option value="none">New York</option>
                                                        <option value="none">Los Angeles</option>
                                                        <option value="none">Chicago</option>
                                                        <option value="none">San Diego</option>
                                                        <option value="none">San Jose</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Select State*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select">
                                                        <option value="none">Select State</option>
                                                        <option value="none">New York</option>
                                                        <option value="none">Texas</option>
                                                        <option value="none">Arizona</option>
                                                        <option value="none">Florida</option>
                                                        <option value="none">Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Address*</label>
                                                <input name="address" type="text" placeholder="Enter a location">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="google-map">
                                                <div class="mapouter">
                                                    <div class="gmap_canvas"><iframe width="100%" height="300"
                                                            id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0"
                                                            marginwidth="0"></iframe><a
                                                            href="https://123movies-to.org"></a><br>
                                                        <style>
                                                            .mapouter {
                                                                position: relative;
                                                                text-align: right;
                                                                height: 300px;
                                                                width: 100%;
                                                            }
                                                        </style><a href="https://www.embedgooglemap.net">embed
                                                            google maps wordpress</a>
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
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree to all Terms of Use &amp; Posting Rules
                                                </label>
                                            </div>
                                            <div class="form-group button mb-0">
                                                <button type="submit" class="btn alt-btn">Previous</button>
                                                <button type="submit" class="btn">Submit
                                                    Ad</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Post Ad Step Three Content -->
                        </div>
                    </div>
                </div>
                @else
                <div class='d-flex justify-content-center'> 
                    <div class="button">
                        <a href="{{route('create.shop')}}" class="btn">Create a Shop</a>             
                    </div>
                </div>
                @endif
                <!-- End Post Ad Tab -->
            </div>
        </div>
    </x-user-layout>
</x-layout>
