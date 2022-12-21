@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="{{ asset('/') }}assets/app-assets/images/logo/logo.png"
                                            alt="branding logo">
                                        <h3 class="brand-text mt-2">RPD Shop</h3>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                        <span>Selamat datang di administrator !</span>
                                    </p>
                                    <div class="card-body">

                                        @if ($errors->has('email'))
                                            <p class="mb-2 text-danger text-sm">{{ $errors->first('email') }}</p>
                                        @endif
                                        {{-- Form Login --}}
                                        <form method="POST" action="{{ route('login.proses') }}" class="form-horizontal">

                                            {{-- token here --}}
                                            @csrf

                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Your Email" value="{{ old('email') }}" required autofocus>
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                                @if ($errors->has('email'))
                                                    <p class="text-danger text-sm">{{ $errors->first('email') }}</p>
                                                @endif
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <p class="text-danger text-sm">{{ $errors->first('password') }}</p>
                                                @endif
                                            </fieldset>
                                            <button type="submit" class="btn btn-outline-info btn-block"><i
                                                    class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
