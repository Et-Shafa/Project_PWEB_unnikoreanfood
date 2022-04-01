<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <style>
        @import url(css.css);
        @import url(cssslide.css);
        @import url(menu.css);
    </style>
    <script src="jsslide.js"></script>
</head>

<body style="background-color: rgb(223, 218, 193); height: 1400px;">
    <div style="background-color: #fff4ee; z-index: 10; width:40%; height: 100%; padding: 5px; right:0; position: fixed; display: none;  box-shadow: 0px 0px 4px 4px rgb(110, 110, 110);"
        id="mySidebar">
        <button onclick="sidebar_close()"
            style="width: 100%; height: 30px; background-color: burlywood; font-weight: bold;">Close
            X</button>
        <br>
        <br>
        <img src="image/logo.jpeg" alt="logo" class="col-s-12">
        <br>
        <br>
        <ul style="display: grid;">
            <li><a href="index.html">O Beranda</a></li>
            <li><a href="daftarmenu.html">O Daftar Menu</a></li>
            <li class="navbaraktif"><a href="event.html">O Event</a></li>
            <li class="dropdown">
                <a>O Contact Us</a>
                <div class="dropdown-content">
                    <a href="https://api.whatsapp.com/send?phone=6282234078626&text=Hai" target="_blank"
                        style="font-size: 15px;">
                        <img src="image/whatsapp (1).png" style="width: 20px;" alt="">
                        Whatsapp</a>
                    <a href="https://id-id.facebook.com/pages/category/Shopping---Retail/Unni-Korean-Food-Bondowoso-167677286755311/"
                        target="_blank" style="font-size: 15px;"> <img src="image/facebook (1).png" style="width: 20px;"
                            alt="">
                        Facebook</a>
                    <a href="https://food.grab.com/id/id/restaurant/unni-korean-food-bondowoso-delivery/6-CY4UCT5VC2UDN2"
                        target="_blank" style="font-size: 15px;"> <img src="image/grab.png" style="width: 40px;" alt="">
                        Grab</a>
                    <a href="https://www.instagram.com/unnikoreanfood/?hl=id" target="_blank" style="font-size: 15px;">
                        <img src="image/instagram (1).png" style="width: 20px;" alt="">
                        Instagram</a>
                </div>
            </li>
            <div class="cari">
                <!--search-->
                <input class="search" type="text">
                <input class="button" type="button">
                <!-- <img class="button" src="image/search.png" alt=""> -->
                <div style="clear: both;"></div>
            </div>
        </ul>
    </div>
    <div class="blur" id="mainblur"></div>
    <script src="jsslide.js"></script>
    <div class="d1 col-12 col-s-12" id="d1">
        <!--div Dashboard 1-->
        <header>
            <img class="col-1 col-s-3 logo" src="image/logo.jpeg" style=" box-shadow: 3px 2px 2px rgb(80, 80, 80);">

            <ul class="nav_item">
                <!--navbar-->
                <li><a href="index.html">Beranda</a>|</li>
                <li><a href="daftarmenu.html">Daftar Menu</a>|</li>
                <li class="navbaraktif"><a href="event.html">Event</a>|</li>
                <li class="dropdown">
                    <a>Contact Us</a>
                    <div class="dropdown-content">
                        <a href="https://api.whatsapp.com/send?phone=6282234078626&text=Hai" target="_blank"
                            style="font-size: 15px;"> <img src="image/whatsapp (1).png" style="width: 20px;" alt="">
                            Whatsapp</a>
                        <a href="https://id-id.facebook.com/pages/category/Shopping---Retail/Unni-Korean-Food-Bondowoso-167677286755311/"
                            target="_blank" style="font-size: 15px;"> <img src="image/facebook (1).png"
                                style="width: 20px;" alt="">
                            Facebook</a>
                        <a href="https://food.grab.com/id/id/restaurant/unni-korean-food-bondowoso-delivery/6-CY4UCT5VC2UDN2"
                            target="_blank" style="font-size: 15px;"> <img src="image/grab.png" style="width: 40px;"
                                alt=""> Grab</a>
                        <a href="https://www.instagram.com/unnikoreanfood/?hl=id" target="_blank"
                            style="font-size: 15px;"> <img src="image/instagram (1).png" style="width: 20px;" alt="">
                            Instagram</a>
                    </div>
                </li>
                <div class="cari">
                    <!--search-->
                    <input class="search" type="text">
                    <input class="button" type="button">
                    <!-- <img class="button" src="image/search.png" alt=""> -->
                    <div style="clear: both;"></div>
                </div>

            </ul>
            <div class="sidebar" onclick="sidebar_open()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>


        <!--daftar event-->
        <div style="width: 90%; margin: 0 auto;">
            <div style="width: min-content; margin: 0 auto;">
                <p class="pdaftarmenu">Promo spesial</p>
                <div class="containerdaftarmenu">
                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo1.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">BIG PROMO</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b> attention! big promo makanan! serta hadiah bagi pembeli
                                    dengan jumlah orderan yang terbanyak!</p>

                            </div>
                        </div>
                        <img src="image/promo1.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">BIG PROMO</p>
                    </div>


                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo2.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">CORNDOG BUY 2 GET 1 FREE</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>promo untuk corndog beli 2 get 1 free. buruan beli sebelum
                                    kehabisan!</p>
                            </div>
                            >>>>>>> 4f992550cc5f1e9e7f5b4ade966e5092bf422372
                        </div>
                        <img src="image/promo2.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">CORNDOG BUY 2 GET 1 FREE</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo3.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">PROMO SPESIAL SALAD BUAH</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>promo spesial untuk salad buah, buruan order sebelum
                                    kehabisan, buy 2 get 1 free</p>
                            </div>
                        </div>
                        <img src="image/promo3.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">PROMO SPESIAL SALAD BUAH</p>
                    </div>
                </div>

                <br>

                <div class="containerdaftarmenu">
                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo4.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">BIG DEAL 11.11</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>cukup bayar 11.000 untuk menu makanan korean food dan japanes
                                    food. promo hanya hari ini!</p>
                            </div>
                        </div>
                        <img src="image/promo4.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">BIG DEAL 11.11</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo5.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">BIG PROMO JAPANES FOOD</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>untuk semua menu japanes food, beli 4 get 2 free untuk selasa
                                    10, November 2020. start mulai dari jam 12 siang . jangan sampai ketinggalan!</p>
                            </div>
                        </div>
                        <img src="image/promo5.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">BIG PROMO JAPANES FOOD</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/a (5).jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">BUY 2 GET 2 FREE</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b> untuk area jember dan sekitarnya ada promo buy 2 get 2 free
                                    untuk menu all variant sushi dan juga jangan gunakan hastag ya!</p>
                            </div>
                        </div>
                        <img src="image/a (5).jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">BUY 2 GET 2 FREE</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/promo6.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">PROMO SPESIAL</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b> </b>promo sposial untuk semua menu minial pembelian Rp. 69.00
                                    akan mendapatkan potongan sebesar Rp.10.000</p>
                            </div>
                        </div>
                        <img src="image/promo6.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">PROMO SPESIAL</p>
                    </div>

                </div>
            </div>

            <br>

            <div style="width: min-content; margin: 0 auto;">
                <p class="pdaftarmenu">Pengumuman</p>
                <div class="containerdaftarmenu">
                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info.jpg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">LOWONGAN PEKERJAAN</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>kami membuka lowongan pekerjaan. untuk yang berminat silahkan
                                    daftar dengan syarat dan ketentuan seperti yang sudah dicantumkan di poster!</p>
                            </div>
                        </div>
                        <img src="image/info.jpg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">lOWONGAN PEKERJAAN</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info2.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">OPEN RESELLER</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b> </b>open reseller untuk wilayah situbondo dan sekitar. yuk,
                                    daftar jika anda berminat menjadi resller kami!</p>
                            </div>
                        </div>
                        <img src="image/info2.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">OPEN RESELLER</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info7.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">RESELLER WILAYAH JEMBER</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b> </b>untuk wilayah Jember dan sekitarnya, kalau mau memesan
                                    makanan unnikoreanfood bisa banget di reseller Jember</p>
                            </div>
                        </div>
                        <img src="image/info7.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">RESELLER WILAYAH JEMBER</p>
                    </div>




                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info8.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">RESELLER WILAYAH SITUBONDO</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>untuk wilayah Situbodndo dan sekitarnya, kalau mau memesan
                                    makanan unnikoreanfood bisa banget di reseller Situbondo</p>
                            </div>
                        </div>
                        <img src="image/info8.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">RESELLER WILAYAH SITUBONDO</p>
                    </div>
                </div>
            </div>

            <br>

            <div style="width: min-content; margin: 0 auto;">
                <p class="pdaftarmenu"></p>
                <div class="containerdaftarmenu">
                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info9.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">GIVEAWAY</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b></b>unnikoreanfood bagi-bagi giveaway nih, buruan ikutan! akan
                                    ada 8 pemenang yang dipilih kami dengan caption yang menarik </p>
                            </div>
                        </div>
                        <img src="image/info9.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">GIVEAWAY</p>
                    </div>

                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info10.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">UNNIKOREANFOOD DI CFD</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b> </b>hari minggu bisa banget COD waktu CFD di alun alun nih
                                    karena kita hadir di CFD Bondowoso </p>
                            </div>
                        </div>
                        <img src="image/info10.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;"> UNNIKOREANFOOD DI CFD</p>
                    </div>


                    <div class="menu">
                        <div class="menu1">
                            <img src="image/info11.jpeg" style="height: 170px;">
                            <div style="padding: 10px; text-align: justify;">
                                <p style="font-family: Comic Sans MS, ; font-size: 10pt;">GIVEAWAY 17-AN</p>
                                <hr style="border-color: black; height: 0.1;">
                                <p class="pketmenu"><b> </b>unnikoreanfood mengadakan giveaway 17-an. buruan ikutan!
                                    siapa tau kamu pemenangnya :)</p>
                            </div>
                        </div>
                        <img src="image/info11.jpeg" style="height: 170px">
                        <p style="text-align: center; font-family: Comic Sans MS, ;">GIVEAWAY 17-AN</p>
                    </div>
                </div>
            </div>








            <div class="garis_Footer"></div>
            <footer style="text-align: center; margin: 0 auto; margin-top: 10px; margin-bottom: 10px;">
                <div style="display: inline-block; margin-bottom: 10px;">
                    <a href="https://api.whatsapp.com/send?phone=6282234078626&text=Hai" target="_blank"><img
                            src="image/whatsapp.png" width="20px" alt=""> Whatsapp</a>
                    <a href="https://id-id.facebook.com/pages/category/Shopping---Retail/Unni-Korean-Food-Bondowoso-167677286755311/"
                        target="_blank"><img src="image/facebook.png" width="20px" alt=""> Facebook</a>
                    <a href="https://food.grab.com/id/id/restaurant/unni-korean-food-bondowoso-delivery/6-CY4UCT5VC2UDN2"
                        target="_blank"><img src="image/grab.png" width="40px" alt=""> Grab</a>
                    <a href="https://www.instagram.com/unnikoreanfood/?hl=id" target="_blank"><img
                            src="image/instagram.png" width="20px" alt=""> Instagram</a>
                </div>
                <p style="margin-bottom: 3px;">2016 - 2020 UNNI KOREAN FOODS</p>
                <pre style="margin-bottom: 3px;">Gang Melati 2 Jalan Khairil Anwar 
Badean, Kec Bondowoso
Bondowoso - Jawa Timur</pre>

            </footer>





        </div>




</body>

</html>