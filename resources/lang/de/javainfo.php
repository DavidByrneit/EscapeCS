<?php

return [

  /*
    |--------------------------------------------------------------------------
    | English text java.blade.php view view 
    |--------------------------------------------------------------------------
    |
    |
    */
  'homepage' => 'Hause',
  'clickme' => 'Klicken!',
  'javalanguage' => 'Java Sprache',
  'javainfo' => ' <ul>
                        <li> Alles in Java ist mit Klassen und Objekten verbunden, zusammen mit seinen Attributen und Methoden. </ li> </ ul>
                        <ul>
                        <li> Zum Beispiel: Im wirklichen Leben ist ein Auto ein Objekt. Das Auto verfügt über Attribute wie Gewicht und Farbe sowie über Methoden wie Fahren und Bremsen. </ Li>
                        </ ul>
                        <li> Eine Klasse ist wie ein Objektkonstruktor oder eine "Blaupause" zum Erstellen von Objekten. </ Li>
                        <li> Eine Methode ist ein Codeblock, der nur ausgeführt wird, wenn er aufgerufen wird. </ Li>
                        <li> Sie können Daten, sogenannte Parameter, an eine Methode übergeben. </ li>
                        <li> Methoden werden verwendet, um bestimmte Aktionen auszuführen, und sie werden auch als Funktionen bezeichnet. </ li>
                        <ul>
                        <li> Warum Methoden anwenden? So verwenden Sie Code erneut: Definieren Sie den Code einmal und verwenden Sie ihn mehrmals. </ Li>
                        </ ul>
                    </ ul> Java ist eine objektorientierte Programmiersprache. <br>',
  'javaresult' => '<ul> <li> Ergebnis = Das Auto fährt so schnell wie möglich! </ li> <li> Die Höchstgeschwindigkeit beträgt: 200 </ li> </ ul>',
  'javacode' => '// Erstellen Sie eine Car-Klasse
public class Car {

  // Erstellen Sie eine fullThrottle () Methode
  public void fullThrottle() {
    System.out.println("Das Auto fährt so schnell es geht!");
  }

  // Erstellen Sie eine speed () Methode und fügen Sie einen Parameter hinzu
  public void speed(int maxSpeed) {
    System.out.println("Maximale Geschwindigkeit ist: " + maxSpeed);
  }

  // Rufen Sie in main die Methoden für das myCar-Objekt auf
  public static void main(String[] args) {
    Car myCar = new Car();     // Erstellen Sie ein myCar Objekt
    myCar.fullThrottle();      // Rufen Sie die Methode fullThrottle () auf
    myCar.speed(200);          // Rufen Sie die speed () Methode auf
  }
}'

];
