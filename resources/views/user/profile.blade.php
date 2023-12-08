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
                <form class="profile-setting-form" method="post" action="profile-settings.html#">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <p>{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Username*</label>
                                <p class="green">{{ '@' . auth()->user()->username }}</p>
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
                                <label>Card*</label>
                                @if (auth()->user()->card_type === null)
                                    <p class="red">Unverified</p>
                                @else
                                    <p class="dark">{{ auth()->user()->card_type }}
                                        Number:{{ auth()->user()->card_number }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group upload-image">
                                <label>Phone Number*</label>
                                <p>{{ auth()->user()->phone_number }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <p>{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Joined Since*</label>
                                <p>{{ auth()->user()->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group button mb-0">
                                <a href="{{ route('show.profile', auth()->user()->username) }}" class="btn">Edit
                                    Profile</a>
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
