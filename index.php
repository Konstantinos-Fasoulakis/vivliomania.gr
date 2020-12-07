<html>
    <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <title>Tsiknakis | Βιβλιοπωλείο Χαρτοπωλείο Εκτυπώσεις Σχολικά είδη Είδη Δώρων</title>
      <base href="index.php">
      <link rel="stylesheet" href="styles.css">
      <link rel="shortcut icon" type="image/bmp" href="pics/favicon.bmp">
      <link rel="stylesheet" type="text/css" href="swiper.min.css">
      <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">  
      <script defer src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script>
      <script src="https://kit.fontawesome.com/yourcode.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                //you can set this, as long as it's not greater than the slides length
                var show = 1;
                var w = $('#slider').width() / show;
                var l = $('.slide').length;
                
                $('.slide').width(w);
                $('#slide-container').width(w * l)
                
                function slider() {
                    $('.slide:first-child').animate({
                        marginLeft: -w
                    }, 'slow', function () {
                        $(this).appendTo($(this).parent()).css({marginLeft: 0});
                    });
                }
                var timer = setInterval(slider, 3000);
                
                $('#slider').hover(function(){
                    clearInterval(timer);
                },function(){
                    timer = setInterval(slider, 3000);
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            
            <div class="logo-search0">
                <div class="logo-search">
                    <div class="logo00">
                        <div class="logo">
                            <a href="index.php">
                                <img class="toplogo" src="pics/toplogo.jpg" alt="toplogo">
                            </a>
                        </div>
                    </div>
                    <div class="search00">
                        <div class="search">
                            <div class="header">
                                Τηλέφωνα: 2810712272 / 6949965722  <br> Ωράριο: 09:00 - 14:30 & 17:00 - 21:00
                            </div>
                            <form action="search2.php" method="POST" class="search0">
                                <input class="search-txt" type="text" name="search1" placeholder="Αναζήτηση..">
                                <button type="submit" class="search-btn" name="search2"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="nav-wrapper0">

                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i> Menu
                </label>

                <div class="nav-search">
                    <form action="search2.php" method="POST" class="search0">
                        <input class="search-txt" type="text" name="search1" placeholder="Αναζήτηση..">
                        <button type="submit" class="search-btn" name="search2"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <div class="nav-wrapper">
                    <div class="kathgoria1">
                        <a href="index.php"><span class="full-text">Αρχική</span><span class="medium-text">Αρχική</span><span class="short-text">Αρχ..</span></a>
                    </div>

                    <div class="kathgories">
                        <a href="books.php"><span class="full-text">Βιβλία</span><span class="medium-text">Βιβλία</span><span class="short-text">Βιβλ..</span></a>
                    </div>

                    <div class="kathgories">
                        <a href="xartopoleio.php"><span class="full-text">Χαρτοπωλείο</span><span class="medium-text">Χαρτοπωλ..</span><span class="short-text">Χαρτο..</span></a>
                    </div>

                    <div class="kathgories">
                        <a href="sxoleio.php"><span class="full-text">Σχολικά Είδη</span><span class="medium-text">Σχολικά Είδη</span><span class="short-text">Σχολ. Είδη</span></a>
                    </div>

                    <div class="kathgories">
                        <a href="grafeio.php"><span class="full-text">Είδη Γραφείου-Αναλώσιμα Η/Υ</span><span class="medium-text">Είδη Γραφ..-Η/Υ</span><span class="short-text">Είδη Γρ.. -Η/Υ</span></a> 
                    </div>

                    <div class="kathgories">
                        <a href="dora.php"><span class="full-text">Είδη Δώρων-Παιχνίδια</span><span class="medium-text">Δώρα-Παιχν..</span><span class="short-text">Δώρα-Παιχν..</span></a>
                    </div>
                        
                    <div class="kathgories">
                        <a href="contact.php"><span class="full-text">Επικοινωνία</span><span class="medium-text">Επικοινωνία</span><span class="short-text">Επικ..</span></a>
                    </div>

                    <div class="kathgoria-logo">
                        <a href="https://www.instagram.com/vivliomania.gr/?hl=el" target="_blank">
                            <img src="pics/insta.webp" background="black" height="20" width="20" alt="instagram">
                        </a>
                        <a href="https://www.facebook.com/Βιβλιοπωλείο-Τσικνάκης-110075917406193/" target="_blank">
                            <img src="pics/facelogo.png" height="20" width="20" alt="facebook">
                        </a>
                    </div>

                    
                </div>
            </div>
            
            <div class="main-menu">
                <div class="main-menu-carousel">
                    
                    
                    <div id="slider">

                        <div class="ribbon">
                            <span>Special Offers</span>
                        </div>

                        <div id="slide-container">
                            <div class="slide">
                                <div class="slider-pic" >
                                    <img src="pics/toplogo.jpg" alt="topslider1">
                                </div>>
                            </div>
                            <div class="slide">
                                <div class="slider-pic">
                                    <img src="pics/topslider2.webp" alt="topslider2">
                                </div>>
                            </div>
                            <div class="slide">
                                <div class="slider-pic">
                                    <img src="pics/topslider3.jpg" alt="topslider3">
                                </div>>
                            </div>
                            <div class="slide">
                                <div class="slider-pic">
                                    <img src="pics/topslider4.jpg" alt="topslider4">
                                </div>>
                            </div>
                            <div class="slide">
                                <div class="slider-pic">
                                    <img src="pics/topslider5.jpg" alt="topslider5">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slider-pic">
                                    <img src="pics/topslider6.jpg" alt="topslider6">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2>Νέες Αφίξεις</h2>

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/book4.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header style="background-image: url(pics/book.jpg); background-position:center;">
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/book.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Τιμή:
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/book3.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/anton.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="coming-soon0">
                        <div class="coming-soon">
                            <div class="coming-left">
                                <p>Back to school is here!!</p>
                                <!--<div class="countdown">
                                    <div class="countd">
                                        <span id="days">00</span> Μέρες
                                    </div>
                                    <div class="countd">
                                        <span id="hours">00</span> Ώρες
                                    </div>
                                    <div class="countd">
                                        <span id="minutes">00</span> Λεπτά
                                    </div>
                                    <div class="countd">
                                        <span id="seconds">00</span> Δευτ..
                                    </div>
                                </div>-->
                            </div>
                            <div class="coming-right">
                                <p>Βρες ό,τι χρειάζεσαι εδώ..</p>
                                <div class="coming-product">
                                    <div class="coming-product-col">
                                        <li><a href="books.php">Στυλό</a></li>
                                        <li><a href="books.php">Μολύβια</a></li>
                                        <li><a href="books.php">Τετράδια</a></li>
                                        <li><a href="books.php">Κασετίνες</a></li>
                                    </div>
                                    <div class="coming-product-col">
                                        <li><a href="books.php">Τσάντες</a></li>
                                        <li><a href="books.php">Μαρκαδόρους</a></li>
                                        <li><a href="books.php">Ντοσιέ</a></li>
                                        <li><a href="books.php">Διορθωτικά</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Προτάσεις</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/diary.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header style="background-image: url(pics/book.jpg); background-position:center;">
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/blanco.png" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/mark.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

        
                    <div class="show-hide0">
                        <span class="show-hide-text">Μερικές υπηρεσίες μας:</span>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <div id="show-hide">
                            <span class="visible">είμαστε οι καλύτεροι σε όλα</span>
                            <span class="hidden" style="color: rgb(255, 217, 0);">κάνουμε τις καλύτερες τιμές και προσφορές</span>
                            <span class="hidden">κάνουμε εκτυπώσεις σε το ένα το άλλο ότι χαρτί θες ότι χρώμα ότι μέγεθος ότι συχνότητα</span>
                            <span class="hidden" style="color: rgb(255, 217, 0);">γενικά εμείς εδώ είμαστε θεοί και κάνουμε τα πάντα τέλεια</span>
                        </div>
                        
                        <script>
                            let displayIndex = 0;
                            let elems = $('#show-hide > span');
                            let delay = 4000;

                            setInterval(() =>{
                                elems.removeClass();
                                elems.addClass('hidden');

                                displayIndex++;

                                if(displayIndex >= elems.length){
                                    displayIndex = 0;
                                }

                                $(elems[displayIndex]).addClass('visible');
                            }, delay);
                        </script>
                    </div>
                    

                    <h2>Δημοφιλή Προϊόντα</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/pen.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header style="background-image: url(pics/book.jpg); background-position:center;">
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/pen2.png" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/pen3.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/pen4.png" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="swiper-slide">
                                <li class="scene">
                                    <div class="movie">
                                        <div class="swiper-slide0">
                                            <div class="product-image">
                                                <img class="product-img" src="pics/bag.jpg" title="Backpack">
                                            </div>
                                            <div class="product-details">
                                                <div class="product-name">
                                                    Bodypack 1661G σακίδιο πλάτης πράσινο 
                                                </div>
                                                <div class="product0-price">
                                                    Τιμή:
                                                    <del class="del price-down">
                                                        1,80€
                                                    </del>
                                                    <strong> 1,50€ </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <header>
                                                <h8>Το καταραμένο παιδί<br> #w9872wP </h8>
                                            </header>
                                            <p>
                                                In Bedford Falls, New York on Christmas Eve, George Bailey is deeply troubled. Prayers for his well-being from friends and family reach Heaven. Clarence Odbody, Angel Second Class, is assigned to visit Earth to save George, thereby earning his wings. Franklin and Joseph, the head angels, review George's life with Clarence.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
            </div>

            <div class="footer" style="margin-top: 20px;">
                <div class="bottom-menu">
                    <div class="bottom-facebook">
                        <h3>Βρείτε μας στο Facebook:</h3>
                        <a href="https://www.facebook.com/Βιβλιοπωλείο-Τσικνάκης-110075917406193/" target="_blank"><img class="facebottom" src="pics/bottomfacebook.png" alt="bottomfacebook"></a>
                    </div>
                    <div class="bottom-info">
                        <div class="column-menu1">
                            <div class="column-menu">
                                <h1>ΤΟ ΒΙΒΛΙΟΠΩΛΕΙΟ</h1>
                                <hr>
                                <div class="column menu rows">
                                    <a href="companyidentity.html"><i class="fas fa-home" style="margin-right: 4px;"></i>Ποιοί είμαστε</a>
                                    <div class="bottom-social">
                                        <a href="https://www.facebook.com/Βιβλιοπωλείο-Τσικνάκης-110075917406193/" target="_blank"><i class="far fa-thumbs-up" style="margin-right: 5px; padding-left: 2px;"></i>Facebook</a> &nbsp;&nbsp; / &nbsp;&nbsp;
                                        <a href="https://www.instagram.com/vivliomania.gr/?hl=el" target="_blank"><i class="fab fa-instagram" style="margin-right: 6px; padding-left: 2px;"></i>Instagram</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column-menu">
                                <h1>ΑΣΦΑΛΕΙΑ ΚΑΙ ΟΡΟΙ ΧΡΗΣΗΣ</h1>
                                <hr>
                                <div class="column menu rows">
                                    <a href="asfaleia.html"><i class="fas fa-user-shield" style="margin-right: 5px; font-size: 16px;"></i>Ασφάλεια & Όροι χρήσης</a>
                                    <a href="politikes.html"><i class="fas fa-cookie" style="margin-right: 8px; padding-left: 1px; font-size: 16px;"></i>Πολιτική απορρήτου & cookies</a>
                                </div>
                            </div>
                        </div>
                        <div class="column-menu1">
                            <div class="column-menu">
                                <h1>ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</h1>
                                <hr>
                                <div class="column menu rows">
                                    <div>
                                        Κρουσώνας Μαλεβιζίου, 70001 
                                        <br>
                                        Ηράκλειο Κρήτης
                                        <br>
                                        <strong>Τηλ:</strong> 2810712272 - 6949965722
                                        <br> <strong>E-mail:</strong> <a class="mailto" href="mailto:info@vivliomania.gr">info@vivliomania.gr</a>
                                    </div>
                                </div>
                            </div>
                            <div class="column-menu">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.8367845904245!2d24.982036703179716!3d35.23037735855035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149afff726cec143%3A0xe169cb163c222c4b!2zzpLOuc6yzrvOuc6_z4DPic67zrXOr86_IM6kz4POuc66zr3OrM66zrfPgg!5e0!3m2!1sel!2sgr!4v1599393689299!5m2!1sel!2sgr" width="95%" height="166px" frameborder="0" style="margin-top:20px; float:right;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cookie-container">
            <img src="pics/cookie2.png" alt="cookie" style="vertical-align:middle; position:relative; background-color: transparent; height:24px; width:35px; margin-top:13px; margin-right:2px;"> <p> Με την επίσκεψη στον ιστότοπό μας, αποδέχεστε τη χρήση cookies για την καλύτερη παροχή υπηρεσιών, την ανάλυση της επισκεψιμότητάς του και την εξατομίκευση των διαφημίσεων. Για περισσότερες πληροφορίες δείτε <a href="politikes.html">"Πολιτικές Ασφάλειας"</a> και <a href="https://ec.europa.eu/info/cookies_el" target="_blank">"Cookies Policy"</a></p>
                <button class="cookie-btn">Εντάξει</button>
            </div>

        </div>

        <script src="cookies.js"></script>
        <script type="text/javascript" src="swiper.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
               
                slidesPerView: 5,
                spaceBetween: 20,
                slidesPerGroup: 5,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    200: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        slidesPerGroup: 1
                    },
                    600: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        slidesPerGroup: 1
                    },
                    650: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        slidesPerGroup: 2
                    },
                    950: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        slidesPerGroup: 2
                    },
                    960: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        slidesPerGroup: 3
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        slidesPerGroup: 3
                    },
                    1400: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                        slidesPerGroup: 4
                    },                 
                    1675: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                        slidesPerGroup: 5
                    }
                },
            });
        </script>

        <script type="text/javascript">
            var count = new Date("sept 14, 2020 08:20:00").getTime();
            var x = setInterval(function(){
                var now = new Date().getTime();
                var d = count - now;

                var days = Math.floor(d/(1000*60*60*24));
                var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
                var minutes = Math.floor((d%(1000*60*60))/(1000*60));
                var seconds = Math.floor((d%(1000*60))/1000);
 
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                if(d <= 0){
                    clearInterval(x);
                }
            },1000);
        </script>

        <!-- <script>
            window.onscroll = function() {myFunction()};

            // Get the navbar
            var navbar = document.getElementById("nav-wrapper0");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
            } 
                else {
                    navbar.classList.remove("sticky");
                }
            }
        </script> -->

    </body>
</html>