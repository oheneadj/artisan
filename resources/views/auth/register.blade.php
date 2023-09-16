<x-layout>
    <section class="login section mt-20">
        <div class="container mt-10">
            <div class="row mt-10">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head mt-10">
                        <h4 class="title">Login</h4>
                        <form action="login.html#!" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" placeholder=" Eg. Nana Adjei">
                            </div>
                            <div class="form-group">
                                <label>Telephone Number</label>
                                <input name="phone-number" type="text" placeholder="Eg. 024XXXXXXXX">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="email" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="password" type="text">
                            </div>
                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto"
                                                id="exampleCheck1">
                                            <label class="form-check-label">Agree to our <a
                                                    href="javascript:void(0)">Terms and
                                                    Conditions</a> </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Create Account</button>
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
                            <p class="outer-link">Do you have an account? <a href="{{ route('login') }}">Login
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
