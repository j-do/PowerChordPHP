<!DOCTYPE html>
<!--
The MIT License

Copyright 2014 Jason "J-Do" Hittle .

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<html lang="en">
    <?php
    define('THISBESTBEDEFINED', 'OhItsDefinedOverHere');
    require_once 'includes.php';
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="PowerChordPHP: For when you ain't writing a symphony.
              A Simple PHP application framework for coders who just wanna plugin and Rock Out. Solves many of 
              the annoyances the traditional PHP MVC structure by having a DataGate object to extend. 
              This allows you to send superglobal data to and from Models directly in the view, skipping the controller. 
              Made for the SQlite PDO driver and only the SQlite PDO driver out of the box. PowerChordPHP comes with a 
              powerchord.sqlite database ready to use all you need do is extend the model class. You're too Rock 'n' Roll
              to worry about connecting to a database. You've got a Model to do that dirty work for you!
              Download the SQLite Manager add-on for Firefox, create some tables, extend the Model class, and jam!
              Portable, like a guitar on your back. You can copy your project directory and plop it down anywhere 
              thanks to SQLite. If you're hosting company pisses you off, pick up your directory and go.
              Focus on your PHP, javascript, and style. Churn out code like the Beatles churned out hits.">
        <meta name="author" content="Jason Hittle">
        <link rel="shortcut icon" href="icon_48.png">
        <title><?= PROJECT_NAME; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/styles.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <a class="navbar-brand" href="https://github.com/j-do/PowerChordPHP/archive/master.zip"><?= PROJECT_NAME; ?> Download</a>             
                <ul class="nav navbar-nav">
                    <li><a href="http://jdosdcodez.blogspot.com/">Blog</a></li>            
                </ul>
            </div>
        </div>
        <?php
        //MVC style with a Controller
        $ic = new Intro_Controller();
        //DataGate style without one
        require_once VIEW_DIR.'marketingJibbaJabba.php';
        ?>
        <footer style="background-color: #514831; position: static; bottom: 0px; padding: 10px; width: 100%;">     
            <a href="http://jdoscodez.blogspot.com/">
                <img src="img/powerChordLogoRect.svg" width="48" height="48" alt="icon_48"/>
            </a>
            <i>Powered by PowerChord &copy; Jason Hittle</i>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./js/jquery.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="./js/controllers.js"></script>
    </body>
</html>