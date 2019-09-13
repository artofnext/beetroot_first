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
echo "<!DOCTYPE html>";
echo "<h1>Submitted:</h1>";
/*echo "<dl>";

foreach ($formProps as $formItem) {

    echo "<dt>" . $formItem . "</dt>" . "<dt>" . getProperty ($formItem) . "</dt>";
}

echo "</dl>";*/

foreach ($formProps as $formItem) {

    $dataset[$formItem] =  getProperty($formItem);
}

$renderedList = arrToDlWrapper($dataset);

echo "<p>Rendered:</p>" . $renderedList;

echo "<h2><a href='../index.html'>Back</a></h2>";

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
?>
<?php 
//echo var_dump($skills);
/*if ($skills) {
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
}*/
?>