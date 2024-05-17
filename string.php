<?php

$string =["Hello", "World", "PHP", "Programming"];

// Print First Array
echo "Original String: ". $string[0] .', ';

// Count Vowel
    $firstWord = $string[0];
    $vowels =["a", "e", "i", "o", "u"];
    $countVowels = '0';
   
    for($i=0; $i < strlen($firstWord); $i++){
       if(in_array($firstWord[$i], $vowels)){
           $countVowels++;
       }
}

echo "Vowel Count:" .$countVowels.', ';

// Reverse String
$reverseFirst =$string[0];

echo "Reversed String: ". strrev("$reverseFirst"). '<br>';

echo '<br>';

// Print 2nd Array

echo "Original String:" . $string[1]. ', ';

// Count Vowel 2nd


$findSecond = $string[1];

$vowlesLetter = ['a', 'e', 'i', 'o', 'u'];

$vowels2 = 0;

for($i = 0; $i < strlen($findSecond); $i++){
 if(in_array($findSecond[$i], $vowlesLetter)){
    $vowels2++;
 }
}

echo "Vowel Count:". $vowels2. ', ';

// Reverse String

$reverseSecond = $string[1];

echo "Reversed String:" . strrev($reverseSecond). '<br>';

echo '<br>';

// Print 3rd Array
$findThirdArray = $string[2];

echo 'Original String:'. $findThirdArray. ', ';

// Count Vowel 3rd

$thirdVowels = ['a', 'e', 'i', 'o', 'u'];
$vowels3 =0;

for($i=0; $i < strlen($findThirdArray); $i++){
    if(in_array($findThirdArray[$i], $thirdVowels)){
        $vowels3++;
    }
}

echo 'Vowel Count:'. $vowels3. ', ';

// 3rd Reverse String

$thirdReverse = $string[2];

echo 'Reversed String:'. strrev($thirdReverse). '<br>';

echo '<br>';


// Print 4th Array

$findArrayFour = $string[3];

echo 'Original String:'. $findArrayFour. ', ';


// Count Vowel 4th

$fourthVowels = ['a', 'e', 'i', 'o', 'u'];
$vowelsfour =0;

for($i =0; $i < strlen($findArrayFour); $i++){
    if(in_array($findArrayFour[$i], $fourthVowels)){
        $vowelsfour++;
    }
}

echo 'Vowel Count:'. $vowelsfour. ', ';

// 4th Reverse String

$fourthReverse = $string[3];

echo ' Reversed String:'. strrev($fourthReverse);




















