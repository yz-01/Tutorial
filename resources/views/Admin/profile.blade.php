@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        Name  : {{Auth::guard('admin')->user()->name}}<br>
                        Email : {{Auth::guard('admin')->user()->email}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
