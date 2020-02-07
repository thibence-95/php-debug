<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//echo "Exercise 1 starts here:";

function new_exercise(int $x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

echo new_exercise(1);

//-------------------------------------------------


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

//------------------------------------------------------------------------------

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

//--------------------------------------------------------------


new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) { //the hellll?? just an &

    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

//--------------------------------------------------------------


new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);

    if (count($arr) > 25){
        break;
    }
}


print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

//-----------------------------------------------------


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode($params, " - ");
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "Ant", "Wasp", "The", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "Eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, 1)][rand(0, 10)];

    return $randname;
}


echo "Here is the name: " . combineNames(randomHeroName(), randomHeroName());

//------------------------------


new_exercise(7);
function copyright(string $year) {
    return "&copy; $year BeCode";
}
//print the copyright
print_r(copyright(date('Y')));

//-------------------------------------------------------


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}
//should greet the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
$login = login('john@example', 'dfgidfgdfg');
//no access
$login = login('wrong@example', 'wrong');

echo login();





