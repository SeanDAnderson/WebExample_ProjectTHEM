<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Project T.H.E.M.</title>
        <link href="/projectTHEM/css/styles.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/projectTHEM/js/jquery.flexslider.js"></script>
        <script>
    $(function(){
        $("#journal").on('mouseenter', function(){
              $(this).css("color", "black");
              $(this).css("background-color", "red");
            });
        $("#journal").on('mouseleave', function(){
              $(this).css("color", "white");
              $(this).css("background-color", "#303030");
            });
        $("#loginbutton").on("click", function(){
            $("#login").toggle();
            });
        $("#submit").on("click", function(){
            alert("Login unavailable due to Illuminati observation.\n" +
            "Please try again when they blink.");
        });
        $(".jbutton").on("click", function(){
            var date = $(this).attr('id');
            $.post('/projectTHEM/php/journal.php', {date: date}).done(function (data){$('#journal').html(data);
                });
           });
        $('.flexslider').flexslider({
                slideshow: true,
                startAt: 0,
                slideshowSpeed: 2000,
                initDelay: 0,
                randomize: true,
                animation: "slide",
                controlNav: false
                
        });
    });
        </script>
    </head>
    <body>
        <?php
        ?>
        <header>
            <h1>Project T.H.E.M.</h1>
            <h2>The Truth Is WAY Out There<h2>
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="/projectTHEM/img/grey-alien.jpg" />
                            </li>
                            <li>
                                <img src="/projectTHEM/img/loch-ness-monster.jpg" />
                            </li>
                            <li>
                                <img src="/projectTHEM/img/patterson-bigfoot.jpg" />
                            </li>
                        </ul>
                    </div>
        </header>


        <nav>
            <input type="button" value="LOGIN" id="loginbutton"><br>
            <div id="login" style="display:none;">
                <form name="login">
                    <fieldset>
                        NAME:<br>
                        <input type="text" id="username" name="username" cols="20"><br>
                        PASSWORD:<br>
                        <input type="password" id="password" name="password" cols="20"><br>
                        <input type="button" id="submit" value="SUMBIT"><br>
                    </fieldset>
                </form>
            </div>
            <a href="/projectTHEM/index.php"> HOME </a><br>
            <a href="/projectTHEM/app.html"> Creature Sightings WebApp</a><br>
        </nav>


        <main>
            <input type="button" class="jbutton" value="May 18" id="0518">
            <input type="button" class="jbutton" value="May 19" id="0519">
            <input type="button" class="jbutton" value="May 28" id="0528">
            <input type="button" class="jbutton" value="May 31" id="0531">
            <div id="journal">
                <p>Please select a journal entry date.</p>       
            </div>
        </main>
        
        <Aside>
            <h3>Truths that may<br> be out there</h3>
            <a href='https://en.wikipedia.org/wiki/Bigfoot'> Sasquatch </a>
            <br><br>
            <a href='https://en.wikipedia.org/wiki/Loch_Ness_Monster'> The Loch Ness Monster</a>
            <br><br>
            <a href='https://en.wikipedia.org/wiki/Grey_alien'> The "Greys"</a>
        </Aside>



        <footer>
            <hr>
            Copyright Sean Anderson 2017. All rights reserved.<br>
            Text from Dracula by Bram Stoker (Thanks to <a 
                href="http://www.gutenberg.org/cache/epub/345/pg345.txt">Project Gutenberg</a>)
        </footer>

    </body>
</html>
