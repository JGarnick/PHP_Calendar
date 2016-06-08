<?php
include_once("calendar.php");
?>

<!DOCTYPE html>
<html>

   <head>
   <!--
      New Perspectives on HTML, CSS, and JavaScript
      Tutorial 12
      Tutorial Case

      July at the Chamberlain Civic Center
      Author: Maria Valdez
      Date:   3/1/2015

      Filename:         ccc.htm
      Supporting files: back.jpg, back2.png, back3.png, calendar.css,
                        calendar.js, ccc.css, ccc.png, events.js,
                        modernizr-15.js, tab.jpg, tabred.jpg
   -->

      <meta charset="UTF-8" />
      <title>This Month at the Chamberlain Civic Center</title>
      <script src="modernizr-1.5.js"></script>

      <link href="ccc.css" rel="stylesheet" type="text/css" />

      <link href="calendar.css" rel="stylesheet" type="text/css" />
      

   </head>

   <body>
      <section id="main">
         <header>
            <img src="ccc.png" alt="The Chamberlain Civic Center" />
         </header>

         <nav class="horizontal">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Events</a></li>
               <li><a href="#">Box Office</a></li>
               <li><a href="#">Facilities</a></li>
               <li><a href="#">Donations</a></li>
               <li><a href="#">Directions</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
         </nav>


         <article id="summary">
            <h1>This Month at the CCC</h1>

            <figure id="events">
               <?php
                  calendar("July 6, 2015");
               ?>
            </figure>

            <p>Expect a lot of fireworks in July at the Chamberlain Civic Center. 
               The month starts out with a bang with a visit from Ted Gilliam and 
               his award-winning one-man show, <a href="#">The Future is Prologue</a>, 
               based on the life and times of George Orwell. On July 4th, join the 
               Chamberlain Pops Orchestra for an evening of <a href="#">American 
               Favorites</a> punctuated with a fireworks finale.
            </p>
            <p>Broadway comes to the CCC with seven performances of <a href="#">Wicked</a>, 
               starring Elsa Maine and Laura Beede. These performances are sure to sell 
               out, so order your seats today. Discounted group rates are available for 
               parties of 15 or more. We're not done with Broadway yet as noted singer 
               and pianist Tony Trindle provides a splendid evening of pop and jazz 
               classics in <a href="#">Stardust Memories</a>.
            </p>
            <p>The young and old will enjoy <a href="#">The Menace from Earth</a>, a stage 
               production that can best be described as a <i>live-action graphic novel</i>.
               More than 1,250 bright images join live sound artists and voice actors to 
               pull you into the Future History stories of Robert A. Heinlein. 
               It's definitely a show you won't soon forget! And for the very young and 
               their families, the CCC is proud to welcome back our annual
               <a href="#">Kids Fair</a> featuring local area musicians, storytellers, 
               jugglers, clowns, and magic acts. Best of all:
               admission is <i>free</i>.
            </p>
            <p>School may be out, but learning continues at the CCC with two lectures in
               our ongoing <a href="#">Life University</a> series. Kathy Laubmeir talks 
               about the future of finance in <a href="#">Saving for Tomorrow</a> and 
               David Wu discusses <a href="#">Black Holes, etc.</a> describing what 
               Einstein got wrong.
            </p>
            <p>As always, join us on Sunday mornings for the <a href="#">Classics 
               Brunch</a> with music provided by the Carson Quartet. Seating is limited, 
               so please reserve your table for this popular series.
            </p>

         </article>

         <footer>
            <address>
               The Chamberlain Civic Center &nbsp;&nbsp;&nbsp;
               2011 Canyon Drive &nbsp;&nbsp;&nbsp;
               Chamberlain, SD 53725 &nbsp;&nbsp;&nbsp;
               (605)555-8741
            </address>
         </footer>

      </section>

   </body>

</html>