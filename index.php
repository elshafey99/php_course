<?php

echo 'koko';
print '<br>';

var_dump((bool) "");
echo '<br>';
var_dump((bool) array());
echo '<br>';
var_dump((bool) []);
echo '<br>';
var_dump((bool) "mohamed");
echo '<br>';
var_dump((bool) array(10));
echo '<br>';


$name = "mohamed";

// heredoc
print <<<"here"
helo php 
special $$$$ '''' """""" \\\\
helo my name is $name
here;
print '<br>';

// nowdoc 
print <<<'now'
helo php 
special $$$$ '''' """""" \\\\
helo my name is $name
now;
print '<br>';

print '<ul>';
print "<li>" . $name . "</li>";
print "<li>" . $name . "</li>";
print "<li>" . $name . "</li>";
print "<li>" . $name . "</li>";
print '</ul>';

print '<br>';

print <<< "navlinks"
<ul>
<li>$name</li>
<li>$name</li>
<li>$name</li>
<li>$name</li>
</ul>

navlinks;

//=================================

print '<pre>';
print_r([
    "M" => "Mohamed",
    "A" => "Alaa",
    "mona"
]);
print '</pre>';

print '<pre>';
//print_r($_SERVER);
//print $_SERVER["HTTP_CONNECTION"];
print '</pre>';

print $_POST["username"]

?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="send">
</form>


<?php

print php_uname();
?>