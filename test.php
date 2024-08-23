<?php

function runTests() {
    $tests = [
        'variablesExist' => function() {
            global $name, $age, $isStudent;
            return isset($name) && isset($age) && isset($isStudent);
        },
        'dataTypeConversion' => function() {
            global $name, $age, $isStudent;
            $ageString = (string)$age;
            $studentString = $isStudent ? "Yes" : "No";
            return is_string($ageString) && is_string($studentString);
        },
        'ifStatementExists' => function() {
            global $age;
            ob_start();
            if ($age > 18) {
                echo "You are an adult.";
            } else {
                echo "You are a minor.";
            }
            $output = ob_get_clean();
            return strpos($output, "You are") !== false;
        },
        'loopExists' => function() {
            global $favoriteFoods;
            return isset($favoriteFoods) && is_array($favoriteFoods) && count($favoriteFoods) == 5;
        },
        'greetingFunctionExists' => function() {
            return function_exists('greet');
        },
        'rectangleAreaFunctionExists' => function() {
            return function_exists('calculateRectangleArea');
        },
        'associativeArrayExists' => function() {
            global $person;
            return isset($person) && is_array($person) && 
                   array_key_exists('name', $person) && 
                   array_key_exists('age', $person) && 
                   array_key_exists('city', $person);
        },
        'arrayFunctionsUsed' => function() {
            global $favoriteFoods;
            $sorted = $favoriteFoods;
            sort($sorted);
            $count = count($favoriteFoods);
            array_push($favoriteFoods, 'New Food');
            return $sorted !== $favoriteFoods && $count == 5 && count($favoriteFoods) == 6;
        },
        'formExists' => function() {
            $html = file_get_contents('index.php');
            return strpos($html, '<form') !== false && 
                   strpos($html, 'method="POST"') !== false &&
                   strpos($html, 'name="name"') !== false &&
                   strpos($html, 'name="color"') !== false;
        },
        'formProcessingExists' => function() {
            ob_start();
            $_POST['name'] = 'Test';
            $_POST['color'] = 'Blue';
            include 'index.php';
            $output = ob_get_clean();
            return strpos($output, 'Test') !== false && strpos($output, 'Blue') !== false;
        }
    ];

    $results = [];
    foreach ($tests as $name => $test) {
        $results[$name] = $test() ? 'Passed' : 'Failed';
    }

    return $results;
}

// Include the learner's code
include 'index.php';

// Run tests and display results
$testResults = runTests();
foreach ($testResults as $test => $result) {
    echo "$test: $result\n";
}
?>
