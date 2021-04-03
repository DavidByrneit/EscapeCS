@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">@lang('decomposition.decomposition')<div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('decomposition.homepage')</a></div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @lang('decomposition.text1')

                    @lang('decomposition.text2')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection