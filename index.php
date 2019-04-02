<?php
   include "mail.php";
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
      <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="css/tablet.css" />
      <link rel="stylesheet" href="semantic/semantic.css">
      <title>David Yan | Portfolio</title>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
      <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   </head>
   <body>
      <div id="go-top"></div>
      <div class="startpage">
      <header id="header">
         <i class="large bars icon" onclick="menuButtonClicked()"></i>
         <a class="hover-title" href="index.php">
            <h2 class="title">DAVID YAN</h2>
         </a>
         <ul class="top-nav">
            <li>
               <a href="#about-wrapper">
                  Om mig
               </a>
            </li>
            <li>
               <a href="#projekt">
                  Projekt
               </a>
            </li>
            <li>
               <a href="#kontakt">
                  Kontakt
               </a>
            </li>
         </ul>
      </header>
     
         <div class="intro">
               <h1> &lt; Hallå där! Mitt namn är <span>David</span> &gt;</h1>
               <p>Jag är en 21-årig kille som studerar till Full-stack utvecklare i Göteborg</p>
         </div>
         <div class="social-links">
               <li><a href="https://github.com/davidyanis">Github</a></li>
               <li><a href="https://www.linkedin.com/in/david-yan97/">LinkedIn</a></li>
         </div>

      </div>
   <div class="aboutme-container">
   <div class="ui container" id="about-wrapper" >
         <h1 class="ui header">Om mig</h1>
         <p>Jag är en 21-årig kille som är ständigt hungrig på att utvecklas. Jag är uppväxt i Malmö och nyligen flyttat till Göteborg för att fortsätta studier. Jag studerar till full-stack utvecklare med inriktning mot e-handel. Det bästa med utbildningen är praktik, det är här jag får visa upp vad jag lärt mig och vad jag inte har lärt mig. Jag kan dessutom bidra till en god arbetsmiljö med en positiv attityd och humor. </p>
         <p>På min fritid hittar du mig i gymmet eller på en uteservering med härligt umgänge.</p>
         <a class="education-link" href="http://medieinstitutet.se/webbutvecklare-ehandel/mal/" target="_blank">
            <h3>Medieinstitutet - Webbutvecklare inom e-handel</h3>
         </a>

      <h1 class="ui header">Jag... </h1>
         <p>...skapade min första sida när jag var 17 år gammal</p>
         <p>...är van att jobba med agila metoder</p>
         <p>...skulle beskriva mig själv som social, hjälpsam, driven, optimistisk</p>
         <p>...bär en bred kunskap inom <span>HTML & CSS, Javascript</span></p>
         <p>...har en god överblick över <span>React, Typescript, PHP, mySQL, phpMyAdmin</span> och <span>SEO</span></p>
         <p>...har arbetat med CMS som <span>WordPress</span></p>
         <p>...är erfaren med <span>Semantic UI & Bootstrap</span></p>
         <p>...tänker alltid på <span>UI/UX</span> när jag skapar något</p>

      
   </div>
   </div>
   <div class="ui hidden divider"></div>
   <div class="ui container" id="projekt">
      <h1 class="ui horizontal divider header">Projekt</h1>
      <div class="ui hidden divider"></div>
      <div class="ui stackable three column grid">
         <div class="column">
           <div class="ui fluid card">
             <div class="image">
               <img src="/images/restaurangkina.png">
             </div>
             <div class="content">
               <div class="header">Restaurang Kina</div>
               <div class="description">
                  En hemsida jag byggde under min gymnasietid till Restaurang Kina i Malmö. Hemsidan är live och har dagliga besökare.
                </div>
             </div>
             <a href="www.restaurangkina.com" target="_blank" class="ui blue bottom attached button visit-site-button">
               Besök sidan
               <i class="angle right icon"></i>
            </a>
           </div>   
         </div>
         <div class="column">
               <div class="ui fluid card">
                 <div class="image">
                   <img src="/images/techstore.png">
                 </div>
                 <div class="content">
                   <div class="header">Techstore</div>
                   <div class="description">
                    Client side e-handels projekt under front-end kursen, skapades tillsammans med 2 av mina klasskamrater. 
                    </div>
                 </div>
                 <a href="https://ranchino.github.io/Tech-Store" target="_blank" class="ui blue bottom attached button visit-site-button">
                   Besök sidan
                   <i class="angle right icon"></i>
                </a>
               </div>   
         </div>
         <div class="column">
               <div class="ui fluid card">
                 <div class="image">
                   <img src="/images/webbshop_dala.png">
                 </div>
                 <div class="content">
                   <div class="header">Dalamat</div>
                   <div class="description">
                      Server-side projekt som omfattar allt vi har lärt oss under back-end kursen. Skapades tillsammans med mina 3 klasskamrater
                    </div>
                 </div>
                 <a href="www.webbutvecklinggöteborg.se" target="_blank" class="ui blue bottom attached button visit-site-button">
                   Besök sidan
                   <i class="angle right icon"></i>
                 </a>
               </div>   
         </div>
         <div class="column">
               <div class="ui fluid card">
                 <div class="image">
                   <img src="/images/sweratel.png">
                 </div>
                 <div class="content">
                   <div class="header">Sweratel</div>
                   <div class="description">
                      Pågående sido projekt.
                    </div>
                 </div>
                 <div class="ui blue bottom attached button visit-site-button">
                  Besök sidan
                   <i class="angle right icon"></i>
                 </div>
               </div>   
         </div>
         <div class="column">
               <div class="ui fluid card">
                 <div class="image">
                   <img src="/images/horoscope.png">
                 </div>
                 <div class="content">
                   <div class="header">Horoskop</div>
                   <div class="description">
                      En enkel horoskop kalkylator som tar reda på ditt stjärntecken om du fyller i input fältet. Lärde mig hur en REST_API funkar.
                    </div>
                 </div>
                 <a href="REST-api/index.php" target="_blank" class="ui blue bottom attached button visit-site-button">
                  Besök sidan
                   <i class="angle right icon"></i>
                </a>
               </div>   
         </div>
       </div>
   </div>
         
      
   </div>
     
      
         <div id="kontakt" class="ui contact-container">
            <h1>Vill du veta mer? Tveka inte att höra av dig.</h1>
            <form class="ui large form contact-form" method="POST" action="index.php">
                  <div class="required field">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="E-mail adress" id="email" autocomplete="on">
                  </div>
                  <div class="required eight wide field">
                    <label>Namn</label>
                    <input type="text" name="name" placeholder="Namn" id="name" autocomplete="on">
                  </div>
                  <div class="required field">
                    <label>Företag</label>
                    <input type="text" name="company" placeholder="Ditt företag" id="company">
                  </div>
                  <div class="field">
                        <label>Meddelande</label>
                        <textarea name="message" id="message"></textarea>
                  </div>
                  <div class="actions">
                     <input name="sendMail" class="ui orange button sendButton" type="submit" disabled="disabled" value="Skicka meddelande">
                   </div>
                  <div class="ui error message"></div>
            </form>
          </div>
       
          <footer>
             <div class="ui grid scrollTop">
               <a href="#go-top"><i class="angle double up huge icon"></i></a>
               <h3>david.yan@medieinstitutet.se | <a href="tel:0738769098">0738769098</a></h3>
            </div>
         
          </footer>
          <script src="script.js"></script>
          <script src="semantic/validation.js"></script>
         <script src="semantic/semantic.min.js"></script>
   </body>
</html>
