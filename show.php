<?php
if (isset($_REQUEST['input'])) {
    $input = $_REQUEST['input'];
    try {
        echo calculate($input);
    }
    catch (ParseError $er) {
        echo "invalid Input";
    }
    catch (Error $er) {
        echo $er->getMessage();
    }
}

function calculate($input)
{
    $input02 = "null input";
    $input = preg_replace("/[^a-z0-9+\-*\/]/", "", $input);
    if ($input != "")
        $input02 = @eval("return " . $input . ";");
    if ($input02 == null)
        throw new Error("Error !!");
    return $input02;
}

echo "<br><a  href='index.html'>Go back</a>";