@extends('layouts.app')
<style>
    pre,
    code {
        font-family: monospace, monospace;
    }

    pre {
        overflow: auto;
    }

    pre>code {
        display: block;
        padding: 1rem;
        word-wrap: normal;
    }

    input[type=text] {
    margin: 5px 0;
    
    background-color: rgb(235, 235, 235);
    }
    li.L0,
    li.L1,
    li.L2,
    li.L3,
    li.L5,
    li.L6,
    li.L7,
    li.L8 {
        list-style-type: decimal !important;
    }

    .cMemory {
        width: 50%;
        float: left;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 1px solid black;
        text-align: center;
        padding: 1%;
    }

    .code {
        width: 50%;
        float: right;
    }

    #response {
        color: blueviolet
    }
</style>
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">@lang('cprogram.cprogram')<div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('cprogram.homepage')</a>
                    </div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="cMemory">
                        


                    </div>
                    <div class="code">
                        <?php echo Form::open(array('route' => array('cPA',app()->getLocale())));?>
                        <pre class="prettyprint linenums">
                        <code>
                #include stdio.h
                int main() {
                        int x=<?php echo Form::text('inputvalue1', '?????');?>;
                        int y=9;
                        for(int i=0; i<5;i++){
                            x=x+1;
                        }
                        int answer =x+y; 

                        

                        
                }

            </code>
        </pre>
                        @lang('cprogram.question')
                        <?php
                            echo Form::text('inputvalue2', '????');
                            echo Form::submit(Lang::get('cprogram.clickme'));
                            echo Form::close();
                            ?>
                       
                        @include('layouts.flash-message')
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> @endsection