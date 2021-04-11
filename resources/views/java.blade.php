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

    ppublic static void main(String[] args) {

        Animal animal1=new Animal("Male",<?php echo Form::text('inputvalue2','??'); ?>,"Tim");
        Animal animal2=new Animal("Female",33,"David");
        animal2.setAge(animal1.getAge()+37);
       animal1.setAge(animal2.getAge());
        
        
        System.out.println((animal2.getAge()+animal1.getAge())*2);
        
    }
    public class Animal {
    String gender;
    int age;
    String name;
   
    public Animal(String gender, int age, String name) {
        this.gender = gender;
        this.age = age;
        this.name = name;
    }
    public int getAge() {
        return age;
    }
    public void setAge(int age) {
        this.age = age;
    }
    
}
 


</code>
</pre>
                    @lang('java.output')


                    <?php echo Form::text('inputvalue1' ,'??'); ?><br>

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