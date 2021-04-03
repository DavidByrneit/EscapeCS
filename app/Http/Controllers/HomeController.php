<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mqtt;
use Lang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $date = Carbon::now();
        $carbon_date = Carbon::parse($date);
        $carbon_date->addHours(1);
        if (session('start') == null) {
            session()->put('start', $carbon_date);
            session()->put('puzzle', 0);
        }

<<<<<<< Updated upstream
       // return view('home');
        return view('LogicPuzzle');
=======
        // return view('home');
        return view('home');
>>>>>>> Stashed changes
    }
    public function logicInfo()
    {
        return view('logicInfo');
    }

    public function assembler()
    {
        return view('assembler');
    }

    public function instructionset()
    {
        return view('instructionset');
    }
    public function logicP()
    {
        return view('logicP');
    }
    public function binaryHex()
    {
        return view('binaryHex');
    }
    public function decomp()
    {
        return view('decomposition ');
    }
    public function jvsc()
    {
        return view('jVSc ');
    }
    public function c()
    {
        return view('c');
    }
    public function cInfo()
    {
        return view('cInfo');
    }
    public function java()
    {
        return view('java');
    }
    public function javaInfo()
    {
        return view('javaInfo');
    }
    public function levels()
    {
        return view('levels');
    }
<<<<<<< Updated upstream
   /*  public function logicPA()
     {
=======
    public function logicPA()
    {


        $input =  $_POST["inputvalue1"];
        if ($input == 1011) {
            if (session('puzzle') == 0) {
                session()->put('puzzle', 1);
            }
            session()->flash('sucess', trans('logic.logicanswercorrect'));

            return redirect(app()->getLocale() . '/');
        } else {

            return view('logicP')->with('error', trans('logic.logicanswerwrong'));
        }
    }
>>>>>>> Stashed changes



<<<<<<< Updated upstream
             return view('logicP')->with('result', 'Ha not very logical are you, your gonna have to learn the basics first');
         }
     } */
    public function logicPA()
=======
    public function logicPAMQTT()
>>>>>>> Stashed changes
    {

        //https://157b5eec-858e-4a65-801d-5af67c9a7c5f.mock.pstmn.io/solved
        $input =  $_POST["inputvalue1"];

        $mqtt = new Mqtt();
        if ($input == 1011) {

            //$json = json_decode(file_get_contents('https://157b5eec-858e-4a65-801d-5af67c9a7c5f.mock.pstmn.io/solved'), true);
            //error_log(var_dump($json));



            $topic = 'LIT/PuzzleLock';
            $message = 'Unlock';
            $output = Mqtt::ConnectAndPublish($topic, $message);

            if ($output === true) {
                error_log("published");
            }
            //error_log("Failed");


            return view('logicP')->with('result', trans('logic.logicanswercorrect'))->with('sucess', trans('logic.logicanswercorrect'));
        } else {
            $topic = 'LIT/PuzzleLock';
            $message = 'Lock';
            $output = Mqtt::ConnectAndPublish($topic, $message);

            if ($output === true) {
                error_log("published");
            }
            //error_log("Failed");
            //ray()->showViews();
            return view('logicP')->with('result', trans('logic.logicanswerwrong'))->with('error', trans('logic.logicanswerwrong'));
        }
    }

    public function assemblerPA()
    {

        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];
        $result = [
            'response1' => '',
            'response2' => ''
        ];

        if (strtoupper($input) == "B" || strtoupper($input) == "0XB" || strtoupper($input) == "0X0B") {
            $result['response1'] = "Thats correct ,could you B slower ?";
        } elseif (strtoupper($input) == "1011") {
            $result['response1'] = "so close, but we dont deal in binary anymore, we only speak in 16s these days";
        } else {
            $result['response1'] = "I dont know what your entering but it aint right , try using something logical";
        }

        if (strtoupper($input2) == "D" || strtoupper($input2) == "0XD" || strtoupper($input2) == "0X0D" || strtoupper($input2) == "13") {

            if (session('puzzle') == 1) {
                session()->put('puzzle', 2);
            }
            return view('home')->with('result', 'Boom!!! well done that was a tough one im suprised,Your beginning to C more clearly');
        } else {
            $result['response2'] = "Do you really understand this ?? I left instructions laying around somewhere.";
        }

        return view('assembler')->with('result', $result);
    }
    public function cPA()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];

        if ($input == "13") {
            $result['response1'] = trans('cprogram.answerhint1');
        } else {
            $result['response1'] = trans('cprogram.answerhint2');
        }

        if ($input2 == "27") {
            if (session('puzzle') == 2) {
                session()->put('puzzle', 3);
            }
            return view('home')->with('result', 'Looks like your beginning to c clearly ,Im impressed maybe you do understand');
        } else {
            $result['response2'] = "Are you wearing your glasses ? you will have to learn to c memory clearly for this one";
        }
        return view('c')->with('result', $result);
    }
    public function javaPA()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];

        if ($input == "256") {
            if (session('puzzle') == 3) {
                session()->put('puzzle', 4);
            }


            session()->flash('sucess', trans('java.correct'));

            return redirect(app()->getLocale() . '/');
        } else {
            $result['response1'] = trans('java.error');
        }

        if ($input2 == "0x1B" || $input2 == "0x1b" || $input2 == "27") {
            $result['response2'] = trans('java.errorhint1');
        } else {
            $result['response2'] = trans('java.errorhint2');
        }

        return view('java')->with('result', $result);
    }


    public function final()
    {
        $input =  $_POST["inputvalue1"];
        $input2 =  $_POST["inputvalue2"];
        $input3 =  $_POST["inputvalue3"];

        if ($input == "2" && $input2 == "5" && $input3 == "6") {
            return view('final');
        } else {
            return view('home')->with('result', 'Nope, stop guessing');
        }
    }
    public function feedback()
    {
        $input =  $_POST["input1"];
        $input2 =  $_POST["input2"];
        $date = Carbon::now();

        $gender =  $_POST["gender"];
        $age =  $_POST["age"];
        $schoolLevel =  $_POST["schoolLevel"];
        $country =  $_POST["country"];
        $subject =  $_POST["subject"];

        $q1 =  $_POST["q1"];
        $q2 =  $_POST["q2"];
        $q3 =  $_POST["q3"];
        $q4 =  $_POST["q4"];
        $q5 =  $_POST["q5"];
        $q6 =  $_POST["q6"];
        $q7 =  $_POST["q7"];
        $q8 =  $_POST["q8"];
        $q9 =  $_POST["q9"];
        $q10 =  $_POST["q10"];
        $q11 =  $_POST["q11"];
        $q12 =  $_POST["q12"];
        $q13 =  $_POST["q13"];
        $q14 =  $_POST["q14"];
        $q15 =  $_POST["q15"];


        DB::table('feedback')->insert(
            [
                'Email' => $input2, 'Date' => $date, 'Comment' => $input, 'Gender' => $gender, 'Age' => $age, 'SchoolLevel' => $schoolLevel, 'Country' => $country, 'Subject' => $subject, 'q1' => $q1, 'q2' => $q2, 'q3' => $q3, 'q4' => $q4, 'q5' => $q5, 'q6' => $q6, 'q7' => $q7, 'q8' => $q8, 'q9' => $q9, 'q10' => $q10, 'q11' => $q11, 'q12' => $q12, 'q13' => $q13, 'q14' => $q14, 'q15' => $q15
            ]
        );
        return view('home');
    }
}
