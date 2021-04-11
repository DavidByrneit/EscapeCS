@extends('layouts.app')
<style>
    #response {
        color: blueviolet
    }

    
    input[type=text] {
            margin: 5px 0;
            
            background-color: rgb(235, 235, 235);
        }
    
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header"> {{__('assembler.assemblertitle')  }}
                    <div class="float-md-right">
                        <a href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('logic.home')</a>
                    </div>
                </h4>
                @include('layouts.flash-message')
                 
                <div class="card-body">
                    <h5 class="card-title">{{ __('assembler.assemblerprogram') }}</h5>
                    @lang('assembler.text1')
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <br><br>
                    <table>
                    <tr>
                    <td valign="top">
                    
                    {{ Form::open(array('route' => array('assemblerPA',app()->getLocale()))) }}
                    1. LDA A #$ {{ Form::text('inputvalue1','?????') }}<br>
                    <div id="response">{{ $result['response1'] ?? '' }}</div>
                    2. LDA B #$2<br>
                    3. ABA<br>
                    4. STA A #$001A<br><br><br>
                    {{ __('assembler.question') }}<br>
                    <br>
                    <div id="response">{{ $result['response2'] ?? '' }}</div>
                    {{ Form::text('inputvalue2','?????') }}
                    {{ Form::submit(Lang::get('assembler.clickme')) }}
                    {{ Form::close()}}
                    
                    </td>
                    <td valign="top">
                    <img src="{{ URL::to('/img/MC6800_Processor_Diagram.png') }}" width="500" height="300"><br>
                    </td>
                    </table>
                    <br>
                   
                    <br>

                    <a class="btn btn-primary" href="{{ route('instructionset',app()->getLocale()) }}"
                        role="button">@lang('assembler.instructionset')</a>
                        <br>
                        <br>
                    <table class="table" id="maxitable">
                        <colgroup>
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                        </colgroup>
                        <tbody>
                            <tr>
                                <td rowspan="2">LDA</td>
                                <td>LDA A #data</td>
                                <td rowspan="2">
                                @lang('assembler.instruction1')</td>
                            </tr>
                            <tr>
                                <td>LDA B #data</td>
                            </tr>
                            <tr>
                                <td rowspan="1">ABA</td>
                                <td>[A] &larr; [A] + [B]</td>
                                <td rowspan="1">@lang('assembler.instruction2')</td>
                            </tr>
                            <tr>
                                <td rowspan="2">STA</td>
                                <td>[address] &larr; [A]</td>
                                <td rowspan="2">@lang('assembler.instruction3')</td>
                            </tr>
                        </tbody>
                    </table>
                    @endsection