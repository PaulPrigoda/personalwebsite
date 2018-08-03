<!DOCTYPE html>
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="final.css">
    <title>PT | Official Site</title>
        
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    </head>
    
    <script>
        //call request for show times
        function request(){
            var xmlhttp=new XMLHttpRequest( );
            xmlhttp.onreadystatechange=function( ){

                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    var xmlDoc = xmlhttp.responseXML;
                    var r = xmlDoc.documentElement;
                    var list = r.getElementsByTagName("College");
                    var string = "";
                    for(i=0; i< list.length; i++){
                        string += "<option>" + list[i].innerHTML + "<option>"

                    }
                    var pick = document.getElementById("out");
                    pick.innerHTML = string;
                    //alert(pick);

                    }
                }

            xmlhttp.open("GET","shows.xml",true);
            xmlhttp.send( );
        }
        
        function draw() {
			var canv=document.getElementById("intropic");
			var c=canv.getContext("2d");
			var img = new Image();
			var w, h;
			var factor = 0.4;

			img.onload = function(){
				w = this.width * factor;
				h = this.height * factor;
				canv.width = w;					// resize the canvas to the new image size
				canv.height = h;

				c.drawImage(img, 0, 0, w, h );   //scales the image to fit into wxh pixels with the image's height and width ratio
			}
			img.src = 'lastdancenotext.jpg';
		}
        
        function drop(){
            document.getElementById("form").style.display="block";

        }
        
        </script>
        
    
    
    
    <body onload="draw()">
        
        <div class="container text-center">
        <header> 
            <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#intro" data-toggle="tab" >Welcome</a></li>
                <li><a href="#biography" data-toggle="tab" >Bio</a></li>
                <li><a href="#musicpage" data-toggle="tab">Music</a></li>  
                <li><a href="#videopage" data-toggle="tab">Videos</a></li>
                <li><a href="#artpage" data-toggle="tab">Album Art</a></li>
                <!--<li><a href="#showpage" data-toggle="tab">Shows</a></li>-->
                <!--<li><a href="#emaillist" data-toggle="tab">Stay Connected</a></li> -->
                <!--<li><a href="#docp" data-toggle="tab">Documentation</a></li>-->
              </ul>
                
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>     
        </header>
            
            
            
             <div class="tab-content">
                 
                <div id="intro" class="tab-pane fade in active">
                    <h2>PT</h2>
                    <h2>The Adventures of Junior Year Drops Starts January 27th!!</h2>
                    
                    <div class="container text-center">
                        <canvas id="intropic"></canvas>
                    </div>
                </div>
                 
                <div id="biography" class="tab-pane fade">
                    <h2>Biography</h2>
                    <p>PT is a Westchester native, attending Mamaroneck High School and currently in School at Connecticut College. He produces, songwrites and sells all his music. He considers himself a one man army. He was born in New York City and grew up in Westchester his whole life. He enjoys mexican food very much and will literally eat anything in the world. He is a Computer Science major and an Economics minor, but hope with hard work that one day he can pursue music as a career.</p>
                </div>
                 
                <div id="musicpage" class="tab-pane fade">
                    <h3>Top 5 Most Popular Songs</h3>
                    <!-- <section class="player">
                        <h2>Song of the Day</h2>
                        <audio controls>
                            <source src="Infinity.mp3">
                        </audio>
                    </section>-->
                    
                    <br>
                    <br>
                    
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260362258&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/256771923&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/298640290&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/319915650&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269621539&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    
                    <br>
                    <br>
                    <br>
                    
                    <h4>The Adventures of Sophomore Year on Spotify/Apple Music</h4>
                    
                    <iframe src="https://open.spotify.com/embed/album/2lGM82WBMF7hgwqsuLpJou" width="49%" height="500px" frameborder="0" allowtransparency="true"></iframe>
                    
                    <iframe src="https://tools.applemusic.com/embed/v1/album/1249394370?country=us" height="500px" width="49%" frameborder="0"></iframe>
                    
                    <br>
                    <br>
                    <br>
                    
                    <h4>The Adventures of Freshmen Year on Spotify/Apple Music</h4>
                    
                    <iframe src="https://embed.spotify.com/?uri=spotify%3Aalbum%3A3QHDBtbwEJMLzZczSYfNfs" width="49%" height="500px" frameborder="0" allowtransparency="true"></iframe>
                    
                    <iframe src="https://tools.applemusic.com/embed/v1/album/1123339998?country=us" height="500px" width="49%" frameborder="0"></iframe>
   
                    
                    
                </div>
                 
                <div id="videopage" class="tab-pane fade">
                    <!--<section id="songday">
                    <h2>Song of the Day</h2>
                    <video id="media" width="600" height="500" controls>
                        <source src="Infinity.mp4" type='video/mp4' />
                    </video>
                        
                    </section>-->
                    
                    <section id="Song Videos">
                    <h2>Song Videos</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eVRQExmd47g" frameborder="0" allowfullscreen></iframe>
                        
                    </section>
                    
                    
                </div>
                 
                <div id="artpage" class="tab-pane fade">
                    
                    <img src="AOSYInsideUPDATED.jpg" width="700" height="700">
                    <img src="AOSY.jpg" width="500" height="500">
                    <img src="wiwb.jpg" width="500" height="500">
                    <img src="lastdancecover.jpg" width="500" height="500">
                    <img src="AOFY.jpg" width="500" height="500">
                    <img src="AOFYInsideUPDATED.jpg" width="500" height="500">
                    <img src="infinity.jpg" width="500" height="500">
                </div>
                 
                <div id="showpage" class="tab-pane fade">
                    <h2>Shows</h2>
                    <div id="out"></div>
                    
                    <button type="button" onClick="request()">See Shows</button>
                    
                </div>
                 
          <!--      <div id="emaillist" class="tab-pane fade">
                    <h2>Stay Connected</h2>
                    <p>Enter Info</p>
                    <button id="create" name="create" onclick="drop()">Add Yourself</button>
                    
                    <form action="final.php" method="post" id="form">
                    Email:  <input type="text" id="emailbox" name="emailbox">
                    Phone Number:  <input type="text" id="phonebox" name="phonebox">

                    <button type="submit" id = "submitbutton" name="button">Submit</button>
                    </form>-->
                
                <?php 

                    $db_email = mysqli_connect("localhost", "root", ""); // open connection
                    if (!$db_email)
                        die("Unable to connect: " . mysqli_connect_error());  // die is similar to exit

                    if (mysqli_query($db_email, "CREATE DATABASE email;")) // create the database
                        echo "Enter your contact information";
                    
                        mysqli_select_db($db_email, "email"); 
                    
                         $cmd = "CREATE TABLE list(
                                      email varchar(50) NOT NULL PRIMARY KEY,
                                      password varchar(15)
                                      );";
                    
                        mysqli_query($db_email,$cmd);
                    
                    if (isset($_POST["button"])){
                       // echo "HI";
                        $email = mysqli_real_escape_string($db_email, $_POST["emailbox"]);
                        $phone = mysqli_real_escape_string($db_email, $_POST["phonebox"]);
                        
                        $insert = "INSERT INTO list (email, password) VALUES ('"
                                    . $email . "','$phone');";
                        
                        if( mysqli_query($db_email, $insert) )
                            echo "Your information ha been added!";    
                    }

                    mysqli_close($db_email); //close connection
                ?> 
             <!--   </div> 
                 
            <div id="docp" class="tab-pane fade">
                <h3>The Project Documentation Page</h3>
                
                <p>HTML - canvas on welcome page, video on video page and forms from database</p>
            
                <p>Javascript - drawing the canvas on welcome page</p>
                
                <p>XML - file for shows on show page</p>
                
                <p>PHP/MySQL - database that saves user email and phone number</p>
                 
  
                </div>-->
            </div>
        </div>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </body>
</html>