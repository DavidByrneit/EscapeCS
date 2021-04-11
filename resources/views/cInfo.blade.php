@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">C Language<div class="float-md-right"><a href="/" class="btn btn-primary" role="button">Home</a></div></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h1>Loops in C</h1>
                    <div>@lang('cinfo.info1')</div>
                    </br>
                    <div>@lang('cinfo.info2')</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
