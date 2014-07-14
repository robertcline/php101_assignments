<!DOCTYPE html>
<!--
Assignment Two - Robert Cline - PHP101 Class
codeCAMP - July 2014
Chris Winn - Instructor
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homework Assignment Two</title>
    </head>
    <body>
       <?php
// Assignment Two
	/**
	 * Challenge 1: Can you run this script from the command line?  Yes .. but
	 * Tip: Use the `cd` command to move into the same directory.
	 * Then you can run `php index.php`
  
       Answer:
       At the Windows command prompt (in the subdirectory C:\wamp\www\php2)
       > when I type:
       php -S localhost:3000
       
       I receive the following response:
       'php' is not recognized as an internal or external command,
       operable program or batch file.
       
       After trying multiple times, using different combinations of commands I
       was unable to get the expected
                  PHP 5.4.17 Development Server started at (Day, Date, Time)
                  Listening on http://localhost:3000
                  Document root is /........
                  Press Ctrl-C to quit.
        response from the system to work -- so I elected to take the Ctrl-C option to quit
        
        My script is located in:
               c:/wamp/www/php2/index.php

       Since I am running in a Windows8.1 environ, I entered the code below in the Windows command line:
             c:\wamp\www\php2>start http://localhost/php2<RETURN>
       where index.php is implied in directory php2

       (This LAUNCHES the program in my default browser - however, I'm no longer at the command line)
       This is rather cumbersome.
       
       Unable to get the php -S command to function in the Windows command line,
       I decided to use the free Windows based editor PHPCoder, it provides an integrated output window
       which appears to accomplish similar results.
       
       If there is a way to get the listener to work in Windows, I'd like to know how.
	 */

	/**
	 * Challenge 2: We are looping through an array, but the array is empty!
	 * Can you add our two blog instances into the array?   - YES!
	 * What happens if you add them more than once?  It only does it once
	 */
    /**
	 * A simple blog entry.
*/
   // test
   echo "Homework - Assignment Two<br><br>";
   // end test

   class Blog {
   /** @var string **/
      var $title;
//getShortTitle($title);
      
      } //end class
 	$blog1 = new Blog();
	$blog1->title = 'My first blog. In this episode, we take a look at classes and arrays!';
//    var_dump($blog1);

	$blog2 = new Blog();
	$blog2->title = 'My second blog. This week our PHP buzzword is instantiation!';
//    var_dump($blog2);

// add a duplicate for effect:
	$blog2 = new Blog();
	$blog2->title = 'My second blog. This week our PHP buzzword is instantiation!';
//    var_dump($blog2);
// end add a duplicte

	$blog3 = new Blog();
	$blog3->title = 'My third blog. Will I need to acquire a Mac to finish this course?';
//    var_dump($blog3);

    $blogs = array ($blog1, $blog2, $blog3,);

	foreach ($blogs as $blog)
         {
//*		print $blog->getShortTitle();       // function
           print getShortTitle($blog->title);       // function
           print $blog->title;
           echo '<hr>';
            }
	/**
	 * Challenge 3: Our titles are too long for our new blog.
	 * In our foreach() loop, we refer to getShortTitle(), but it's broken!
	 * Can you add a class method that returns a shortened version of the title?
	 * Hint: PHP has a built-in function called `strpos()`
	 */

function getShortTitle($title)    // is this a class method or function?
           {
           $short_title = $title."<br>";
           $return_short_title = substr($short_title, 0,strpos($short_title, '.'));  // move chars till '.' is reached
           $return_short_title = $return_short_title.":<br>";
           return $return_short_title;
           }
           
// Current Super Global values:
// List here the current globals you want to print
// This could be your own custom globals
   $globals = array(
            '$_SERVER'    => $_SERVER,  '<br>',
            '$_ENV'       => $_ENV,     '<br>',
            '$_REQUEST'   => $_REQUEST, '<br>',
            '$_GET'       => $_GET,     '<br>',
            '$_POST'      => $_POST,    '<br>',
            '$_COOKIE'    => $_COOKIE,  '<br>',
            '$_FILES'     => $_FILES,   '<br>',
            );
            echo '<h1>Display Superglobals using print_r:</h1>';
            print_r($globals);

         ?>
    </body>
</html>
