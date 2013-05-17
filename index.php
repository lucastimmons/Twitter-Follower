<?php

// include our libraries
include 'lib/tmhOAuth.php';
include 'lib/TwitterApp.php';

// set the consumer key and secret
define('CONSUMER_KEY',      'KEY HERE');
define('CONSUMER_SECRET',   'SECRET HERE');

try {
    // our tmhOAuth settings
    $config = array(
        'consumer_key'      => CONSUMER_KEY,
        'consumer_secret'   => CONSUMER_SECRET
    );

    // create a new TwitterAvatars object
    $ta = new TwitterApp(new tmhOAuth($config));

    // check our authentication status
    if($ta->isAuthed()) {
                $ta->getList();
                $ta->sendTweet('I just followed all the members of a list in one click. You can too at yourlink.com.');
            }

    // did the user request authorization?
    else {
        // start authentication process
        $ta->auth();
    }
} catch(Exception $e) {

    // catch any errors that may occur
    $error = $e;
    var_dump($e);
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
    <title>Now following</title>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://yourlink.com">
        <script type="text/javascript">
            window.location.href = "http://yourlink.com"
        </script>
    </head>
    <body>
         <p>If you are not redirected automatically, follow this <a href='http://yourlink.com'>link</a>.</p>
    </body>
</html>