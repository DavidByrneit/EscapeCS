@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">Feedback</h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        @lang('feedback.text1')
                        </br>
                    </div>
                    @lang('feedback.feedback')
                    <hr>

                    {{ Form::open(array('route' => array('feedback',app()->getLocale()))) }}
                    <table>
                        <tr>
                            <td>
                                {{ Form::label('input2', Lang::get('feedback.email')) }}</td>
                            <td>{{ Form::text('input2') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('gender', Lang::get('feedback.gender')) }}</td>
                            <td>{{ Form::select('gender', array('M' => Lang::get('feedback.male'), 'F' => Lang::get('feedback.female')))}}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('age', Lang::get('feedback.age')) }}</td>
                            <td>{{ Form::number('age') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('schoolLevel', Lang::get('feedback.schoollevel')) }}</td>
                            <td>{{ Form::text('schoolLevel') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('country', Lang::get('feedback.country')) }}</td>
                            <td>{{ Form::text('country') }}</td>
                        </tr>

                        <td>{{ Form::label('subject', Lang::get('feedback.subject')) }}</td>
                        <td>{{ Form::text('subject') }}</td>
                        </tr>
                        <tr>

                            <td>{{ Form::label('q1', Lang::get('feedback.q1')) }}</td>
                            <td>{{ Form::number('q1') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q2', Lang::get('feedback.q2')) }}</td>
                            <td>{{ Form::number('q2') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q3', Lang::get('feedback.q3')) }}</td>
                            <td>{{ Form::number('q3') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q4', Lang::get('feedback.q4')) }}</td>
                            <td>{{ Form::select('q4', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'),  4 => Lang::get('feedback.stronglyagree'))) }}
                            </td>
                        </tr>
                        <tr>

                            <td> {{ Form::label('q5', Lang::get('feedback.q5')) }}</td>
                            <td>{{ Form::select('q5', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q6', Lang::get('feedback.q6')) }}</td>
                            <td> {{ Form::select('q6', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td>{{ Form::label('q7', Lang::get('feedback.q7')) }}
                            </td>
                            <td>{{ Form::select('q7', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q8', Lang::get('feedback.q8')) }}
                            </td>
                            <td> {{ Form::select('q8', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q9', Lang::get('feedback.q9')) }}
                            </td>
                            <td> {{ Form::select('q9', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q9a', Lang::get('feedback.q9a')) }}
                            </td>
                            <td> {{ Form::select('q9a', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{Form::label('q10', Lang::get('feedback.q10'))}}
                            </td>
                            <td> {{ Form::select('q10', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q11', Lang::get('feedback.q11')) }}
                            </td>
                            <td> {{ Form::select('q11', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q12', Lang::get('feedback.q12')) }}
                            </td>
                            <td> {{ Form::select('q12', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q13', Lang::get('feedback.q13')) }}</td>
                            <td> {{ Form::select('q13', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree'))) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q14', Lang::get('feedback.q14'))}}
                            </td>
                            <td> {{ Form::select('q14', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree')))}}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q15', Lang::get('feedback.q15'))}}</td>
                            <td> {{ Form::select('q15', array(1 => Lang::get('feedback.stronglydisagree'), 2 => Lang::get('feedback.disagree'), 3 => Lang::get('feedback.agree'), 4 =>
                            Lang::get('feedback.stronglyagree')))}}
                            </td>
                        </tr>
                        <tr>
                            <td> {{ Form::label('input1', Lang::get('feedback.comments')) }}</td>
                            <td> {{ Form::textarea('input1')}}</td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::submit(Lang::get('home.clickme'))}}</td>
                            <td></td>
                        </tr>
                    </table {{ Form::close() }} </div> </div> </div> </div> </div> @endsection