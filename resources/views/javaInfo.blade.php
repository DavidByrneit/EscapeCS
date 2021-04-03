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
</style>

<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">
                    @lang('javainfo.javalanguage')
                    <div class="float-md-right"><a href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('javainfo.homepage')</a></div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <p>
                            @lang('javainfo.javainfo')</p>



                    </div>

                    <pre class="prettyprint linenums">
    <code class="language-java">
@lang('javainfo.javacode')

</code>
</pre>
                    @lang('javainfo.javaresult')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection