@extends('admin.layouts.masterAdminAuth')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('auth.forgotPassword') }}</h4>
        </div>

        <div class="card-body">
            <p class="text-muted">{{ __('auth.sendLink') }}</p>

            <br>
            @if (session()->has('success'))
                <i><b>{{ session()->get('success') }}</b></i>
            @endif
            <form method="POST" action="{{ route('admin.forgotPassword.send') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                        autofocus>
                </div>
                @error('email')
                    <code>
                    < @enderror <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            {{ __('auth.forgotPassword') }}
                        </button>
        </div>
        </form>
    </div>
    <div class="simple-footer">
        Copyright &copy; Stisla 2018
    </div>
@endsection
