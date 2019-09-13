<?PHP 
$skills = false;
$formProps = [
    'name',
    'birth',
    'gender',
    'skills',
    'lang',
    'some_text'
];

$props;

if (!$_GET['submitted']) {
echo "<p>Form not submitted!<a href='../index.html'> Go Back!</a></p>";
die;
}

echo "<h2>Submitted:</h2>";
/*echo "<dl>";

foreach ($formProps as $formItem) {

    echo "<dt>" . $formItem . "</dt>" . "<dt>" . getProperty ($formItem) . "</dt>";
}

echo "</dl>";*/

foreach ($formProps as $formItem) {

    $dataset[$formItem] =  getProperty($formItem);
}

$renderedList = arrToDlWrapper($dataset);

echo "<p>Rendered</p>" . $renderedList;

/* wrap assoc array in dl list */
function arrToDlWrapper ($dataset, $result = NULL) {
    if (is_array($dataset)) {
    $result = $result . "<dl>";
        foreach ($dataset as $item => $value) {
            $result = $result . "<dt>" . $item ;
            if (is_array($value)) {
                $result = $result . arrToDlWrapper($value, $result);
            }
            else $result = $result . "<dd>" . $value . "</dd>";
            $result = $result . "</dt>";
        };
    $result = $result . "</dl>";
    }
    return $result;
}


function getProperty ($name) {
    if (isset($_GET[$name])) {
        return $_GET[$name];
    }
    return "Not specified";
}

echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <h1><a href="../index.html">Back</a></h1>
        <hr>
    </header>
    <h2>Your name: </h2><br>
    
_END;
?>
<?php 
//echo var_dump($skills);
if ($skills) {
    if (is_array($skills) && count($skills)>1) {
        echo "<h2>Your skills: </h2>";
        echo "<ul>";
        foreach ($skills as $skill) {
            echo "<li>" . $skill . "</li>";
        }
        echo "</ul>";
    }
    else {
        echo "<h2>Your skill: </h2>";
        echo "<p>" . $skills[0] . "</p>";
    }
}
else {
    echo "<h2>You have no skills yet</h2>";
}
?>