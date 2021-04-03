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
                <h4 class="card-header">@lang('java.javaprogram') <div class="float-md-right"><a
                            href="{{ route('home',app()->getLocale()) }}" class="btn btn-primary"
                            role="button">@lang('java.homepage')</a>
                    </div>
                </h4>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @include('layouts.flash-message')
                    <?php
                    echo Form::open(array('route' => array('javaPA',app()->getLocale()))); ?>

                    <pre class="prettyprint linenums">
    <code class="language-java">
public class Test {

    public static void main(String[] args) {
        Animal animal1=new Animal("Male",6,"Tim");
        Animal animal2=new Animal("Female",4,"David");
        animal2.setAge(animal1.getAge()+1);
        animal2.Random( <?php echo Form::text('inputvalue2'); ?>);
        System.out.println(animal2.getAge()+animal1.getAge());

    }
}


public class Animal {
    String gender;
    int age;
    String name;

    public Animal() {

    }

    public Animal(String gender, int age, String name) {
        this.gender = gender;
        this.age = age;
        this.name = name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void Random(String input){
        switch (input) {
            case "27":
                 age = 250;
                break;
            case "45":
                 age = 4000;
                break;
            case "25":
                 age = 102;
                break;
            case "33":
                 age = 120;
                break;
            case "80":
                 age = 111;
                break;
            
        }
    }
}

</code>
</pre>
                    @lang('java.output')


                    <?php echo Form::text('inputvalue1'); ?><br>

                    <?php

                    echo Form::submit(Lang::get('java.clickme'));

                    echo Form::close()
                    ?>

                    @include('layouts.flash-message')
                </div>
            </div>
        </div>
    </div>
</div> @endsection