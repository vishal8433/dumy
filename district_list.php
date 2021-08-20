<!DOCTYPE html>
<html>

<head>
    <title>sanjeevni.com/district_page/</title>
    <link rel="icon" href="image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css file link-->
    <link rel="stylesheet" href="style/district_list_stylesheet.css">
</head>

<body style="background-color: aliceblue;">
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a href="index.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Home</b></button></a>
                </li>
                <li class="nav-item item2 active">
                    <a href="chatbot.html"> <button class="loginbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Chatbot</b></button></a>
                </li>
                <li class="nav-item item3 active"><a href="login_signup_page.php">
                        <button class="signbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Sign In/up</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--serach bar-->

    <div class="text-center">
        <div class="dropdown listdropdown">
            <button onclick="myFunction()" class="dropbtn">search your district here</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="show_data/agra.php">Agra</a>
                <a href="show_data/aligarh.php">Aligarh</a>
                <a href="show_data/allahabad.php">Allahabad</a>
                <a href="show_data/ambedkar_nagar.php">Ambedkar Nagar</a>
                <a href="show_data/amethi.php">Amethi</a>
                <a href="show_data/amroha.php">Amroha</a>
                <a href="show_data/auraiya.php">Auraiya</a>
                <a href="show_data/azamgarh.php">Azamgarh</a>
                <a href="show_data/baghpat.php">Baghpat</a>
                <a href="show_data/bahraich.php">Bahraich</a>
                <a href="show_data/ballia.php">Ballia</a>
                <a href="show_data/balrampur.php">Balrampur</a>
                <a href="show_data/banda.php">Banda</a>
                <a href="show_data/barabanki.php">Barabanki</a>
                <a href="show_data/bareily.php">Bareilly</a>
                <a href="show_data/basti.php">Basti</a>
                <a href="show_data/bhadohi.php">Bhadohi</a>
                <a href="show_data/bijnor.php">Bijnor</a>
                <a href="show_data/budaun.php">Budaun</a>
                <a href="show_data/bulandshahar.php">Bulandshahr</a>
                <a href="show_data/chandouli.php">Chandauli</a>
                <a href="show_data/chitrakoot.php">Chitrakoot</a>
                <a href="show_data/deoria.php">Deoria</a>
                <a href="show_data/etah.php">Etah</a>
                <a href="show_data/etawa.php">Etawah</a>
                <a href="show_data/faizabad.php">Faizabad</a>
                <a href="show_data/farrukkhabad.php">Farrukhabad</a>
                <a href="show_data/fatehpur.php">Fatehpur</a>
                <a href="show_data/firozabad.php">Firozabad</a>
                <a href="show_data/GB_nagar.php">Gautam Buddha Nagar</a>
                <a href="show_data/ghaziabad.php">Ghaziabad</a>
                <a href="show_data/ghazipur.php">Ghazipur</a>
                <a href="show_data/gonda.php">Gonda</a>
                <a href="show_data/gorakhpur.php">Gorakhpur</a>
                <a href="show_data/hamirpur.php">Hamirpur</a>
                <a href="show_data/hapur.php">Hapur</a>
                <a href="show_data/hardoi.php">Hardoi</a>
                <a href="show_data/hathras.php">Hathras</a>
                <a href="show_data/jalaun.php">Jalaun</a>
                <a href="show_data/jaunpur.php">Jaunpur</a>
                <a href="show_data/jhansi.php">Jhansi</a>
                <a href="show_data/kannauj.php">Kannauj</a>
                <a href="show_data/kanpur_dehat.php">Kanpur Dehat</a>
                <a href="show_data/kanpur_nagar.php">Kanpur Nagar</a>
                <a href="show_data/kasganj.php">Kashganj</a>
                <a href="show_data/kaushambi.php">Kaushambi</a>
                <a href="show_data/kushinagar.php">Kushinagar</a>
                <a href="show_data/lakhimpur.php">Lakhimpur</a>
                <a href="show_data/lalitput.php">Lalitpur</a>
                <a href="show_data/lucknow.php">Lucknow</a>
                <a href="show_data/maharajganj.php">Maharajganj</a>
                <a href="show_data/mahoba.php">Mahoba</a>
                <a href="show_data/mainpuri.php">Mainpuri</a>
                <a href="show_data/mathura.php">Mathura</a>
                <a href="show_data/mau.php">Mau</a>
                <a href="show_data/meerut.php">Meerut</a>
                <a href="show_data/mirzapur.php">Mirzapur</a>
                <a href="show_data/moradabad.php">Moradabad</a>
                <a href="show_data/muzaffarnagr.php">Muzaffarnagar</a>
                <a href="show_data/pilibhit.php">Pilibhit</a>
                <a href="show_data/pratapgarh.php">Pratapgarh</a>
                <a href="show_data/raebarely.php">RaeBareli</a>
                <a href="show_data/rampur.php">Rampur</a>
                <a href="show_data/shaharanpur.php">Saharanpur</a>
                <a href="show_data/sambhal.php">Sambhal</a>
                <a href="show_data/sant_kabir_nagar.php">Sant Kabir Nagar</a>
                <a href="show_data/shahajanpur.php">Shahjahanpur</a>
                <a href="show_data/shamli.php">Shamali</a>
                <a href="show_data/shravasti.php">Shravasti</a>
                <a href="show_data/siddharth_nagar.php">Siddharth Nagar</a>
                <a href="show_data/sitapur.php">Sitapur</a>
                <a href="show_data/sonbhadra.php">Sonbhadra</a>
                <a href="show_data/sultanpur.php">Sultanpur</a>
                <a href="show_data/unnao.php">Unnao</a>
                <a href="show_data/varansi.php">Varanasi</a>

            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>



    <!--flex box-->
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/agra.php">
                        <div class="card-first">
                            <img class="card-img-top img" src="image/agra-taj.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Agra</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/aligarh.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/aligarh.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Aligarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/allahabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/allahabad.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Allahabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/ambedkar_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/ambedkar_nagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n1">ambedkar nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/amethi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Amethi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">amethi</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/amroha.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Amroha.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">amroha</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/auraiya.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/auraiya.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">auraiya</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/azamgarh.php">
                        <div class="card">
                            <img class="card-img-top" src="image/azamgarh.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">azamgarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/baghpat.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/baghpat.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">baghpat</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/bahraich.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/bahraich.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">bahraich</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/ballia.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/balia.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">ballia</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/balrampur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/balrampur.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">balrampur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/banda.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/banda.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">banda</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/barabanki.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Barabanki.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Barabanki</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/bareily.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Bareilly.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bareilly</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/basti.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Basti.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Basti</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/bhadohi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bhadohi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bhadohi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/bijnor.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bijnor.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bijnor</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/budaun.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Budaun.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Budaun</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/bulandshahar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bulandshahr.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n11">Bulandshahr</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/chandouli.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/chandouli_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Chandauli</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/chitrakoot.php">
                        <div class="card">
                            <img class="card-img-top" src="image/chitrakoot_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Chitrakoot</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/deoria.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/deoria_img.webp" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Deoria</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/etah.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etah_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Etah</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/etawa.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etawa_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Etawah</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/faizabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etawa_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Faizabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/farrukkhabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/farrukkhabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n12">Farrukhabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/fatehpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/fatehpur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Fatehpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/firozabad.php">
                        <div class="card">
                            <img class="card-img-top" src="image/firozabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Firozabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/GB_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gb%20nagar_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n2">Gautam Buddha<br>Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/ghaziabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gaziabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Ghaziabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/ghazipur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gazipur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Ghazipur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/gonda.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gonda_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Gonda</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/gorakhpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Gorakhpur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Gorakhpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/hamirpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hamirpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hamirpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/hapur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hapur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/hardoi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hardoi.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hardoi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/hathras.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hathras.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hathras</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/jalaun.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jalaun.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jalaun</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/jaunpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jaunpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jaunpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/jhansi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jhansi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jhansi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/kannauj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kannaunj.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kannauj</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/kanpur_dehat.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Kanpur%20Dehat.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n3">Kanpur Dehat</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/kanpur_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kanpur%20Nagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n4">Kanpur Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/kasganj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kasganj.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kasganj</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container lastitemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/kaushambi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kaushambhi.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kaushambi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/kushinagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Khusinagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kushinagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/lakhimpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Lakhimpur%20Kheri.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lakhimpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/lalitput.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Lalitpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lalitpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/lucknow.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Lucknow.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lucknow</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="show_data/maharajganj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mahrajganj.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n5">Maharajganj</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/mahoba.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mahoba.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mahoba</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/mainpuri.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mainpuri1.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mainpuri</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/mathura.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mathura.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mathura</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/mau.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mau1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mau</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="show_data/meerut.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/meerut.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Meerut</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/mirzapur.php">
                        <div class="card">
                            <img class="card-img-top" src="image/mirzapur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mirzapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/moradabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/moradabad1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Moradabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/muzaffarnagr.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/muzaffarnagar1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n6">Muzaffarnagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/pilibhit.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/pilibhit1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Pilibhit</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="show_data/pratapgarh.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/pratapgarh.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Pratapgarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/raebarely.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/raebarele1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">RaeBareli</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/rampur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/rampur.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Rampur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/shaharanpur.php">
                        <div class="card">
                            <img class="card-img-top" src="image/sharanpur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n7">Saharanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/sambhal.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sambhal1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sambhal</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">


                <div class="card-deck">
                    <a href="show_data/sant_kabir_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sant%20kabir.PNG" alt="Card image cap">
                            <div class="card-block ">
                                <h2 class="card-title n8">Sant Kabir Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/shahajanpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shajhanpur.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n9">Shahjahanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/shamli.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shamli1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Shamali</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/shravasti.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shravasti.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Shravasti</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/siddharth_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/siddarthngr.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n10">Siddharth Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="fluid-container lastitemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="show_data/sitapur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sitapur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sitapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/sonbhadra.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sonbhadra.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sonbhadra</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/sultanpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sultanpur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sultanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/unnao.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/unnao1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Unnao</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="show_data/varansi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/varanasi1.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Varanasi</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <footer>
        <div class="fluid-container f1">
            <div class="container-fluid ">
                <h1 class="infomationtag"><u>information</u></h1>
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                        <h1 class="ourservicesheader"><b>our services :</b></h1>
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                        <p class="ourservicesparagraph">Our website aims to provide the best and easy way of finding available beds in hospitals in your location. Also , doctor details , location of hospitals and extra details will be provided via sanjeevni website. By this website we make sure we provide you the details which are legal , eligible and important for our users. Via this website all important and required details can be accessed in one tap .Our services are reliable and trustworthy.</p>
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com,all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>

</html>