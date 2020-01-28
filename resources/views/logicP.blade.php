@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Logic P</h1>
                    <img src="img/SVG/SVG/Asset 1.svg" alt="">
                    {{ $result }}
                    <?php
                    
                    echo Form::open(array('route' => 'logicPA'));
                    echo Form::text('inputvalue1');
                    echo Form::submit('Click Me!');
                    ?>


                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection