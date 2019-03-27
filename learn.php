<?php

//echo 'hello test b';

$joker = function ($a, $b, $c){
	return $a + $b * $c;
};

echo $joker(2, 2, 2) . '<br>';

function joke($a, $b, $c = 1){
	$result = $a + $b * $c;
	return $result;
};

echo joke(10, 20) . '<br>';

//---------------------------

$number = 10;
echo $number++;
echo $number;
echo ++$number . '<br>';

//----------------------------

$temperature = -10;
if ($temperature < 0) {
	echo '**' . '<br>';
} elseif ($temperature >= 0 && $temperature <= 4) {
	echo '*' . '<br>';
} else {
	echo '-' . '<br>';
}

var_dump(1==='1');

$min = function($a, $b){
	if($a < $b){
		return $a . '<br>';
	} else {
		return $b . '<br>';
	}
};

$max = function($a, $b){
	return $a > $b ? $a : $b;
};

$average = function($a, $b){
	return ($a + $b)/2 . '<br>';
};

echo $min(50, 5);
echo $max(50, 5);
echo '<br>';
echo $average(50, 5);

//---------------------------------

$number = 100;

switch ($number){
	case 1:
		echo '^0';
		break;
	case 10:
		echo '^1';
		break;
	case 100:
		echo '^2';
		break;
	default:
		echo 'NOT FOUND';
		break;
}

echo '<br>';

//-------------------------------

function test($test_value){
	$base = 100;
	$result = $test_value <=> $base; //"spaceship"
	echo $result.'<br>';
	switch ($result) {
		case -1:
			echo 'Min';
			break;
		case 0:
			echo 'Equal';
			break;
		case 1:
			echo 'Max';
			break;
	}
};
test(10); echo '<br>';
test(100); echo '<br>';
test(1001); echo '<br>';

//----------------------------------------

for ($i = 0; $i <10; $i++){
	echo $i.'<br>';
};

for ($i = 0;;$i++){ 
	if($i == 5)
		break;
	echo $i.'<br>';
};


$y = 0;
while ($y < 4){
	echo $y.'<br>';
	$y++;
};

while ($y == true){
	echo $y.'<br>';
	$y++;
	if ($y == 10) $y = false;
};

$b = true;
do {
	echo $y.'<br>';
	if ($y == 0) $b = false;
	$y++;
} while ($b == true);



$arr = [1, 2, 3, 'zzz' => 'sadas'];
echo '<pre>';
print_r($arr);
unset($arr[1]);
print_r($arr);
echo '<br>';

foreach ($arr as $value){
	echo $value.'<br>';
};




$persons = [
	['name' => 'vasya', 'age' => 100, 'city' => 'tula', 'country' => 'ru'],
	['name' => 'Petya', 'age' => 10, 'city' => 'Moscow'],
	['name' => 'helga', 'age' => 20, 'country' => 'ru'],
	['name' => 'Helen', 'age' => 30],
	['name' => 'Kirill', 'age' => 12, 'city' => 'kaluga'],
];

foreach ($persons as person) {
	foreach ($person as $key => $value) {
		if ($key == 'name')
			echo ucfirst ($value);
		if ($key == 'city') echo ' - ' . $value.<'br>';
	}
};

foreach ($persons as &$person){
	$person['name'] = ucfirst($person['name']);
}
unset($person);
print_r($persons);
$person['name'] = 'helga';
print_r($persons);

foreach ($presons as $person) {
	if (!isset($person['city']))
		echo $person['name'] . '-without city<br>'; //method 1
}

foreach ($persons as $person) {
	echo $person['name'].' - '.($person['city'] ?? '*') . '<br>'; //method 2
}

foreach ($persons as $person) {
	echo $person['name'] . ' - ' . ($person['city'] ?? $person['country'] ?? '*') . '<br>';

}

//method 1 and 2 are the same with diffirent syntax

$city_dict = [
	'moscow' => 'Moskva',
	'tula' => 'Tula'
]

foreach ($persons as $person) {
	$city = '*';
	if (isset($person['city'])) {
		$city = $city_dict[strtolower($person['city'])] ?? $person['city'];
	} else {
		$city = $person['country'] ?? '*';
	}
	echo $person['name'] . ' in ' . $city . '<br>';
}

//---------------------------------------------

$params = [1,2,3,'ssss'];
function test($a, $b, $c){
	echo $a . '' . $b . '' . $c . "\n";

}
test(...$params);



?>
