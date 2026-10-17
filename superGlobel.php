<?php
session_start();


$globel_var = "test user";
function test_globel_var()
{
    echo "welcome back" . $GLOBALS['globel_var']. "<br>";
}
test_globel_var();


echo ("serverName " . $_SERVER["SERVER_NAME"] . "<br>". "server method" . $_SERVER['HTTP_USER_AGENT']."<br>".$_SERVER['REQUEST_METHOD']."<br>".$_SERVER['SCRIPT_NAME']."<br>".$_SERVER['REQUEST_URI']);

// GETv& POST
//handlaing and submitting data from page to page inside website 
//get -->access a piece of data inside a url
//post --> is not allowed to be visible in url 
echo"<hr>";
?>
<a href ="?subject=PHP&web=webschool">test</a>
<?php
// if(isset($_GET["subject"]) && isset($_GET["web"]))
//     {
//         $subject = htmlspecialchars($_GET["subject"]);
//         $web = htmlspecialchars($_GET["web"]);
//         echo $subject ."<br>". $web;
//     }
//http://localhost/php_Holder/superGlobel.php?yourname=farooha
    echo $_GET["yourname"];

    //post

?>
<form action="superGlobel.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username" required>
    <label for="password">password</label>
    <input type="password" name="password" required>
    <input type="submit" name="submit" value="login">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $username = htmlspecialchars($_POST["username"]);
    // xxxlattack
    $password = htmlspecialchars($_POST["password"]);
    echo $username . "<br>" . $password . "<br>"; 
}

echo "<hr>";
//session 
//store info abt user inside session on the server side 
$_SESSION["user_id"] = "100";
$_SESSION["user_role"] = "Admin";
$_SESSION["user_name"] = "Ahmad";
if (isset($_SESSION["user_name"])) {
    echo "login as : ".$_SESSION["user_name"]. $_SESSION["user_role"]."<br>";
} else {
    echo "please login ";
}


?>
