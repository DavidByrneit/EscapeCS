@extends('layouts.app')
<style>
    #response {
        color: blueviolet
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header"> {{__('Machine Code - Assembler')  }}
                    <div class="float-md-right">
                        <a href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('logic.home')</a>
                    </div>
                </h4>

                <div class="card-body">
                    <h5 class="card-title">{{ __('Machine code Program') }}</h5>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                    echo Form::open(array('route' => array('assemblerPA',app()->getLocale()))); ?>
                    1. LDA A #$<?php echo Form::text('inputvalue1'); ?><br>
                    <div id="response">{{ $result['response1'] ?? '' }}</div>
                    2. LDA B #$2<br>
                    3. ABA<br>
                    4. STA A #$001A<br>
                    {{ __('So what is the Content at memory #$001a ?') }}<br>
                    <div id="response">{{ $result['response2'] ?? '' }}</div>
                    <?php echo Form::text('inputvalue2');

                    echo Form::submit(Lang::get('logic.clickme'));

                    echo Form::close()
                    ?>

                    <img src="{{ URL::to('/img/MC6800_Processor_Diagram.png') }}"><br>

                    Machine Code is one level above Binary, and is the fastest method to execute a software program. All
                    programs are translated by compilers to machine code before execution. All computers have state
                    machine cores which have Accumulators, which is where the main mathematics takes place when doing
                    calculations
                    some are significantly more complex than others.
                    The software is written in a language called Assembler , using memonics for the machine operations
                    and hexadecimal for numbers.<br>

                    <a class="btn btn-primary" href="{{ route('instructionset',app()->getLocale()) }}"
                        role="button">Machine code Instruction Set</a>
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
                                <td rowspan="2">Load Accumulator from Memory Ex: LDA A #$25 loads the number (25)H into
                                    accumulator A</td>
                            </tr>
                            <tr>
                                <td>LDA B #data</td>
                            </tr>
                            <tr>
                                <td rowspan="1">ABA</td>
                                <td>[A] &larr; [A] + [B]</td>
                                <td rowspan="1">Add B to A</td>
                            </tr>
                            <tr>
                                <td rowspan="2">STA</td>
                                <td>[address] &larr; [A]</td>
                                <td rowspan="2">Store Accumulator in Memory</td>
                            </tr>
                        </tbody>
                    </table>
                    @endsection