<head>@include('template.head')</head>


<section class="reservation-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 reservation-left">
                            <h1 class="text-white">Tambahkan Admin</h1>
                            <p class="text-white pt-20">
                                Silahkan isi data dengan benar
                            </p>
                        </div>
                        <div class="col-lg-5 align-items-left reservation-right">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-danger">Registrasi</h2>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/admin">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <input type="hidden" name="role" value="admin" id="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Akun') }}</label>

                            <div class="col-md-6">
                                <select name="role" class="form-control" id="role">
                                    <option value="admin">Admin</option>
                                    <option value="owner">Owner / Pemilik</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="primary-btn text-uppercase mt-20">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                            </div>
                            </div>    
                        </div>
                    </div>
                </div>  
</section>

@include('template.script')