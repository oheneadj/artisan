<x-layout>
    <x-breadcrumbs :message="$page_title" />
    <x-user-layout>
        <div class="dashboard-block mt-0">
            <h3 class="block-title">Edit Your <b>{{$shop->name}}</b></h3>
            <div class="inner-block">
                <!-- Start Post Ad Tab -->
                <div class="post-ad-tab">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel"
                             aria-labelledby="nav-item-info-tab">
                            <!-- Start Post Ad Step One Content -->
                            <div class="step-two-content">
                                <form class="default-form-style" method="post" action="{{ route('update.shop', $shop->slug) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Shop Name</label>
                                                <input name="name" value="{{ old('name') ?? $shop->name}}" type="text"
                                                       placeholder="Enter Shop name">
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Shop Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10">{{ old('description') ?? $shop->description }}</textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Shop Location</label>
                                                <input name="location" value="{{ old('location') ?? $shop->location }}" type="text"
                                                       placeholder="Enter Shop Location">
                                                @error('location')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input name="phone_number" value="{{ old('phone_number') ?? $shop->phone_number }}"
                                                       type="text" placeholder="Enter Your Business Phone Number">
                                                @error('phone_number')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Certificate Number</label>
                                                <input name="certificate_number" value="{{ old('certificate_number') ?? $shop->certificate_number }}"
                                                       type="text" placeholder="Enter Your Business certificate number">
                                                @error('certificate_number')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Select Shop Type*</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select name="shop_type" class="user-chosen-select">
                                                        <option value="">Select an option
                                                        </option>
                                                        <option value="hair dresser">Hair Dresser</option>
                                                        <option value="tailor">Tailor</option>
                                                    </select>
                                                    @error('shop_type')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="mb-2">Upload Shop image*</label>
                                            <div class="upload-input">
                                                <input type="file" id="upload" name="image"
                                                       value="{{ old('image') }}">
                                                <label for="upload" class="content text-center">
                                                    <span class="text">
                                                        <span class="d-block mb-15">Drop file anywhere to Upload</span>
                                                        <span class="mb-15 plus-icon"><i
                                                                class="lni lni-plus"></i></span>
                                                        <span class="main-btn d-block btn-hover">Select
                                                            File</span>
                                                        <span class="d-block">Maximum upload file size
                                                            10Mb</span>
                                                    </span>
                                                </label>

                                            </div>
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label class="video-label">Video Link* <span>Input only
                                                        YouTube &amp; Vimeo</span></label>
                                                <input name="video" type="text" placeholder="Input link"
                                                       value="{{ old('video') }}">
                                                @error('video')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0 mt-3">
                                                <button type="submit" class="btn">Update My Shop</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Post Ad Step One Content -->
                        </div>
                    </div>
                </div>

                <!-- End Post Ad Tab -->
            </div>
        </div>
    </x-user-layout>
</x-layout>
