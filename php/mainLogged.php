<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CineMagic</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel = "icon" href = "../Movie icons/logo.png" type = "image/x-icon">
    <!--ICONS-->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
  <!--SWIPER-->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>

</head>

<body>
    <header>
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i>CineMagic
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#coming">Coming</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="../html/CinemaZone.html">Cinema Zone</a></li>
            <!-- <li><a href="#searchmovie">Search Movie</a></li> -->
            <li><a href="#newsletter">Newsletter</a></li>                   
        </ul>
        <?php
            session_start();
            echo '<a href="../php/profil-edit.php" class="btn">'.$_SESSION['username'].'</a>';
            echo '<a class="btn" id="logoutbtn" onclick="LogOut()">LogOut</a>';
        ?>
    </header>

    <!--HOME-->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!--BOX 1-->
            <div class="swiper-slide container">
                <img src="../Movie icons/Coming/LostCity.jpg" alt="">
                <div class="home-text">    
                    <a href="#" class="play" id="playBtn1">
                        <i class='bx bx-movie-play'></i>
                    </a>
                    <h1>THE LOST CITY</h1>
                </div>
                <div class="popup-video" id="vid1">
                    <video id="v1" src="../Movie icons/The Lost City Official Trailer (2022 Movie).mp4" unmuted controls></video>
                    <i id="close1" class='bx bxs-x-circle close-video'></i>
                </div>
            </div>

            <!--BOX 2-->
            <div class="swiper-slide container">
                <img src="../Movie icons/Coming/Dune.jpg" alt="">
                <div class="home-text">
                    <a href="#" class="play" id="playBtn2">
                        <i class='bx bx-movie-play'></i>                    
                    </a>
                    <h1>DUNE</h1>
                </div>
                <div class="popup-video" id="vid2">
                    <video id="v2" src="../Movie icons/Dune Official Main Trailer.mp4" muted controls></video>
                    <i id="close2" class='bx bxs-x-circle close-video'></i>
                </div>
            </div>

            <!--BOX 3-->
            <div class="swiper-slide container">
                <img src="../Movie icons/Coming/spider-man.jpg" alt="">
                <div class="home-text"> 
                    <a href="#" class="play" id="playBtn3">
                        <i class='bx bx-movie-play'></i>
                    </a>
                    <h1>SPIDER-MAN <br>No Way Home</h1>
                </div>
                <div class="popup-video" id="vid3">
                    <video id="v3" src="../Movie icons/SPIDER-MAN NO WAY HOME Trailer.mp4" muted controls></video>
                    <i id="close3" class='bx bxs-x-circle close-video'></i>
                </div>
            </div >

          </div>

          <div class="swiper-pagination"></div>
    </section>

     <!--COMIMG SOON-->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!--MOVIES CONTAINER-->
        <div class="movies-container">
            <!--Box 1 -->
            <div class="box">
            <div class="box-img" id="img1">
                <img src="../Movie icons/Coming/a.jpg">
                <div id="modal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Data lansarii</th>
                                        <th>Durata</th>
                                    </tr>
                                    <tr>
                                        <td> 08 aprilie 2022 </td>
                                        <td>143min</td>
                                    </tr>
                                </thead>
                            </table>
                            <br></br>
                            <p>
                                Profesorul Albus Dumbledore (Jude Law) ??tie c?? puternicul vr??jitor ??ntunecat Gellert Grindelwald (Mads Mikkelsen) complotez?? pentru a prelua controlul asupra lumii vr??jitorilor. Neput??nd s??-l opreasc?? singur, el ??i ??ncredin??eaz?? magizoologului Newt Scamander (Eddie Redmayne) responsabilitatea de a conduce o echip?? curajoas?? de vr??jitori, vr??jitoare ??i un brutar ??ncuiat ??ntr-o misiune periculoas??, ??n care se ??nt??lnesc cu animale fantastice vechi ??i noi ??i se ciocnesc cu legiunea ??n cre??tere de adep??i a lui Grindelwald. Dar cu o miz?? at??t de mare, c??t timp poate Dumbledore s?? r??m??n?? pe margine? 
                            </p>
                            <br></br>
                            <table>
                            <tr>
                                <td>TITLU ORIGINAL</td>
                                <td>
                                    Fantastic Beasts: The Secrets of Dumbledore 2D 
                                </td>
                            </tr>
                            <tr>
                                <td> GENUL FILMULUI: </td>
                                <td>
                                    Aventur??, AVANPREMIER??, Familie, Fantastic
                                 </td>
                            </tr>
                            <tr>
                                <td>DISTRIBU??IE </td>
                                <td>
                                    
                                    Mads Mikkelsen, Eddie Redmayne, Jude Law, Katherine Waterston, Ezra Miller 
                                </td>
                            </tr>
                            <tr>
                                <td>REGIZOR  </td>
                                <td>
                                    David Yates
                                 </td>
                            </tr>
                            <tr>
                                <td>PRODUC??IE </td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>Limb?? nativ??  </td>
                                <td>EN</td>
                            </tr>
                            <tr>
                                <td>CLASIFICARE </td>
                                <td>AG</td>
                            </tr>
                            </table>
                    </div>
                </div>
            </div>
            <h3>Fantastic Beasts <br> The Secrets of Dumbledore</h3>
            <span>143min | Adventure/Fantasy</span>
            </div>
    
            <!--Box 2-->
            <div class="box">
                <div class="box-img" id="img2">
                    <img src="../Movie icons/Coming/b.jpg">
                    <div id="modal2" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close2">&times;</span>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Data lansarii</th>
                                            <th>Durata</th>
                                        </tr>
                                        <tr>
                                            <td> 01 aprilie 2022  </td>
                                            <td>104min</td>
                                        </tr>
                                    </thead>
                                </table>
                                <br></br>
                                <p>
                                    Biochimistul Michael Morbius ??ncearc?? s??-??i g??seasc?? vindecarea pentru o boal?? rar?? de s??nge, dar sf??r??e??te prin a se infecta singur cu o form?? de vampirism. 
                                </p>
                                <br></br>
                                <table>
                                <tr>
                                    <td>TITLU ORIGINAL</td>
                                    <td>
                                        Morbius 2D
                                    </td>
                                </tr>
                                <tr>
                                    <td> GENUL FILMULUI: </td>
                                    <td>
                                        Ac??iune, Aventur??, Dram??
                                     </td>
                                </tr>
                                <tr>
                                    <td>DISTRIBU??IE </td>
                                    <td>
                                        Michael Keaton, Jared Leto, Matt Smith, Jared Harris, Adria Arjona 
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGIZOR  </td>
                                    <td>
                                        Daniel Espinosa
                                     </td>
                                </tr>
                                <tr>
                                    <td>PRODUC??IE </td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Limb?? nativ??  </td>
                                    <td>EN</td>
                                </tr>
                                <tr>
                                    <td>CLASIFICARE </td>
                                    <td>Nerecomandat copiilor sub 15 ani.</td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <h3>Morbius</h3>
                <span>104min | Adventure/Fantasy</span>
            </div>

            <!--Box 3-->
            <div class="box">
                <div class="box-img" id="img3">
                    <img src="../Movie icons/Coming/c.jpg">
                    <div id="modal3" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close3">&times;</span>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Data lansarii</th>
                                            <th>Durata</th>
                                        </tr>
                                        <tr>
                                            <td> 18 martie 2022  </td>
                                            <td>136min</td>
                                        </tr>
                                    </thead>
                                </table>
                                <br></br>
                                <p>
                                    Av??ndu-i ??n rolurile principale pe Jake Gyllenhaal, Yahya Abdul-Mateen II ??i Eiza Gonz??lez, filmul lui Michael Bay spune povestea a doi ho??i care fur?? o ambulan???? dup?? ce spargerea pe care au dat-o sf??r??e??te prost.                                 </p>
                                <br></br>
                                <table>
                                <tr>
                                    <td>TITLU ORIGINAL</td>
                                    <td>
                                        Ambulance 2D  
                                    </td>
                                </tr>
                                <tr>
                                    <td> GENUL FILMULUI: </td>
                                    <td>
                                        Ac??iune, Crim??, Dram?? 
                                     </td>
                                </tr>
                                <tr>
                                    <td>DISTRIBU??IE </td>
                                    <td>
                                        
                                        Jake Gyllenhaal, Eiza Gonz??lez, Yahya Abdul-Mateen II, Devan Long  
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGIZOR  </td>
                                    <td>
                                        Michael Bay
                                     </td>
                                </tr>
                                <tr>
                                    <td>PRODUC??IE </td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Limb?? nativ??  </td>
                                    <td>EN</td>
                                </tr>
                                <tr>
                                    <td>CLASIFICARE </td>
                                    <td>
                                        Nerecomandat copiilor sub 15 ani.</td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <h3>Ambulance</h3>
                <span>136min | Action/Crime/Drama</span>
            </div>

            <!--Box 4-->
            <div class="box">
                <div class="box-img" id="img4">
                    <img src="../Movie icons/Adventure/A11.jpg">
                    <div id="modal4" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close4">&times;</span>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Data lansarii</th>
                                            <th>Durata</th>
                                        </tr>
                                        <tr>
                                            <td> 18 februarie 2022 </td>
                                            <td>116min</td>
                                        </tr>
                                    </thead>
                                </table>
                                <br></br>
                                <p>
                                    Un descendent al exploratorului Sir Francis Drake descoper?? loca??ia legendarului El Dorado. Cu ajutorul mentorului s??u ??i al unui jurnalist ambi??ios care ??ncearc?? s??-i descopere secretele ??n timp ce supravie??uite??te pe o insul?? plin?? de pira??i, mercenari ??i un inamic misterios.                                 </p>
                                <br></br>
                                <table>
                                <tr>
                                    <td>TITLU ORIGINAL</td>
                                    <td>    
                                        Uncharted 2D  
                                    </td>
                                </tr>
                                <tr>
                                    <td> GENUL FILMULUI: </td>
                                    <td>
                                        Ac??iune, Aventur?? 
                                     </td>
                                </tr>
                                <tr>
                                    <td>DISTRIBU??IE </td>
                                    <td> 
                                        Tom Holland, Mark Wahlberg 
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGIZOR  </td>
                                    <td>
                                        Ruben Fleischer
                                     </td>
                                </tr>
                                <tr>
                                    <td>PRODUC??IE </td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Limb?? nativ??  </td>
                                    <td>EN</td>
                                </tr>
                                <tr>
                                    <td>CLASIFICARE </td>
                                    <td>
                                        Acord parental pentru copiii sub 12 ani. </td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <h3>UNCHARTED</h3>
                <span>116min | Action/Adventure</span>
            </div>

             <!--Box 5-->
             <div class="box">
                <div class="box-img" id="img5">
                    <img src="../Movie icons/Coming/e.jpg">
                    <div id="modal5" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close5">&times;</span>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Data lansarii</th>
                                            <th>Durata</th>
                                        </tr>
                                        <tr>
                                            <td> 23 aprilie 2022 </td>
                                            <td>115min</td>
                                        </tr>
                                    </thead>
                                </table>
                                <br></br>
                                <p>
                                    SEVENTEEN, trupa cunoscut?? la nivel global care rescrie istoria K-pop, prezint?? primul lor film! Cu cinci albume de platin?? ??n Coreea, clasate ??n Billboard Top 200 din SUA timp de dou?? s??pt??m??ni consecutive ??i num??rul unu ??n topul japonez Oricon, grupul domin?? clasamentele muzicale de pe tot globul.Nu rata??i spectacolul incitant, interviurile cu cei 13 membri ??i comentariile despre trecutul, prezentul ??i viitorul lor pe care ??l vor crea cu CARATs!Scrisoarea de dragoste a lui SEVENTEEN sub forma acestui film ??ntruchipeaz?? toat?? dragostea din lume pentru CARAT!  
                                </p>
                                <br></br>
                                <table>
                                <tr>
                                    <td>TITLU ORIGINAL</td>
                                    <td>
                                        
    Seventeen Power Of Love:The Movie 2D 
                                    </td>
                                </tr>
                                <tr>
                                    <td> GENUL FILMULUI: </td>
                                    <td>

                                     </td>
                                </tr>
                                <tr>
                                    <td>DISTRIBU??IE </td>
                                    <td>
                                        
                                        
    SEVENTEEN S.Coups, Jeonghan, Joshua, Jun, Hoshi, Wonwoo, Woozi, DK, Mingyu, The8, Seungkwan, Vernon, and Dino 
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGIZOR  </td>
                                    <td>
                                        OH Yoon-Dong 
                                     </td>
                                </tr>
                                <tr>
                                    <td>PRODUC??IE </td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Limb?? nativ??  </td>
                                    <td>KOR</td>
                                </tr>
                                <tr>
                                    <td>CLASIFICARE </td>
                                    <td>AG</td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <h3>Power of Love</h3>
                <span>115min | Documentary</span>
            </div>

            <!--Box 6-->
            <div class="box">
                <div class="box-img" id="img6">
                    <img src="../Movie icons/Coming/g.jpg">
                </div>
                <h3>Doctor Strange <br> MULTIVERSE OF MADNESS</h3>
                <div id="modal6" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close6">&times;</span>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Data lansarii</th>
                                        <th>Durata</th>
                                    </tr>
                                    <tr>
                                        <td> 06 mai 2022  </td>
                                        <td>126min</td>
                                    </tr>
                                </thead>
                            </table>
                            <br></br>
                            <p>
                                Dr. Stephen Strange folose??te o vraj?? interzis?? care deschide poarta c??tre multivers ??i inclusiv c??tre o versiune alternativ?? a lui ??nsu??i, iar amenin??area adus?? de acest eveniment pare prea mare chiar ??i pentru puterile combinate ale lui Strange, Wong ??i Wanda Maximoff.                             </p>
                            <br></br>
                            <table>
                            <tr>
                                <td>TITLU ORIGINAL</td>
                                <td>
                                    Doctor Strange in the Multiverse of Madness 3D 
                                </td>
                            </tr>
                            <tr>
                                <td> GENUL FILMULUI: </td>
                                <td>                                  
                                    Ac??iune, Aventur??, AVANPREMIER??, Fantastic
                                 </td>
                            </tr>
                            <tr>
                                <td>DISTRIBU??IE </td>
                                <td>  
                                    Benedict Cumberbatch, Elizabeth Olsen, Rachel McAdams, Chiwetel Ejiofor 
                                </td>
                            </tr>
                            <tr>
                                <td>REGIZOR  </td>
                                <td>
                                    Sam Raimi 
                                 </td>
                            </tr>
                            <tr>
                                <td>PRODUC??IE </td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>Limb?? nativ??  </td>
                                <td>EN</td>
                            </tr>
                            <tr>
                                <td>CLASIFICARE </td>
                                <td>
                                    Acord parental pentru copiii sub 12 ani.
                                </td>
                            </tr>
                            </table>
                    </div>
                </div>
                <h3>Doctor Strange <br> MULTIVERSE OF MADNESS</h3>
                <span>126min | Adventura/Fantasy</span>
            </div>

             <!--Box 7-->
            <div class="box">
                <div class="box-img" id="img7">
                    <img src="../Movie icons/Coming/d.jpg">
                    <div id="modal7" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close7">&times;</span>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Data lansarii</th>
                                            <th>Durata</th>
                                        </tr>
                                        <tr>
                                            <td> 25 martie 2022  </td>
                                            <td>112min</td>
                                        </tr>
                                    </thead>
                                </table>
                                <br></br>
                                <p>
                                    La aventur?? se pricepe ea. S?? arate bine e treaba lui. Supravie??uirea? Niciunul nu ??tie cu ce se m??n??nc??... O comedie de ac??iune cu Sandra Bullock, Channing Tatum, Daniel Radcliffe ??i Brad Pitt. 
                                </p>
                                <br></br>
                                <table>
                                <tr>
                                    <td>TITLU ORIGINAL</td>
                                    <td>
                                        The lost city 2D  
                                    </td>
                                </tr>
                                <tr>
                                    <td> GENUL FILMULUI: </td>
                                    <td>    
                                        Ac??iune, Aventur??, Comedie 
                                     </td>
                                </tr>
                                <tr>
                                    <td>DISTRIBU??IE </td>
                                    <td>                                
                                        Sandra Bullock, Daniel Radcliffer 
                                    </td>
                                </tr>
                                <tr>
                                    <td>REGIZOR  </td>
                                    <td>
                                        Aaron Nee, Adam Nee
                                     </td>
                                </tr>
                                <tr>
                                    <td>PRODUC??IE </td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Limb?? nativ??  </td>
                                    <td>EN</td>
                                </tr>
                                <tr>
                                    <td>CLASIFICARE </td>
                                    <td>
                                        Acord parental pentru copiii sub 12 ani. 
                                    </td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <h3>The Lost City</h3>
                <span>116min | Comedy/Action</span>
            </div>
        </div>
    </section>

        <!--MOVIES-->
    <section class="movies" id="movies">
        <h2 class="heading">MOVIES</h2>
        <!--COMING CONTAINER-->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                 <!--Box 1 -->
             <div class="swiper-slide box">
                 <a href="../html/play-page.html" id="playBtn">
                    <div class="box-img">
                        <img src="../Movie icons/Adventure/A4.jpg" >
                            <h3>The King's Man 3</h3>
                            <span>121min | Action/Adventure</span>
                    </div>
                </a>
            </div>
        
                <!--Box 2-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Adventure/A21.jpg">
                    </div>
                    <h3>DUNE</h3>
                    <span>155min | Action/Adventure/Drama</span>
                </div>
    
                <!--Box 3-->
                <div class="swiper-slide box">
                    <a href="../html/SpiderMan-play.html" id="playBtn">
                    <div class="box-img">
                        <img src="../Movie icons/Adventure/A31.jpg">
                        <h3>SPIDER-MAN <br>No Way Home</h3>
                        <span>148min | Action/Adventure</span>
                    </div>
                    </a>
                </div>
    
                <!--Box 4-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Animation/An31.jpg">
                    </div>
                    <h3>Encanto</h3>
                    <span>99min | Family/Musical</span>
                </div>
    
                 <!--Box 5-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Animation/An11.jpg">
                    </div>
                    <h3>The Croods</h3>
                    <span>98min | Family/Comedy</span>
                </div>
    
                <!--Box 6-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Animation/An21.jpg">
                    </div>
                    <h3>SING</h3>
                    <span>108min | Animation/Comedy/Family</span>
                </div>

                <!--Box 7-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Comedies/C1.jpg">
                    </div>
                    <h3>Red Notice</h3>
                    <span>118min | Action/Comedy</span>
                </div>

                <!--Box 8-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Comedies/C41.jpg">
                    </div>
                    <h3>HANGOVER <br> PART 3</h3>
                    <span>118min |Comedy</span>
                </div>

                <!--Box 9-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Comedies/C31.jpg">
                    </div>
                    <h3>DOLITTLE</h3>
                    <span>101min | Adventure/Fantasy</span>
                </div>

                 <!--Box 10-->
                 <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Drama/D1.jpg">
                    </div>
                    <h3>SOUTHPAW</h3>
                    <span>124min | Drama/Thriller</span>
                </div>

                <!--Box 11-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Love/L4.jpg">
                    </div>
                    <h3>The Curious Case Of <br> BENJAMIN BUTTON</h3>
                    <span>166min | Romance/Drama</span>
                </div>

                <!--Box 12-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Love/L5.jpg">
                    </div>
                    <h3>Me Before You</h3>
                    <span>110min | Romance/Drama</span>
                </div>

                <!--Box 13-->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="../Movie icons/Love/L6.jpg">
                    </div>
                    <h3>Legends Of The Fall</h3>
                    <span>133min | Romance/Drama</span>
                </div>
            </div>
        </div>
       
    </section>

    <!--Search Movie-->
    <!-- <section class="searchmovie" id="searchmovie">
        <div class="search-box">
            <input type="search" id="search-input" placeholder="Search movie">
            <i class='bx bx-search'></i>
        </div>   
    </section> -->

<!--NewsLetter-->
    <section class="newsletter" id="newsletter">
        <h2>Subscribe To Be The First Who<br> Sees The Newest Movies</h2>
        <form action="">
            <input type="email" class="email" placeholder="Enter Email..." required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>

    <!--Footer-->
    <section class="footer">
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i>CineMagic
        </a>
    </section>

    <!--Copyright-->
    <div class="copyright">
        <p>&#169; CineMagic All Right Reserved.</p>
    </div>

    <!--SWIPER -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>    
    <script src="../js/main.js"></script>
    <script src="../js/video.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
</body>
</html>