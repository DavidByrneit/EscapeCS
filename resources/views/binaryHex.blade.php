@extends('layouts.app')
<style>
    p {
        width: 60%;
        float: right
    }
</style>`

<script>
    function conv() {
    var num = document.querySelector('#num').value;
    var conved = document.querySelector('#conved');
    if (/x/i.test(num)) {
        var dec = parseInt(num, 16);
        conved.innerHTML = "Decimal: " + dec;
    } else {
        var hex = parseInt(num).toString(16);
        conved.innerHTML = "Hexadecimal is: 0x" + hex;
    }
}
</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">@lang('binaryhex.hexadecimal')<div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('binaryhex.homepage')</a></div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row justify-content-md-center">
                        <div class="col-5">

                            <h1>@lang('binaryhex.hexadecimal')</h1>
                            <img src="{{ URL::to('/') }}/img/Hexadecimal-and-Binary-Number-System-Representation.jpg"
                                width="400" alt="">
                            <br><br><br>

                        </div>

                        <div class="col-7">

                            @lang('binaryhex.text1')
                        </div>

                    </div>
                    <div class="row justify-content-md-center">
                        @lang('binaryhex.text2')

                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection