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

        // return view('home');
        return view('home');
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



    public function logicPAMQTT()
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
            $result['response1'] = trans('assembler.answerhint1');
        } elseif (strtoupper($input) == "1011") {
            $result['response1'] = trans('assembler.answerhint2');
        } else {
            $result['response1'] = trans('assembler.answerhint3');
        }

        if (strtoupper($input2) == "D" || strtoupper($input2) == "0XD" || strtoupper($input2) == "0X0D" || strtoupper($input2) == "13") {

            if (session('puzzle') == 1) {
                session()->put('puzzle', 2);
            }
            session()->flash('sucess', trans('assembler.answercorrect'));

            return redirect(app()->getLocale() . '/');
            
        } else {
            $result['response2'] = trans('assembler.answerincorrect');
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

            session()->flash('sucess', trans('cprogram.answercorrect'));

            return redirect(app()->getLocale() . '/');
            
        } else {
            $result['response2'] = trans('cprogram.answerincorrect');
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

            //return view('home')->with('error', trans('home.stopguessing'));
            session()->flash('error', trans('home.stopguessing'));

            return redirect(app()->getLocale() . '/');

        }
    }
    public function feedback()
    {
        if (!empty($_POST['input1'])) {
            $input =  $_POST["input1"];
        } else {
            $input =  '';
        }

        if (!empty($_POST['input2'])) {
            $input2 =  $_POST["input2"];
        } else {
            $input2 =  '';
        }
        
        $date = Carbon::now();

        if (!empty($_POST['gender'])) {
            $gender =  $_POST["gender"];
        } else {
            $gender =  '';
        }

        if (!empty($_POST['age'])) {
            $age =  $_POST["age"];
        } else {
            $age =  0;
        }

        if (!empty($_POST['schoolLevel'])) {
            $schoolLevel =  $_POST["schoolLevel"];
        } else {
            $schoolLevel =  '';
        }

        if (!empty($_POST['country'])) {
            $country =  $_POST["country"];
        } else {
            $country =  '';
        }

        if (!empty($_POST['subject'])) {
            $subject =  $_POST["subject"];
        } else {
            $subject =  '';
        }
        if (!empty($_POST['q1'])) {
            $q1 =  $_POST["q1"];
        } else {
            $q1 =  0;
        }
        if (!empty($_POST['q2'])) {
            $q2 =  $_POST["q2"];
        } else {
            $q2 =  0;
        }
        if (!empty($_POST['q3'])) {
            $q3 =  $_POST["q3"];
        } else {
            $q3 =  0;
        }
        if (!empty($_POST['q4'])) {
            $q4 =  $_POST["q4"];
        } else {
            $q4 =  0;
        }
        if (!empty($_POST['q5'])) {
            $q5 =  $_POST["q5"];
        } else {
            $q5 =  0;
        }
        if (!empty($_POST['q6'])) {
            $q6 =  $_POST["q6"];
        } else {
            $q6 =  0;
        }
        if (!empty($_POST['q7'])) {
            $q7 =  $_POST["q7"];
        } else {
            $q7 =  0;
        }
        if (!empty($_POST['q8'])) {
            $q8 =  $_POST["q8"];
        } else {
            $q8 =  0;
        }

        if (!empty($_POST['q9'])) {
            $q9 =  $_POST["q9"];
        } else {
            $q9 =  0;
        }
        if (!empty($_POST['q9a'])) {
            $q9a =  $_POST["q9a"];
        } else {
            $q9a =  0;
        }
        if (!empty($_POST['q10'])) {
            $q10 =  $_POST["q10"];
        } else {
            $q10 =  0;
        }

        if (!empty($_POST['q11'])) {
            $q11 =  $_POST["q11"];
        } else {
            $q11 =  0;
        }
        if (!empty($_POST['q12'])) {
            $q12 =  $_POST["q12"];
        } else {
            $q12 =  0;
        }

        if (!empty($_POST['q13'])) {
            $q13 =  $_POST["q13"];
        } else {
            $q13 =  0;
        }
        if (!empty($_POST['q14'])) {
            $q14 =  $_POST["q14"];
        } else {
            $q14 =  0;
        }
        if (!empty($_POST['q15'])) {
            $q15 =  $_POST["q15"];
        } else {
            $q15 =  0;
        } 
        

        // check if there is content before saving 

        DB::table('feedback')->insert(
            [
                'Email' => $input2, 'date' => $date, 'comment' => $input, 'gender' => $gender, 'age' => $age, 'schoolLevel' => $schoolLevel, 'country' => $country, 'subject' => $subject, 'q1' => $q1, 'q2' => $q2, 'q3' => $q3, 'q4' => $q4, 'q5' => $q5, 'q6' => $q6, 'q7' => $q7, 'q8' => $q8, 'q9' => $q9, 'q9a' => $q9a, 'q10' => $q10, 'q11' => $q11, 'q12' => $q12, 'q13' => $q13, 'q14' => $q14, 'q15' => $q15 
            ]
        );
        return view('home');
    }
}
