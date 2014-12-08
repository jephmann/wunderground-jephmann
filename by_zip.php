<!DOCTYPE html>
<html>
    <head>        
        <!-- Read more at http://www.airpair.com/js/jquery-ajax-post-tutorial#qLHQ3UjfimxkoSSF.99 -->
        <title>jQuery AJAX POST Form</title>
        <meta charset="utf-8">      
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>WUnderGround by ZIP</h1>
        <h3>Based on:
            <a target="_blank" href="http://www.wunderground.com/weather/api/d/docs?d=data/forecast&MR=1">
                http://www.wunderground.com/weather/api/d/docs?d=data/forecast&MR=1
            </a>
        </h3>
        <!-- our form -->
        <form id='userForm'>
            <div>
                <input type='text' name='zip' placeholder='Enter 5-digit ZIP Code' />
            </div>
            <div>
                <input type='submit' value='Get Weather' />
            </div>
        </form>
        <!-- where the response will be displayed -->
        <div id='response'></div>
        
        <script>
            $(document).ready(function(){
                
                $('#userForm').submit(function(){
     
                    // show that something is loading
                    $('#response').html("<b>Loading weather...</b>");

                    /*
                     * 'weather.php' - where you will pass the form data
                     * $(this).serialize() - to easily read form data
                     * function(data){... - data contains the response from weather.php
                     */
                    $.post('weather.php', $(this).serialize(), function(data){

                        // show the response
                        $('#response').html(data);

                    }).fail(function() {

                        // just in case posting your form failed
                        alert( "Posting failed." );

                    });

                    // to prevent refreshing the whole page page
                    return false;

                });
            });
        </script>
    </body>
</html>