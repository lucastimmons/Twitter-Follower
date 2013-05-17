# Twitter Follower

A Twitter app that allows users to follow everyone from a list and then tweet that they did. 

We used it to have everyone follow all of our journalist with just one click. 

Built by @designerdon and @lucastimmons using the the OAuth 1.0A library specifically for use with the Twitter API written in PHP by @themattharris.

## Dependencies

From OAuth 1.0A library written in PHP by @themattharris:
The library has been tested with PHP 5.3+ and relies on CURL and hash_hmac. The
vast majority of hosting providers include these libraries and run with PHP 5.1+.

The code makes use of hash_hmac, which was introduced in PHP 5.1.2. If your version
of PHP is lower than this you should ask your hosting provider for an update.


## Usage

Upload the files to your server.

You will have to edit two of the files. 

First make a Twitter list. https://twitter.com/YOURTWITTERNAME/lists. Make sure you note the name you use as provided in the URL. For example your list name is My List, but in the URL it's my-list. 

Then go to https://dev.twitter.com/ and sign in with the your twitter account. Once you are signed in, click on your avatar on the top right to bring up a pull down menu. Select "My Applications". Click on the "Create new application" button and then fill out the form.

Once you've created the app you'll need to make a couple more changes. On the settings tab make sure that you have the radio box beside "Read and write" selected. The callback URL has to be a URL on the same domain as where you are hosting the files.

Go back to the Details tab and look fort your "Consumer Key" and your "Consumer secret". These are important and can grant anyone access to your app, so don't share them around.

Now open index.php. Edit lines 8 and 9. Put your consumer key and consumer secret in the right spots. Make sure they are inside the single quotes. 

Edit line 24 to include what you'd like the person to tweet when the use your app. Remember the character limit on tweets. 

Edit lines 44 and 46 to include the URL you'd like people who use your app to return to. 

Edit line 50 to reflect what you'd like it to say while people are waiting to be redirected. 

Now open up lib/TwitterApp.php. 

Edit line 223. Fill in the correct information where it says LISTNAME and USERNAME. So it would be 'my-list' and 'twitterusername'.

Save all your files and then upload them to a server. 



## Change History
### 1.0 - 17 May 2013
- First commit.


## Community

License: + This work is licensed under the Creative Commons Attribution 3.0 Unported License.
+ Go nuts. There's no warranty. You're on your own.

Check out the Twitter Developer Resources: <https://dev.twitter.com>

## To Do

