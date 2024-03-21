@extends('admin.layouts.masterAdminAuth')


@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('admin.Reset Password') }}</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.resetPassword.send') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('admin.Email') }}</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                        autofocus value="{{ @request()->email }}">
                    <input id="email" type="hidden" class="form-control" name="token" tabindex="1" required
                        autofocus value="{{ $token }}">
                    @error('email')
                        <code>{{ $message }}</code>
                    @enderror
                    <div class="invalid-feedback">
                        {{ __('admin.Please fill in your email') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('admin.Password') }}</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="1" required
                        autofocus>
                    @error('password')
                        <code>{{ $message }}</code>
                    @enderror
                    <div class="invalid-feedback">
                        {{ __('admin.Please fill in your password') }}
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('admin.Confirmation Password') }}</label>
                    <input id="password" type="password" class="form-control" name="password_confirmation" tabindex="1"
                        required autofocus>
                    <div class="invalid-feedback">
                        {{ __('admin.Please fill in your confirmation password') }}
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('admin.Save') }}
                    </button>
                </div>
            </form>


        </div>
    </div>

    <div class="simple-footer">
        {{ __('admin.Copyright') }} &copy; {{ __('admin.WebSolutionUs 2023') }}
    </div>
@endsection
