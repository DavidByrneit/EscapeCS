@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Feedback</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <p>Well here we are ,you have done it stepped through all my layers of abstraction to reach us
                            here.
                        </p>
                        <p> Maybe i overeaceted maybe things arent as bad as it seems.</p>
                        <p> I do think we need to have a better understanding in our past ,we are losing skills that are
                            still needed today ,what will you do when you cheats and librarys fail you.</p>
                        <p> What if OS systems stop working or shut you out.The old ways will always work and they will
                            make you a better programmer.</p>



                        <p> Maybe there is hope if we can make it accessible to everyone maybe more will participate.
                        </p>


                        <p>Anyway you have solved my little trials il turn your website back to normal when i get a
                            chance,im doing things the old ways it might take awhile.</p>
                        </br>
                    </div>
                    Please leave some feedback (I will probably ignore it)

                    {{ Form::open(array('route' => array('feedback',app()->getLocale()))) }}
                    <table>
                        <tr>
                            <td>
                                {{ Form::label('input2', 'E-Mail Address') }}</td>
                            <td>{{ Form::text('input2') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('gender', 'Gender') }}</td>
                            <td>{{ Form::select('gender', array('M' => 'Male', 'F' => 'Female'))}}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('age', 'Age') }}</td>
                            <td>{{ Form::number('age') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('schoolLevel', 'School Level') }}</td>
                            <td>{{ Form::text('schoolLevel') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('country', 'Country') }}</td>
                            <td>{{ Form::text('country') }}</td>
                        </tr>

                        <td>{{ Form::label('subject', 'Subject') }}</td>
                        <td>{{ Form::text('subject') }}</td>
                        </tr>
                        <tr>

                            <td>{{ Form::label('q1', 'How many hours do you play video games per week?') }}</td>
                            <td>{{ Form::number('q1') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q2', 'How many hours do you play roleplay games per week?') }}</td>
                            <td>{{ Form::number('q2') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q3', 'How many hours do you play boardgames per week?') }}</td>
                            <td>{{ Form::number('q3') }}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('q4', 'I enjoyed while playing the escape room') }}</td>
                            <td>{{ Form::select('q4', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>
                        </tr>
                        <tr>

                            <td> {{ Form::label('q5', 'I have found the theme/story interesting') }}</td>
                            <td>{{ Form::select('q5', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q6', 'The difficulty of the escape room was adequate') }}</td>
                            <td> {{ Form::select('q6', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td>{{ Form::label('q7', 'I am satisfied with the work I did during the escape room') }}
                            </td>
                            <td>{{ Form::select('q7', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q8', 'We kept track of the given time limit to solve puzzles through team working and communication') }}
                            </td>
                            <td> {{ Form::select('q8', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q9', 'The escape room was useful for learning new things on the topic') }}
                            </td>
                            <td> {{ Form::select('q9', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q10', 'The discussion was useful for learning new things on the topic') }}
                            </td>
                            <td> {{ Form::select('q10', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree', 4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{Form::label('q10', 'The puzzles and riddles used in this escape room were appealing')}}
                            </td>
                            <td> {{ Form::select('q10', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q11', 'As a general conclusion, the escape room was a good experience') }}
                            </td>
                            <td> {{ Form::select('q11', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q12', 'The escape room is a good choice for learning new topics') }}
                            </td>
                            <td> {{ Form::select('q12', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q13', 'I would suggest other teachers to use ER as well') }}</td>
                            <td> {{ Form::select('q13', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree')) }}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q14', 'The time invested in class to play the escape room was worthy')}}
                            </td>
                            <td> {{ Form::select('q14', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree'))}}
                            </td>

                        </tr>
                        <tr>
                            <td> {{ Form::label('q15', 'I would like to participate in more escape rooms')}}</td>
                            <td> {{ Form::select('q15', array(1 => 'Strongly Disagree', 2 => 'Disagree', 3 => 'Agree',  4 => 'Strongly Agree'))}}
                            </td>
                        </tr>
                        <tr>
                            <td> {{ Form::label('input1', 'Comments') }}</td>
                            <td> {{ Form::textarea('input1')}}</td>
                        </tr>
                        <tr>
                            <td>
                                {{ Form::submit(Lang::get('home.clickme'))}}</td>
                            <td></td>
                        </tr>
                    </table {{ Form::close() }} </div> </div> </div> </div> </div> @endsection