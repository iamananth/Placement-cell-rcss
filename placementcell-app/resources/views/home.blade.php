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
                    {{ Auth::user()->name }} {{ __(',You are logged in!') }}
                </div>
            </div>
            <div style="margin-top: 20px;" class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Details</h5>
                    <a href="{{ route('index') }}" class="btn btn-primary">Show all</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
