<x-layout>
    <section class="login section mt-20">
        <div class="container mt-10">
            <div class="row mt-10">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head mt-10">
                        <h4 class="title">Login</h4>
                        @error('email')
                            <p class="red m-4 text-center">{{ $message }}</p>
                        @enderror
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="phone_number" value="{{ old('phone_number') }}" type="text"
                                    placeholder="Eg. 024xxxxxxxxx" required>
                                @error('phone_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" value="{{ old('password') }}" type="password" placeholder="">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto"
                                                id="exampleCheck1">
                                            <label class="form-check-label">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <a href="{{ route('forgot-password') }}" class="lost-pass">Lost your
                                            password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Login Now</button>
                            </div>
                            {{-- <div class="alt-option">
                                <span>Or</span>
                            </div>
                            <div class="socila-login">
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i
                                                class="lni lni-facebook-original"></i>Login With
                                            Facebook</a></li>
                                    <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Login
                                            With Google
                                            Plus</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <p class="outer-link">Don't have an account? <a href="{{ route('register') }}">Register
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
