<x-layout>
    <x-breadcrumbs :message="$page_title" />
    <x-user-layout>
        <!-- Start Profile Settings Area -->
        <div class="dashboard-block profile-settings-block mt-0">
            <h3 class="block-title">Profile Settings</h3>
            <div class="inner-block">
                <div class="image">
                    <img src="{{ auth()->user()->gender === 'male' ? asset('assets/images/man-default.png') : asset('assets/images/woman-default.png') }}"
                        alt="{{ auth()->user()->name }}">
                </div>
                <form class="profile-setting-form" method="post"
                    action="{{ route('update.profile', auth()->user()->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input name="full_name" value="{{ old('full_name') ?? auth()->user()->name }}"
                                    type="text">
                                @error('full_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Username*</label>
                                <p class="green">{{ auth()->user()->username }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Gender*</label>
                                <p>{{ auth()->user()->gender }}</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Location*</label>
                                <input name="location" type="text"
                                    value="{{ old('location') ?? auth()->user()->location }}">
                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Phone Number*</label>
                                <input name="phone" value="{{ old('phone_number') ?? auth()->user()->phone_number }}"
                                    type="text">
                                @error('phone_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="email" type="email"
                                    value="{{ old('email') ?? auth()->user()->email }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group upload-image">
                                <label>Profile Image*</label>
                                <input name="profile-image" type="file" placeholder="Upload Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Card Type*</label>
                                <div class="selector-head">
                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                    <select name="card_type" class="user-chosen-select">
                                        <option value="none">Select a card type for verification
                                        </option>
                                        <option value="Ghana Card">Ghana Card
                                        </option>
                                        <option value="Voters ID">Voters ID
                                        </option>
                                        <option value="Passport">Passport
                                        </option>
                                        <option value="GH-Card">Driver's License
                                        </option>
                                    </select>
                                </div>
                                @error('card_type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Card Number*</label>
                                <input type="text" name="card_number"
                                    value="{{ old('card_number') ?? auth()->user()->card_number }}">
                                @error('card_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <small class="red mb-4">If you fail to provide a valid card for verification, your
                            account
                            will be
                            marked as
                            unverified. Any transaction you engage in will be marked as suspicious because your
                            identity is
                            not known.</small>
                        <div class="col-12">
                            <div class="form-group button mb-0">
                                <button type="submit" class="btn">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Profile Settings Area -->
        <!-- Start Password Change Area -->
        <div class="dashboard-block password-change-block">
            <h3 class="block-title">Change Password</h3>
            <div class="inner-block">
                <form class="default-form-style" method="post" action="profile-settings.html#">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Current Password*</label>
                                <input name="current-password" type="password" placeholder="Enter old password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>New Password*</label>
                                <input name="new-password" type="password" placeholder="Enter new password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Retype Password*</label>
                                <input name="retype-password" type="password" placeholder="Retype password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group button mb-0">
                                <button type="submit" class="btn">Update Password</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Password Change Area -->
    </x-user-layout>
</x-layout>
