@extends('layouts.app')


</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">Levels <div class="float-md-right"><a href="/" class="btn btn-primary"
                            role="button">Home</a></div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Levels</h1>
                    <img src="{{ URL::to('/img/pyramid.svg') }}" alt="">

                </div>

                </body>
            </div>
        </div>
    </div>
</div>
</div>
@endsection