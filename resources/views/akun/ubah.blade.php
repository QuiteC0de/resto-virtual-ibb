<head>@include('template.head')</head>

<section class="reservation-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 reservation-left">
                            <h1 class="text-white">Update Profile</h1>
                            <p class="text-white pt-20">
                                Silahkan isi data dengan benar

                            </p>
                            <a href="/pesan"><button  class="primary-btn text-uppercase mt-20">
                                    {{ __('Kembali') }}
                                </button></a>
                        </div>
                        <div class="col-lg-5 align-items-left reservation-right">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="text-danger">Ubah Profil Akun</h2>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/akun/{{$user->id }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <input type="hidden" name="role" value="{{$user->role }}" id="">
                                        <input type="hidden" name="_method" value="put" id="">

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="primary-btn text-uppercase mt-20">
                                                    {{ __('Ubah Profil') }}
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>    
                        </div>
                    </div><br>

                    <!--change pass area-->
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 reservation-left">
                                <h1 class="text-white">Ubah Password</h1>
                                <p class="text-white pt-20">
                                    Silahkan isi data dengan benar

                                </p>
                            </div>
                            <div class="col-lg-5 align-items-left reservation-right">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="text-danger">Change Pass</h2>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="/akun/{{$user->id }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password Lama') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="oldpass" value="" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password Baru') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="newpass" value="" required>
                                                </div>
                                            </div>
                                            
                                            <input type="hidden" name="_method" value="put" id="">

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="primary-btn text-uppercase mt-20">
                                                        {{ __('Ubah Password') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    <!--end change pass-->
                </div>  
</section>

@include('template.script')