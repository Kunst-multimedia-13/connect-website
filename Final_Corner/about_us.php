<!DOCTYPE html>
<html lang="DE">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>con:nect</title>
  <link rel="stylesheet" href="style.css" />
  <link id="favicon" rel="icon" href="assets/Connect_Illus_Dots.svg" type="image/svg" />

  <style>
    .spender {
      display: flex;
      flex-flow: row wrap;
      align-items: flex-start;
      align-content: flex-start;
      align-items: center;
    }

    .spender>* {
      padding-right: 42px;
      width: 15vw;
      min-width: 50px;
      max-width: 150px;
    }
  </style>
</head>

<body class="background-image">
  <header>
    <nav class="navbar">
      <ul class="menu body_large">
        <li>
          <a href="./index.php">
            <h6>Startseite</h6>
          </a>
        </li>
        <li>
          <a href="./about_us.php">
            <h6 class="selected_nav">Über uns</h6>
          </a>
        </li>
        <li>
          <a href="./contact.html">
            <h6>Kontakt</h6>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="content">
    <!-- Über uns -->
    <div class="div-left-1of2">
      <h1>Wer wir sind</h1>
      <p class="body_standard">So wie es zwischen Seele und Körper eine Verbindung gibt, ist auch der Körper mit seiner Umgebung verbunden.“ – Khalil Gibran<br />Alles was wir in unserem Leben denken, tun und wollen, verbindet sich. Eindrücke, Personen, Gegenstände und viele weitere alltägliche Dinge verknüpfen wir miteinander. Es entsteht Neues – Kontakte, Erzeugnisse oder Erlebnisse. Alles Neue kann sich als schlecht oder als gut erweisen. Folglich versuchen wir die Verbindung entweder zu halten oder zu lösen. Es baut sich Stück für Stück ein großes Netzwerk aus, welches letztendlich unsere Identität beschreibt.</p>
    </div>
    <div class="div-right-2of2">
      <h1 class="textEN">Who we are</h1>
      <p class="body_standard textEN">"Just as there is a connection between the soul and the body, the body is also connected to its environment." - Khalil Gibran Everything we think, do and want in our lives connects. We connect impressions, people, objects and many other everyday things. New things are created - contacts, products or experiences. Everything new can turn out to be bad or good. Consequently, we either try to keep the connection or to break it. Piece by piece, a large network is built up, which ultimately describes our identity.</p>
    </div>


    <form class="gallery" action="artwork.php" request="GET">
      <?php
      $artists = ["Angela", "AnnaLena", "Eli", "Elli", "JuliaC", "JuliaP", "Juliana", "LauraH", "LauraM", "Leslie", "Magdalena", "Nassim", "Nataliia", "Raffaela", "Ricarda", "Samuel", "Sandra", "Thao", "Theresa", "Tobias", "Yunuo"];
      //shuffle($artists);
      foreach ($artists as $artist) {
      ?>
        <button class="galleryImage" type="submit" name="artist" value="<?php echo $artist ?>"><img class="galleryImage" src="media/<?php echo $artist . "_portrait.jpg" ?>"></button>
      <?php
      }
      ?>
    </form>

    <img class="dots" src="assets/Connect_Illus_Dots.svg" alt="divider dots" />
    <!-- Danksagung -->
    <div class="div-left-1of2">
      <h1>Danksagung</h1>
      <p class="body_standard">Wir möchten uns herzlich bei Bashira Cabbara für ihre Betreuung und Hilfe bei der Vorbereitung unserer Ausstellung bedanken. Ein besonderes Dankeschön gilt unserer Studiengangsleiterin Dr. Karin Guminski, die uns im Laufe unseres Studiums immer unterstützt und beraten hat, sowie Dr. Daniel Botz, Rico Sperl und Prof. Heinrich Hußmann. Außerdem danken wir dem Kunstlabor 2 für die Bereitstellung der Räumlichkeiten. Wir danken auch unseren Freunden, Familien und allen weiteren Unterstützenden. Insbesondere gilt unser Dank den Spendengebern, deren finanzielle Unterstützung die Ausstellung erst möglich gemacht hat.</p>
    </div>
    <div class="div-right-2of2">
      <h1 class="textEN">Note of thanks</h1>
      <p class="body_standard textEN">We would like to express our sincere thanks to Bashira Cabbara for her supervision and help in preparing our exhibition. A special thank you goes to our course director Dr. Karin Guminski, who always supported and advised us during our studies, as well as Dr. Daniel Botz, Rico Sperl and Prof. Heinrich Hußmann. In addition, we would like to thank the Kunstlabor 2 for providing the space. We also thank our friends, families and all other supporters. In particular, we would like to thank the donors whose financial support made the exhibition possible in the first place.</p>
    </div>
    <!-- Spender -->
    <span class="spender">
      <img src="assets/spender/lfa.png">
      <img src="assets/spender/interpage.png">
      <img src="assets/spender/euraneg.png">
      <img src="assets/spender/davero.png">
      <img src="assets/spender/xrhub.png">
      <img src="assets/spender/boesner.png">
    </span>

  </section>
  <div class="spacing_64"></div>
  <footer class="main-footer" style="background-color: var(--secondary-beige); z-index: 0">
    <div class="footer-content">
      <div class="spacing_48"></div>
      <h3 style="height: 45px">Kontakt</h3>
      <div class="spacing_32"></div>
      <h6 class="height" style="color: var(--primary)">email</h6>
      <div class="spacing_16"></div>
      <p class="body_large">connect_art@lrz.uni-muenchen.de</p>

      <div class="spacing_32"></div>


      <h6 class="height" style="color: var(--primary)">Öffnungszeiten</h6>
      <div class="spacing_16"></div>
      <p class="body_large"> Freitag ab 19:00 </br> Samstag 10:00 – 20:00</br> Sonntag 10:00 – 17:00</p>

      <div class="spacing_32"></div>

      <div id="header-thumbnails">
        <a href="https://www.instagram.com/art_multimedia/" target="_blank"><svg class="icon" width="24" height="24" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.0002 5.75806C8.61309 5.75806 5.80664 8.51612 5.80664 11.9516C5.80664 15.3871 8.56471 18.1452 12.0002 18.1452C15.4357 18.1452 18.1937 15.3387 18.1937 11.9516C18.1937 8.56451 15.3873 5.75806 12.0002 5.75806ZM12.0002 15.9193C9.82277 15.9193 8.03245 14.129 8.03245 11.9516C8.03245 9.77419 9.82277 7.98386 12.0002 7.98386C14.1776 7.98386 15.9679 9.77419 15.9679 11.9516C15.9679 14.129 14.1776 15.9193 12.0002 15.9193Z" />
            <path d="M18.4355 7.01611C19.2104 7.01611 19.8387 6.38786 19.8387 5.61288C19.8387 4.8379 19.2104 4.20966 18.4355 4.20966C17.6605 4.20966 17.0322 4.8379 17.0322 5.61288C17.0322 6.38786 17.6605 7.01611 18.4355 7.01611Z" />
            <path d="M22.0645 1.98387C20.8065 0.677419 19.0161 0 16.9839 0H7.01613C2.80645 0 0 2.80645 0 7.01613V16.9355C0 19.0161 0.677419 20.8065 2.03226 22.1129C3.33871 23.371 5.08065 24 7.06452 24H16.9355C19.0161 24 20.7581 23.3226 22.0161 22.1129C23.3226 20.8548 24 19.0645 24 16.9839V7.01613C24 4.98387 23.3226 3.24194 22.0645 1.98387ZM21.871 16.9839C21.871 18.4839 21.3387 19.6935 20.4677 20.5161C19.5968 21.3387 18.3871 21.7742 16.9355 21.7742H7.06452C5.6129 21.7742 4.40323 21.3387 3.53226 20.5161C2.66129 19.6452 2.22581 18.4355 2.22581 16.9355V7.01613C2.22581 5.56452 2.66129 4.35484 3.53226 3.48387C4.35484 2.66129 5.6129 2.22581 7.06452 2.22581H17.0323C18.4839 2.22581 19.6935 2.66129 20.5645 3.53226C21.3871 4.40323 21.871 5.6129 21.871 7.01613V16.9839Z" />
          </svg></a>
        <a href="https://www.facebook.com/Art.Multimedia.Kollektiv/" target="_blank"><svg class="icon" width="24" height="24" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.2 0H19.8C22.1196 0 24 1.8804 24 4.2V19.8C24 22.1196 22.1196 24 19.8 24H4.2C1.8804 24 0 22.1196 0 19.8V4.2C0 1.8804 1.8804 0 4.2 0ZM16.6499 11.1H20.3999L19.7999 15H16.6499V24H12.7499V15H9.59985V11.1H12.7499V8.24999C12.7499 5.59874 14.8761 3.59999 17.6999 3.59999H20.2499V7.49999H17.6999C17.4524 7.49999 16.6499 7.55249 16.6499 8.24999V11.1Z" />
          </svg></a>
        <a href="https://www.kunstpaedagogik.uni-muenchen.de/studiengaenge/bachelor/bachelor_kumm/index.html" target="_blank"><svg class="icon" width="24" height="24" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0ZM14.5148 13.8996V19.0113C14.5148 19.6214 14.6083 20.1396 14.7968 20.567C14.9842 20.9943 15.2463 21.3414 15.582 21.6104C15.9168 21.8794 16.3179 22.0745 16.7837 22.1955C17.2497 22.3183 17.761 22.3791 18.3168 22.3791C18.881 22.3791 19.3986 22.3183 19.8689 22.1955C20.3389 22.0744 20.7398 21.8794 21.0712 21.6104C21.4018 21.3414 21.6601 20.9943 21.8434 20.567C22.0274 20.1396 22.1192 19.6214 22.1192 19.0113V13.8996H19.299V19.2924C19.299 19.675 19.208 19.9474 19.0284 20.1098C18.8487 20.2724 18.6115 20.3535 18.3167 20.3535C18.0227 20.3535 17.7873 20.2724 17.6112 20.1098C17.4358 19.9474 17.3483 19.675 17.3483 19.2924V13.8996H14.5148ZM9.5956 20.3776C9.53794 20.3776 9.51009 20.349 9.51009 20.2925C9.46051 19.9348 9.40512 19.5545 9.34386 19.1525C9.28215 18.7496 9.21501 18.3385 9.14126 17.9198C9.06751 17.5005 8.99375 17.0904 8.92059 16.6865C8.84625 16.285 8.77536 15.9058 8.70536 15.553C8.65754 15.307 8.61193 15.0782 8.56957 14.8658C8.55095 14.7724 8.53296 14.6822 8.51569 14.5951C8.45883 14.3097 8.40924 14.0783 8.36818 13.8996H5.70678V22.1596H7.16618V15.2054C7.16618 15.1643 7.18278 15.1443 7.21496 15.1443C7.27233 15.1443 7.30105 15.1643 7.30105 15.2054C7.3831 15.5954 7.46523 15.9981 7.5464 16.4128C7.62816 16.8278 7.72263 17.2996 7.82848 17.8279C7.9347 18.3573 8.05922 18.9711 8.20297 19.6701C8.34614 20.3698 8.52009 21.1996 8.72409 22.1595H10.3807C10.4506 21.8255 10.5174 21.5064 10.5811 21.202C10.7037 20.6165 10.8149 20.0856 10.9144 19.609C11.0654 18.8856 11.1939 18.2532 11.3001 17.712C11.4069 17.171 11.4963 16.6995 11.5707 16.2972C11.6438 15.8942 11.7139 15.53 11.779 15.2053C11.779 15.1643 11.7957 15.1442 11.8281 15.1442C11.8849 15.1442 11.9142 15.1643 11.9142 15.2053V22.1595H13.5084V13.8995H10.8591C10.8013 14.1441 10.7196 14.5132 10.6131 15.0103C10.5072 15.5056 10.3968 16.0571 10.2823 16.6623C10.1672 17.2686 10.0538 17.891 9.9388 18.5294C9.82428 19.1682 9.73018 19.7553 9.65672 20.2925C9.65672 20.3489 9.63578 20.3776 9.5956 20.3776ZM2.5175 13.8996H1.70799V22.1596H4.87251V21.5495H2.5175V13.8996Z" />
          </svg></a>
      </div>

      <div class="spacing_32"></div>

      <a href="privacy-policy.html" class="body_standard" style="font-weight: bold; text-decoration: underline">Datenschutzbestimmung</a>
      <div class="spacing_16"></div>
      <p class="caption">copyright © 2022 con:nect</p>
      <div class="spacing_16"></div>
      <div class="LMU_Logo"><img src="assets/Connect_Logo_LMU_Big.svg" alt="LMU Logo" /></div>
  </footer>
</body>

</html>