<section class="dashboard section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- Start Dashboard Sidebar -->
                <x-shop-sidebar :shop="$shop" />
                <!-- Start Dashboard Sidebar -->
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="main-content">
                    <!-- Start Post Ad Block Area -->
                    {{ $slot }}
                    <!-- End Post Ad Block Area -->
                </div>
            </div>
        </div>
    </div>
</section>
