@extends('layouts.app')
<style>
    #response {
        color: blueviolet
    }

    .cMemory {
        width: 100%;
        float: left;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: auto;
    }

    .gridData {
        font-size: 150%;
        border: 0px solid black;
        text-align: center;
        padding: 1%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">@lang('home.homepage')</h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h2>@lang('home.hostage')</h2>
                    <p style="font-size:15px;">@lang('home.hostageinfo')</p>

                    <p style="font-size:18px; color: red;">@lang('home.hostagestart')</p>

                    @include('layouts.flash-message')

                    <div id="response"> {{ $result ?? '' }}</div>
                    <!--
                    <br>
                    <?php echo session('puzzle'); ?>
                    <br>
                    -->

                    <div class="cMemory">
                        <div class="gridData"></div>
                        <div class="gridData">


                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                                if (session('puzzle')== 4) {
                                echo "<s>";
                                }
                            ?>
                            <a href="{{route('java',app()->getLocale())}}">@lang('home.javaprogram')</a>
                            <?php
                                if (session('puzzle') ==4) {
                                echo "</s>";
                                }
                            ?>
                        </div>

                        <div class="gridData">
                            <a href="{{route('decomp',app()->getLocale())}}">@lang('home.decomposition')</a>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <a href="{{route('binaryHex',app()->getLocale())}}">@lang('home.binaryhexinfo')</a>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">

                        </div>
                        <div class="gridData">

                        </div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 2) {
                                echo "<s>";
                            }
                            ?>
                            <a href="{{route('cInfo',app()->getLocale())}}">@lang('home.cinfo')</a>
                            <?php
                            if (session('puzzle') >2) {
                                echo "</s>";
                            }
                            ?>
                        </div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <a href="{{route('jvsc',app()->getLocale())}}">@lang('home.javavsc')</a>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 1) {
                                echo "<s>";
                            }
                            ?>
                            <a href="{{route('assembler',app()->getLocale())}}">@lang('home.assemblerprogram')</a>
                            <?php
                            if (session('puzzle') >1) {
                                echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') > 2) {
                            echo "<s>";
                            }
                            ?>
                            <a href="{{route('c',app()->getLocale())}}">@lang('home.cprogram')</a>
                            <?php
                            if (session('puzzle') >2) {
                            echo "</s>";
                            }
                            ?>
                        </div>

                        <div class="gridData"></div>
                        <div class="gridData">
                            <?php
                            if (session('puzzle') == 4) {
                            echo "<s>";
                            }
                            ?>
                            <a href="{{route('javaInfo',app()->getLocale())}}">@lang('home.javainfo')</a>
                            <?php
                            if (session('puzzle') ==4) {
                            echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData">

                        </div>

                        <div class="gridData">
                            <?php
                            if (session('puzzle') != 0) {
                                echo "<s>";
                            }
                            ?>

                            <a href="{{route('logicP',app()->getLocale())}}">@lang('home.logic') </a>
                            <?php
                            if (session('puzzle') != 0) {
                                echo "</s>";
                            }
                            ?>
                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData">

                        </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"> </div>
                        <div class="gridData"></div>
                        <div class="gridData"></div>

                        <div class="gridData"></div>
                        <div class="gridData"><a href="{{route('levels',app()->getLocale())}}">@lang('home.levels')</a>
                        </div>
                        <div class="gridData"></div>


                    </div>



                </div>
                <div>
                    <h1 class="text-center">@lang('home.unlockcode')</h1>
                    <?php echo Form::open(array('route' => array('final',app()->getLocale()))); ?>
                    <div class="d-flex justify-content-center">
                        <div><?php echo Form::text('inputvalue1');?></div>
                        <div><?php echo Form::text('inputvalue2');?></div>
                        <div><?php echo Form::text('inputvalue3');?></div>
                        <div><?php echo Form::submit(Lang::get('home.clickme'));?></div>
                    </div>

                    <?php  echo Form::close()?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection