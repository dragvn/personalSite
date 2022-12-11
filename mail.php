<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = 'From:'.$name.'<'.$email.'> <'.phone.'>\r\n';
$recipient = 'deatongilmore@gmail.com';

mail($recipient, $subject, $message, $mailheader)
or die('ERROR');

echo'

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <div  class="bully">
                        <li class="navLinks"><a href="index.html"><img class="icon" src="icons/home.png"></a></li>
                        <li><a href="https://twitter.com/AggregateError" target="_blank"><img class="navLinks icon" src="icons/twitter-sign.png"></a></li>
                        <li><a href="https://www.linkedin.com/in/dragvn/" target="_blank"><img class="navLinks icon" src="icons/linkedin.png"></a></li>
                        <li><a href="https://github.com/dragvn" target="_blank"><img class="navLinks icon" src="icons/github.png"></a></li>
                        <li><a href="https://codepen.io/dragvn" target="_blank"><img class="navLinks icon" src="icons/codepen.png"></a></li>
                    </div>
                    <li class="navLinks"><a href="aboutMe.html">About Me</a></li>
                    <li class="navLinks"><a href="techStack.html">Skills</a></li>
                    <li class="navLinks"><a href="contact.html">Contact</a></li>
                    <li class="navLinks"><a href="projects.html">Projects</a></li>
                </ul>
            </nav>
        </header>

        <main id="afterSubmitMain">
            <div class="afterSubmitWrapper">
                <p class="afterSubmitMessage">Thank you for contacting me, I look forward to working with you</p>
            </div>
        </main>

    </body>
</html>



';

?>