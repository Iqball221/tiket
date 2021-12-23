@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('admin')
                    <p>this is visible to users with the admin role. Gets translated to\Laratrust::hashRole('admin')</p>
                    @endrole

                    @role('pengguna')
                    <p>this is visible to users with the pengguna role. Gets translated to\Laratrust::hashRole('pengguna')</p>
                    @endrole
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
