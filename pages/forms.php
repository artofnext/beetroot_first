<?PHP 

if (isset($_GET['name'])) $name = $_GET['name'];
else $name = "Not specified";

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
    <h2>Your name: $name<br>
    <form action="" method="GET">
        Name: <input value="Vasya" name="name" /><br>
        Birth: <input type="date" name="birth" /><br>
        Gender:
        <!-- the same names of fields connect them -->
        Male<input type="radio" name="gender" value="male" />
        Femail<input type="radio" name="gender" value="femail" />
        <br>
        Skills: HTML <input type="checkbox" name="skills[]" value="html" />
        CSS <input type="checkbox" name="skills[]" value="css" />
        JavaScript <input type="checkbox" name="skills[]" value="js" /><br>
        <!-- todo try diferent types -->
        <br>
        <select name="lang[]" size="3" multiple>
            <option value="1">Opt1</option>
            <option value="2" selected>Opt2</option>
            <option value="3">Opt3</option>
            <option value="4">Opt4</option>
            <option value="5">Opt6</option> 
        </select>
        <br>

        <!-- textarea preserve formatting of its content so if you put some tag inside it won't work-->
        <textarea name="some_text" style="width: 50%; height: auto">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </textarea>

        <br>

        <!-- Submit form -->
        <input type="submit" value="Go!" />

        <!-- Just button, does nothing -->
        <input type="button" value="Button" />

        <!-- Thous work as they should -->
        <button type="reset">Reset</button>

        <!-- But behavier of this depends on browser, for submittion better use <input type="submit"> -->
        <button type="button">Button</button>
    </form>
</body>
</html>
_END
?>