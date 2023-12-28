<div class="mobile-footer d-sm-none d-flex justify-content-evenly">
    <a href="{{route('home') }}"><div class="d-flex flex-column">
            <i class="lni lni-home"></i>
            <span class="text-muted  mt-2">Home</span>
        </div>
    </a>
    <a href="{{ route('ad.create') }}">
        <div class="d-flex flex-column">
            <i class="lni lni-circle-plus"></i>
            <span class="text-muted  mt-2">Create Ad</span>
        </div>
    </a>
    @if (isset(auth()->user()->shop))
    <a href="{{ route('user.shop') }}">
        <div class="d-flex flex-column">
            <i class="lni lni-cart-full"></i>
            <span class="text-muted  mt-2">My Shop</span>
        </div>
    </a>
    @endif
    <a href="{{ route('profile') }}">
        <div class="d-flex flex-column">
            <i class="lni lni-user"></i>
            <span class="text-muted mt-2">Profile</span>
        </div>
    </a>
</div>
