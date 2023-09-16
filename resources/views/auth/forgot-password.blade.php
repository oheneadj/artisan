<x-layout>
    <section class="login section mt-20">
        <div class="container mt-10">
            <div class="row mt-10">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head mt-10">
                        <h4 class="title">Reset Password</h4>
                        <form action="login.html#!" method="post">
                            <div class="form-group">
                                <label>Enter your phone number</label>
                                <input name="phone" type="text" placeholder="Eg. 024XXXXXXX">
                            </div>

                            <div class="button">
                                <button type="submit" class="btn">Reset my password</button>
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
                            <p class="outer-link">Go back to <a href="{{ route('login') }}">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
