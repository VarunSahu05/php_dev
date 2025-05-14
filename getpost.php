
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label>password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Log in"><br>
    </form>

</body>
</html><?php
    // $_GET is used to collect data from a form with method="get"
    // $_POST is used to collect data from a form with method="post"
    // $_REQUEST is used to collect data after submitting an HTML form
    // $_SERVER is used to collect data about headers, paths, and script locations
    // $_SESSION is used to store session variables
    // $_COOKIE is used to collect data from cookies
    // $_FILES is used to collect data from file uploads
    // $_ENV is used to collect environment variables
    // $_GLOBALS is used to access global variables from anywhere in the PHP script

    // $GET, $POST= special variables used to collect data from HTML forms.
    // data issent to the file in the action attribute of the <form>

    // $GET = Data is sent to the server in the URL or appended to the url
    //        Not secure, as data is visible in the URL
    //        Char limit of 2048 characters
    //        bookmark is possible w/ values
    //        GET requests can be cached
    //        Better for a search page
    //        <form action="index.php" method="get">

    // $POST = Data is sent to the server in the body of the request
    //         More secure, as data is not visible in the URL
    //         No char limit
    //         Not bookmarkable
    //         POST requests are not cached
    //         Better for a login page
    //         <form action="index.php" method="post">

   // echo "{$_GET['username']}<br>";

    echo "{$_POST['username']}<br>";
    echo "{$_POST['password']} <br>";

?>