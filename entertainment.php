<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Of India</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cssFile/entertainment.css">
</head>

<body>
    <!-- Header Section -->

    <section class="headerTop">
        <div class="headerTopLeft">
            <div class="headerTopLeftOne">
                <p>EDITION</p>

                <div>
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/25px-Flag_of_India.svg.png"
                        alt="indianFlag">
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="headerTopLeftTwo">
                <p class="headerTopLeftTwoDate">

                </p>
            </div>
            <div class="headerTopLeftThree">
                <p>DELHI</p>
                <i class="fas fa-sun"></i>
                <p><strong>27<sup>o</sup></strong> c</p>
            </div>
        </div>
        <div class="headerTopRight">
            <button>SUBSCRIBE TO TOI+</button>
            <p>SIGN IN</p>
            <div><i class="fab fa-twitter"></i></div>
            <div><i class="fab fa-facebook"></i></div>
            <div><i class="fas fa-rss"></i></div>
            <div><i class="fab fa-youtube"></i></div>
        </div>
    </section>
    <section class="headerLogo">
        <a href="../htmlFile/landingPage.html"><img src="https://static.toiimg.com/photo/79638690.cms" alt="timesOfIndiaLogo"></a>
    </section>

    <section class="headerBottom">
        <div class="headerBottomContainer">

        </div>
    </section>

    <section class="headerBottomSecond">
        <p>IN THE NEWS</p>
        <P>CORONAVIRUS</P>
        <P>T20 WORLD CUP 2021</P>
        <P>COVID-19 VACCINE</P>
        <P>COVID CASES IN INDIA</P>
    </section>

    <section class="hoverSection">

    </section>

    <!-- Other Section -->


    <div id="container">
        <div id="movies">
            <!--Div for containing bollywood movies related news-->
            <div class="head">
                <h2>MOVIES</h2>
                <div class="language shows" style="margin-left: 13rem;"> Lang.(All)
                    <select>
                    </select>
                </div>
            </div>
            <ul class="all" style="margin-left: 6.5rem;">
                <li>All</li>
                <li>Hindi</li>
                <li>English</li>
                <li>Marathi</li>
                <li>Gujarati</li>
                <li>Malayalam</li>
                <li>Kannada</li>
                <li>Bengali</li>
            </ul>
            <div class="head_img">
                <div class="up_img">
                    <p class="txt"></p>
                </div>
            </div>
            <div class="headlines"></div>
        </div>
        <!--End of div which contains bollywood movies related news-->

        <div id="tv">
            <div class="head">
                <h2>TELEVISION</h2>
                <div class="language shows"> Lang.(All)
                    <select>
                    </select>
                </div>
            </div>
            <ul class="all">
                <li>All</li>
                <li>Hindi</li>
                <li>English</li>
                <li>Marathi</li>
                <li>Gujarati</li>
                <li>Malayalam</li>
                <li>Kannada</li>
                <li>Bengali</li>
            </ul>
            <div class="head_img">
                <div class="up_img">
                    <p class="txt"></p>
                </div>
            </div>
            <div class="headlines"></div>
        </div>
        <!--Div for containing news related to indian tv shows-->

        <div id="lifestyle">
            <div class="head">
                <h2>LIFESTYLE</h2>
                <div class="language shows" style="visibility: hidden;"> Lang.(All)
                    <select>
                    </select>
                </div>
            </div>
            <ul class="all" style="display: none;">
                <li>All</li>
                <li>Hindi</li>
                <li>English</li>
                <li>Marathi</li>
                <li>Gujarati</li>
                <li>Malayalam</li>
                <li>Kannada</li>
                <li>Bengali</li>
            </ul>
            <div class="head_img">
                <div class="up_img">
                    <p class="txt"></p>
                </div>
            </div>
            <div class="headlines"></div>
        </div>
        <!--Div for containing news related to lifestyle -->
        <div id="video">
            <h2>VIDEOS</h2>
            <ul style="display: flex;">
                <li>Featured</li>
                <li>Hindi</li>
                <li>English</li>
                <li>Tamil</li>
            </ul>
            <div id="cont"></div>
        </div>
    </div>
    <!--End of top container-->

    <div id="photos"></div>
    <!--Div for containing the recent news photos-->

    <div id="mid">
        <div class="item1">
            <h2>PAGEANTS</h2>
            <div class="mob">
                <img
                    src="https://static.toiimg.com/thumb/msid-87384870,imgsize-38782,width-85,height-63/87384870.jpg" />
                <h3>Download Mobstar and Vote for India's Manasa Varanasi. NOW!</h3>
            </div>
            <h4>Harnaz Sandhu raises awareness on cleft...</h4>
            <h4>Manika Sheokand is on a mission to stop...</h4>
            <h4>Miss world Manushi Chillar bags the award...</h4>
            <h3 class="see">See All</h3>
        </div>
        <div class="item2">
            <h2>MOVIE TRAILERS</h2>
            <ul>
                <li>ALL</li>
                <li>HINDI</li>
                <li>ENGLISH</li>
                <li>TAMIL</li>
                <li>TELUGU</li>
                <li>MALAYALAM</li>
                <li>KANNADA</li>
                <li>BENGALI</li>
            </ul>
            <div class="pic_box1">
                <div class="pic1 first">
                    <img src="https://static.toiimg.com/thumb/msid-87302265,imgsize-146923,width-176,height-98/87302265.jpg
                    " />
                    <h4>Tadap - Official Trailer</h4>
                </div>
                <div class="pic1 second">
                    <img src="https://static.toiimg.com/thumb/msid-87262387,imgsize-306180,width-176,height-98/87262387.jpg
                    " />
                    <h4>Antim - The Final Truth - Official Trailer.</h4>
                </div>
                <div class="pic1 third">
                    <img
                        src="https://static.toiimg.com/thumb/msid-87254522,imgsize-168561,width-176,height-98/87254522.jpg" />
                    <h4>Satyameva Jayate 2 - Official Trailer.</h4>
                </div>
            </div>

            <div class="pic_box2">
                <div class="pic1 first">
                    <img src="https://static.toiimg.com/thumb/msid-87251045,imgsize-196314,width-176,height-98/87251045.jpg
                    " />
                    <h4>Bunty Aur Babli 2 - Official Trailer</h4>
                </div>
                <div class="pic1 second">
                    <img
                        src="https://static.toiimg.com/thumb/msid-85006731,imgsize-171840,width-176,height-98/85006731.jpg" />
                    <h4>Bell Bottom - Official Trailer</h4>
                </div>
                <div class="pic1 third">
                    <img
                        src="https://static.toiimg.com/thumb/msid-82192875,imgsize-818426,width-176,height-98/82192875.jpg" />
                    <h4>Radhe - Official Trailer</h4>
                </div>
            </div>
            <h3 class="see">See All</h3>
        </div>

        <div class="item4">
            <h2>ENGLISH NEWS</h2>
            <h4>Movie Review: Eternals - 3.5/5</h4>
            <h4>'Eternals' Despite diverse cast, first deaf...</h4>
            <h4>Kristen Stewart confirms engagement to...</h4>
            <h4>The Real Housewives of Dubai...</h4>
            <h3 class="see">See All</h3>

        </div>
        <div class="item5">
            <div class="trend">
                <div style="font-size: 1.5rem;">TRENDING MUSIC</div>
                </li>
                <img src="https://timesofindia.indiatimes.com/photo/63333439.cms" /></li>
            </div>
            <img src="https://a10.gaanacdn.com/gn_img/widget/gaana_plus320x250_desktop_1633495814.jpg
            " />
            <div class="music">
                <img src="https://a10.gaanacdn.com/images/albums/17/4810017/crop_40x40_4810017.jpg" />
                <div>
                    <h3>Jugnu</h3>
                    <div>Badshah, Nikita Gandhi</div>
                </div>
            </div>
            <div class="music">
                <img src="https://a10.gaanacdn.com/images/albums/43/4824243/crop_40x40_4824243.jpg" />
                <div>
                    <h3>Bijlee Bijlee</h3>
                    <div>Hardy Sandhu</div>
                </div>
            </div>
            <div class="music">
                <img src="https://a10.gaanacdn.com/images/song/35/39064035/crop_40x40_1635393821.jpg" />
                <div>
                    <h3>Deny Me</h3>
                    <div>Ananya Birla</div>
                </div>
            </div>
            <div class="music">
                <img src="https://a10.gaanacdn.com/images/song/35/39064035/crop_40x40_1635393821.jpg
                " />
                <div>
                    <h3>Meri Zindagi Hai Tu</h3>
                    <div>Jubin Nautiyal, Neeti Mohan...</div>
                </div>
            </div>
            <div class="music">
                <img src="https://a10.gaanacdn.com/images/albums/92/4819792/crop_40x40_4819792.jpg
                " />
                <div>
                    <h3>Oh Na Na</h3>
                    <div>Myke Towers, ...</div>
                </div>
            </div>

        </div>


        <div class="item8">8

        </div>


        <div class="item11">
            <h2>MOVIES IN YOUR CITY</h2>
            <div class="flex_movie">
                <div class=" left black">In Theatres</div>
                <div class=" left white">Coming Soon</div>
            </div>
            <div class="poster">
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-75551202,width-124,height-176,imgsize-94266/75551202.jpg" />
                    <h4>Halloween Kills</h4>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-87306310,width-124,height-176,imgsize-15032/87306310.jpg" />
                    <h4>Ron's Gone Wrong</h4>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-79257498,width-124,height-176,imgsize-79778/79257498.jpg" />
                    <h4>Varudu Kaavalenu</h4>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-87259412,width-124,height-176,imgsize-7508/87259412.jpg" />
                    <h4>Bekhudi</h4>
                </div>
            </div>
            <h3 class="see">See All</h3>
        </div>
        <div class="item12">
            <img src="https://tpc.googlesyndication.com/simgad/2950806923388254065?
            " />
        </div>

        <div class="item14">14</div>
    </div>
    <div id="categories1">
        <div id="music_video">
            <h2>MUSIC VIDEO</h2>
            <div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-87154599,imgsize-140990,width-129,height-71/87154599.jpg" />
                    <h3>Aise Na Chhoro - Guru Randhawa</h3>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-87179288,imgsize-56873,width-129,height-71/87179288.jpg" />
                    <h3>Aila Re Ailaa</h3>
                </div>
            </div>

            <div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-86958845,imgsize-137392,width-129,height-71/86958845.jpg" />
                    <h3>Chura Liya - Sachet and...</h3>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-85455352,imgsize-173702,width-129,height-71/85455352.jpg" />
                    <h3>Shershaah | song - Kabhii Tumhe</h3>
                </div>
            </div>

            <div>
                <div>
                    <img src="https://static.toiimg.com/thumb/msid-85422722,imgsize-145817,width-129,height-71/85422722.jpg
                " />
                    <h3>Bell Bottom | Song - Tum...</h3>
                </div>
                <div>
                    <img
                        src="https://static.toiimg.com/thumb/msid-85233613,imgsize-173600,width-129,height-71/85233613.jpg" />
                    <h3>Bachpan Ka Pyaar - Sahdev...</h3>
                </div>
            </div>
        </div>

        <div id="music">
            <h2>MUSIC</h2>
            <div class="m_img_box">
                <div class="m_img">
                    <p class="text"></p>
                </div>
            </div>
            <div class="m_headlines"></div>
        </div>
        <div id="relation">
            <h2>RELATIONSHIPS</h2>
            <div class="m_img_box">
                <div class="m_img">
                    <p class="text"></p>
                </div>
            </div>
            <div class="m_headlines"></div>
        </div>
        <div id="fashion">
            <h2>FASHION</h2>
            <div class="m_img_box">
                <div class="m_img">
                    <p class="text"></p>
                </div>
            </div>
            <div class="m_headlines"></div>
        </div>
    </div>
    <!--End of categories1-->

    <div id="categories2">
        <div id="beauty">
            <h2>BEAUTY</h2>
            <div class="b_img_box">
                <div class="b_img">
                    <p class="text1"></p>
                </div>
            </div>
            <div class="b_headlines"></div>
        </div>
        <div id="korean">
            <h2>KOREAN WAVE</h2>
            <div class="b_img_box">
                <div class="b_img">
                    <p class="text1"></p>
                </div>
            </div>
            <div class="b_headlines"></div>
        </div>
        <div id="adv">
            <img src="https://tpc.googlesyndication.com/simgad/17431561030772786211?" />
            <img src="https://tpc.googlesyndication.com/daca_images/simgad/12604909334830701891" />
        </div>
        <div id="trending">
            <h2>TRENDING CELEBS</h2>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-8221327,imgsize-118975,width-60,height-61/8221327.jpg" />
                <div>
                    <h3>Priyanka Chopra</h3>
                    <div>Actress</div>
                </div>
            </div>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-8257314,imgsize-100223,width-61,height-60/8257314.jpg" />
                <div>
                    <h3>Deepika Padukone</h3>
                    <div>Actress</div>
                </div>
            </div>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-8221328,imgsize-25991,width-61,height-60/8221328.jpg
                " />
                <div>
                    <h3>Salman Khan</h3>
                    <div>Actor</div>
                </div>
            </div>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-56646243,imgsize-86540,width-61,height-60/56646243.jpg
                " />
                <div>
                    <h3>Saif Ali Khan</h3>
                    <div>Producer, Actor</div>
                </div>
            </div>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-56622576,imgsize-100126,width-61,height-60/56622576.jpg
                " />
                <div>
                    <h3>Ajay Devgn</h3>
                    <div>Producer, Actor, Director</div>
                </div>
            </div>
            <div>
                <img src="https://static.toiimg.com/thumb/msid-55048058,imgsize-24274,width-61,height-60/55048058.jpg
                " />
                <div>
                    <h3>Ranveer Singh</h3>
                    <div>Actor</div>
                </div>
            </div>
        </div>
    </div>
    <div id="categories3">
        <div id="miss">
            <h2>MISS KYRA</h2>
            <div class="k_img_box">
                <div class="k_img">
                    <p class="text2"></p>
                </div>
            </div>
            <div class="k_headlines"></div>
        </div>
        <div id="health">
            <h2>HEALTH & FITNESS</h2>
            <div class="k_img_box">
                <div class="k_img">
                    <p class="text2"></p>
                </div>
            </div>
            <div class="k_headlines"></div>
        </div>
        <div id="recipes">
            <h2>RECIPES</h2>
            <div class="k_img_box">
                <div class="k_img">
                    <p class="text2"></p>
                </div>
            </div>
            <div class="k_headlines"></div>
        </div>
        <div id="food">
            <h2>FOOD NEWS</h2>
            <div class="k_img_box">
                <div class="k_img">
                    <p class="text2"></p>
                </div>
            </div>
            <div class="k_headlines"></div>
        </div>
    </div>
    <div id="categories4">
        <div id="home">
            <h2>HOME & GARDEN</h2>
            <div class="h_img_box">
                <div class="h_img">
                    <p class="text3"></p>
                </div>
            </div>
            <div class="h_headlines"></div>
        </div>
        <div id="book">
            <h2>BOOKS</h2>
            <div class="h_img_box">
                <div class="h_img">
                    <p class="text3"></p>
                </div>
            </div>
            <div class="h_headlines"></div>
        </div>
        <div id="theatre">
            <h2>THEATRE</h2>
            <div class="h_img_box">
                <div class="h_img">
                    <p class="text3"></p>
                </div>
            </div>
            <div class="h_headlines"></div>
        </div>
        <div id="spot">
            <h2>SPOTLIGHT</h2>
            <div class="h_img_box">
                <div class="h_img">
                    <p class="text3"></p>
                </div>
            </div>
            <div class="h_headlines"></div>
        </div>
    </div>

    <script type="text/javascript" src="../jsFile/entertainment.js"></script>
</body>

</html>