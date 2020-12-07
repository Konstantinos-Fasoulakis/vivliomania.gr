<?php
    include 'dbh.php';
?>

<html>
    <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <title>Tsiknakis | Βιβλιοπωλείο Χαρτοπωλείο Εκτυπώσεις Σχολικά είδη Είδη Δώρων</title>
      <base href="search.php">
      <link rel="stylesheet" href="styles.css">
      <link rel="shortcut icon" type="image/bmp" href="pics/favicon.bmp">
      <script defer src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/yourcode.js"></script>

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
                                Τηλέφωνο καταστήματος : 2810712272 <br> Ωράριο: 09:00 - 15:00 & 17:00 - 21:00
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

            <div class="search-menu">

                <?php
                    if(isset($_GET['search'])){
                        $search = mysqli_real_escape_string($conn, $_GET['search']);
                    }
                    else{
                        $search = mysqli_real_escape_string($conn, $_POST['search1']);
                    }
                    $prefer = isset($_GET['pref']) ? $_GET['pref'] : 1;
                    $limit = isset($_GET['limit']) ? $_GET['limit'] : 20;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;
                    if($prefer == 1){
                        $result = $conn->query("SELECT * FROM books WHERE b_title LIKE '%$search%' UNION SELECT * FROM xartopoleio WHERE b_title LIKE '%$search%' ORDER BY b_id LIMIT $start, $limit");
                      }
                      elseif($prefer == 2){
                        $result = $conn->query("SELECT * FROM books WHERE b_title LIKE '%$search%' UNION SELECT * FROM xartopoleio WHERE b_title LIKE '%$search%' ORDER BY b_title LIMIT $start, $limit");
                      }
                      elseif($prefer == 3){
                        $result = $conn->query("SELECT * FROM books WHERE b_title LIKE '%$search%' UNION SELECT * FROM xartopoleio WHERE b_title LIKE '%$search%' ORDER BY b_price ASC LIMIT $start, $limit");
                      }
                      else{
                        $result = $conn->query("SELECT * FROM books WHERE b_title LIKE '%$search%' UNION SELECT * FROM xartopoleio WHERE b_title LIKE '%$search%' ORDER BY b_price DESC LIMIT $start, $limit");
                      }
                    $queryResult = mysqli_num_rows($result);
                    $result1 = $conn->query("SELECT count(b_id) AS b_id FROM books WHERE b_title LIKE '%$search%' ");
                    $result2 = $conn->query("SELECT count(b_id) AS b_id FROM xartopoleio WHERE b_title LIKE '%$search%' ");
                    $queryCount1 = $result1->fetch_all(MYSQLI_ASSOC);
                    $total1 = $queryCount1[0]['b_id'];
                    $queryCount2 = $result2->fetch_all(MYSQLI_ASSOC);
                    $total2 = $queryCount2[0]['b_id'];
                    $total = $total1 + $total2;
                    $pages = ceil($total / $limit);

                    $Previous = $page - 1;
                    $Next = $page + 1;
                    if(empty($search)){
                        echo "<span class = empty>Παρακαλώ συμπληρώστε το πεδίο αναζήτησης</span>";
                    }
                    else{ 
                        
                ?>
                        <p style="font-size: 25px; color: #292929; float:left; margin-top:10px; margin-bottom:10px; font-family: Comic Sans MS, cursive, sans-serif;">
                            Αναζήτηση: '<?=$search?>' &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if($total == 1) { ?> Αποτέλεσμα: <?php } else { ?> Αποτελέσματα: <?php } ?> '<?=$total?>' 
                        </p>
                        <div class="product-filter">
                            <h style="float:left; font-size:20px; color:whitesmoke; display: flex;">Προτιμήσεις</h>
                            <div class="preference">
                                <b>Ταξινόμηση κατά:</b>
                                <select name="prefer" id="prefer" onchange="location = this.value;">
                                    <option <?php if ($prefer == 1 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=<?= $limit ?>&pref=1">Προεπιλογή</option>
                                    <option <?php if ($prefer == 2 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=<?= $limit ?>&pref=2">Αλφαβιτική</option>
                                    <option <?php if ($prefer == 3 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=<?= $limit ?>&pref=3">Τιμή αύξουσα</option>   
                                    <option <?php if ($prefer == 4 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=<?= $limit ?>&pref=4">Τιμή φθίνουσα</option>                
                                </select>
                            </div>
                            <div class="sort-by">
                                <b>Εμφάνιση:</b>
                                <select name="limit" id="limit" onchange="location = this.value;">
                                    <option <?php if ($limit == 20 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=20&pref=<?= $prefer ?>">20</option>
                                    <option <?php if ($limit == 40 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=40&pref=<?= $prefer ?>">40</option>
                                    <option <?php if ($limit == 60 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=60&pref=<?= $prefer ?>">60</option>   
                                    <option <?php if ($limit == 100 ) echo 'selected' ; ?> value="search2.php?search=<?= $search?>&page=1&limit=100&pref=<?= $prefer ?>">100</option> 
                                </select>
                            </div>
                        </div>

                        <div class = "search-results">

                            <?php
                                if ($queryResult > 0) {
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "<div class = search-product>";
                                            echo '<img src="data:image;base64, '.base64_encode($row['b_img']).'" alt="Image" style = "width: 200px; height: 250px; overflow: hidden;" >';
                                            echo "<p1>".$row['b_title']."</p1>";
                                            echo "<div class = search-product-price>";

                                                echo "<p0>Τιμή:</p0>";

                                                echo "<del class = del price-down>";
                                                    echo "<p3>" .$row['b_price2']."</p3>";
                                                echo "</del>";

                                                echo "<p2><strong>".$row['b_price']."</strong></p2>"; 

                                            echo "</div>";  
                                        echo "</div>";
                                    }
                                }
                                else{
                                    echo "<span class = no-match>Δεν βρέθηκε κανένα προϊόν με αυτή την αναζήτηση</span>";
                                }
                    }
            
                            ?>

                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <?php if($page>1 && $page<=$pages): ?>
                                    <a href="search2.php?search=<?= $search?>&page=<?=$Previous;?>&limit=<?= $limit ?>" aria-label="Previous">
                                        <span aria-hidden = "true"> &lsaquo; </span>
                                    </a>
                                    <?php endif; ?>
                                    <?php for($i = 1; $i<=$pages; $i++): ?>
                                    <a class = "<?php if($page == $i){ echo "active";} ?>" href="search2.php?search=<?= $search?>&page=<?=$i;?>&limit=<?= $limit ?>"><?=$i?></a>
                                    <?php endfor; ?>
                                    <?php if($page>=0 && $page<$pages): ?>
                                    <a href="search2.php?search=<?= $search?>&page=<?=$Next;?>&limit=<?= $limit ?>" aria-label="Next">
                                        <span aria-hidden = "true">&rsaquo;</span>
                                    </a>
                                    <?php endif; ?>
                                </ul>
                                </nav>
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

    </body>
</html>