
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Alegreya&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="lightbox/src/css/lightbox.css" />
  <link rel="stylesheet" href="CSS/style.css" />
  <title>Tapicerstwo</title>
</head>

<body id="main">

  <header>
    <h1 class="name"> Tapicerstwo - Lorem ipsum </h1>
  </header>

  <div id="strona_główna" class="welcome_picture flex_center_vertical">
    <div class="courtine"></div>
    <div class="text">
      <h2> Spełniamy marzenia</h2>
      <p class="picture_text">Stwórz z nami to co najlepsze...</p>
    </div>
  </div>

  <nav class="navigation">
    <ul>
      <li><a href="#strona_główna"> Strona glowna </a></li>
      <li id="gallery_href"> Galeria </li>
    </ul>
  </nav>

  <div class="gallery" id="gallery">
    
    
      <select name="order" id="order" class="order">
		    <option value="chair">Krzesła</option>
		    <option value="table">Stoły</option>
        <option value="%" selected>Wszystkie</option>
		  </select>

  <div class="photo_conteiner">
    
  </div>
  <button id="loadButton"> 
  </div>

  <section class="offer ">
    <h2 class="offer_main_title ">Oferta</h2>

    <p class="offer_main_description flex_center_vertical">
      Do każdego zlecenia podchodzimy z zaangażowaniem,&nbsp;a&nbsp;także pełnym profesjonalizmem. Nasi&nbsp;Klienci
      docenili nasz kunszt i&nbsp;przy każdej okazji podkreślają, iż&nbsp;polecają nasz zakład tapicerski znajomym
      i&nbsp;rodzinie. Jesteśmy wdzięczni za pokładane
      w&nbsp;nas zaufanie i&nbsp;zapewniamy, że&nbsp;jakość naszych usług stale wzrasta, wciąż podwyższamy poprzeczkę
      i&nbsp;szlifujemy umiejętności.
    </p>

    <div class="offer_item flex_center_vertical">
      <h3 class="offer_item_title ">Renowacja</h3>
      <p class="offer_item_description "> Odnawiamy i zmieniamy obicia mebli codziennego użytku. </p>
    </div>

    <div class="offer_item flex_center_vertical">
      <h3 class="offer_item_title ">Projekt i realizacja</h3>
      <p class="offer_item_description ">Produkujemy łóżka i wezgłowia według indywidualnych preferencji klientów
        - są to produkty jednostkowe - nie ma dwóch takich samych.</p>
    </div>

    <div class="offer_item flex_center_vertical">
      <h3 class="offer_item_title ">Rekonstrukcja</h3>
      <p class="offer_item_description ">Wykonujemy rekonstrukcje mebli zabytkowych i stylowych.</p>
    </div>
  </section>

  <section class="contact">
    <h3 class="contact_main_title flex_center_vertical">Skontaktuj się z nami</h3>

    <div class="tail">
      <span class="icon far fa-envelope flex_center_vertical "></span>
      <p class="description_tail "><a href="mailto:biuro@Tapicerstwo">Napisz na nasz email: <br />biuro@Tapicerstwo</a></p>
    </div>

    <div class="tail">
      <span class="icon fas fa-mobile-alt flex_center_vertical"></span>
      <p class="description_tail"><a href="tel:111-111-111">Zadzwoń do nas: <br />111 111 111</a></p>
    </div>

    <div class="tail">
      <span class="icon fas fa-map-marker-alt  flex_center_vertical"></span>
      <p class="description_tail "> Lorem 32 <br /> 43-323 LOREM <br />NIP: 123836432 </p>
    </div>
  </section>

  <script  src="js/jquery.js"></script>
  <script  src="lightbox/src/js/lightbox.js"></script>
  <script  src="js/gallery.js"></script>

</body>

</html>