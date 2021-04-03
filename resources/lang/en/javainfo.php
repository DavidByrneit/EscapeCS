<?php

return [

    /*
    |--------------------------------------------------------------------------
    | English text java.blade.php view view 
    |--------------------------------------------------------------------------
    |
    |
    */
    'homepage' => 'Home',
    'clickme' => 'Click Me!',
    'javalanguage' => 'Java Language',
    'javainfo' => ' <ul>
                        <li>Everything in Java is associated with classes and objects, along with its attributes and methods. </li>
                        <ul>
                        <li>For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.</li>
                        </ul>
                        <li>A Class is like an object constructor, or a "blueprint" for creating objects.</li>
                        <li>A method is a block of code which only runs when it is called.</li>
                        <li>You can pass data, known as parameters, into a method.</li>
                        <li>Methods are used to perform certain actions, and they are also known as functions.</li>
                        <ul>
                        <li>Why use methods? To reuse code: define the code once, and use it many times.</li>
                        </ul>
                    </ul>Java is an object-oriented programming language. <br>',
    'javaresult' => '<ul><li>Result =The car is going as fast as it can!</li><li>Max speed is: 200</li></ul>',
    'javacode' => '// Create a Car class
public class Car {

  // Create a fullThrottle() method
  public void fullThrottle() {
    System.out.println("The car is going as fast as it can!");
  }

  // Create a speed() method and add a parameter
  public void speed(int maxSpeed) {
    System.out.println("Max speed is: " + maxSpeed);
  }

  // Inside main, call the methods on the myCar object
  public static void main(String[] args) {
    Car myCar = new Car();     // Create a myCar object
    myCar.fullThrottle();      // Call the fullThrottle() method
    myCar.speed(200);          // Call the speed() method
  }
}'

];
