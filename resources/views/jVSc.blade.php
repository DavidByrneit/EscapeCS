@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">@lang('javavc.javavc')<div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('javavc.homepage')</a></div>
                </h4>

                <div class="card-body">


                    <strong>@lang('javavc.text1')</strong><br>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>C</th>
                                <th>Java</th>
                            </tr>
                        </thead>
                        @lang('javavc.tablebody')
                    </table>
                    @endsection