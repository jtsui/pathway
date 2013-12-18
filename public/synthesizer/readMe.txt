Search Bar Module
-----------------

The "modularized" version of the search bar works as follows (adjust url's according to your setup !):

The client page must include jQuery and jQuery UI. These four lines should be added just before closing </body> tag.

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="scripts/jquery-1.9.0.min.js"><\/script>')</script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script>window.jQuery.ui || document.write('<script src="scripts/jquery-ui-1.10.0.min.js"><\/script>')</script> 

The searchbar is injected as follows:

<script> var sbarAttr = {
              'backgroundIsWhite' : true, 
              'showHelpPane': true,
              'backgroundAlpha': '0.95',
              'buttonAlpha': '0.95'
            }; </script>
<script src="http://bussedesignstage.com/ajax/cl01.1/searchBar/initSearchBar.js"> </script>


All searchbar attributes are optional. The default values are:

backgroundIsWhite = true;
showHelpPane = 'true';
backgroundAlpha = '1';
buttonAlpha = '1';


backgroundIsWhite - true = white, false = black
showHelpPane - determines whether we will show the help pane for the searchbar upon page load.
backgroundAlpha - maybe set to achieve a glass pane like appearance.
buttonAlpha - maybe used to adjust the opacity of the three right hand buttons on the searchbar

The page must contain an empty container for the Search Bar to be loading into:

<div class="searchBarContainer"></div>


The server hosts the following files:

searchBar/initSearchBar.js
searchBar/searchBar.js
searchBar/activityLog.js

searchBar/normalize.css
searchBar/searchBar.css



Notification System
-------------------

All server messages are stored in the activities log, e.g. in the DOM, until the user closes the window . The log is hidden on page load but can be shown by clicking the log button. Activities on the client are listed on the left, server messages are listed on the right, in the order they have been logged/received. All log entries have a client side generated time stamp.

If the activities log is closed all incoming server messages are shown in a bubble next to the log button for 5 seconds. Opening the log pane will suspend showing the bubble.



Staging setup
-------------

The staging setup includes three php files that are called via ajax calls.

remote.php - provides search term suggestions as the user types into the input field
status.php - pushes a random message, regular and error.
formSubmitted-php - receives the form submission and send an acknowledgement: I received "....."



