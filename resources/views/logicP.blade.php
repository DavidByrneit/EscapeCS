@extends('layouts.app')
<style>
    .io {
        text-align: center;
    }

    #response {
        color: blueviolet
    }
</style>
<style>
    .gridTable2 {

        display: grid;
        grid-template-columns: 30% 30%;
        grid-template-rows: auto;

    }

    .gridTable {

        display: grid;
        grid-template-columns: 30% 30% 30%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 1px solid black;
        text-align: center;
        padding: 1%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@lang('logic.logic')<div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('logic.home')</a></div>
                </div>

                <div class="card-body">

                    @include('layouts.flash-message')

                    <h1>@Lang('logic.logicpuzzle')</h1>
                    <img src="{{ URL::to('/') }}/img/Asset 3.svg" alt="">
                    <div class="io">
                        @include('layouts.flash-message')

                        <?php
                                      
                    echo Form::open(array('route' => array('logicPA',app()->getLocale())));
                    echo Form::text('inputvalue1');
                    echo Form::submit(Lang::get('logic.clickme'));

                    echo Form::close()
                    ?>
                    </div>
                    <h1>@Lang('logic.logicinfo')</h1>

                    <div class="container-fluid">
                        <table class="table">
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-6">
                                        <h2>@lang('logic.notgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9607.svg" width="200" height="100"
                                            alt="NOT Gate">
                                        <p>@lang('logic.notgate')</p>
                                        <div class="gridTable2">

                                            <div class="gridData">@lang('logic.input')</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                        </div>


                                    </td>
                                    <td class="col-6">
                                        <h2>@lang('logic.andgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9477.svg" width="200" height="100"
                                            alt="AND Gate">
                                        <p>@lang('logic.andgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-6">
                                        <h2>@lang('logic.nandgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9489.svg" width="200" height="100"
                                            alt="NAND Gate">
                                        <p>@lang('logic.nandgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                        </div>


                                    </td>
                                    <td class="col-6">
                                        <h2>@lang('logic.orgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9502.svg" width="200" height="100"
                                            alt="OR Gate">
                                        <p>@lang('logic.orgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-6">
                                        <h2>@lang('logic.orgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9502.svg" width="200" height="100"
                                            alt="OR Gate">
                                        <p>@lang('logic.orgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                        </div>

                                    </td>
                                    <td class="col-6">
                                        <h2>@lang('logic.norgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9514.svg" width="200" height="100"
                                            alt="NOR Gate">
                                        <p>@lang('logic.norgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-6">
                                        <h2>@lang('logic.xorgatename')</h2>
                                        <img src="{{ URL::to('/') }}/img/SVG/g9527.svg" width="200" height="100"
                                            alt="XOR Gate">
                                        <p>@lang('logic.xorgate')</p>
                                        <div class="gridTable">
                                            <div class="gridData">@lang('logic.input') 1</div>
                                            <div class="gridData">@lang('logic.input') 2</div>
                                            <div class="gridData">@lang('logic.output')</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">1</div>
                                            <div class="gridData">0</div>
                                        </div>
                                    </td>
                                    <td class="col-6"> </td>



                                </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection