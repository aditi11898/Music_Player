<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Music Website</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h6 id="menu_list_active_button" ><i class="bi bi-music-note-list"></i></h6>
            <h1>Playlist</h1>
            <div class="playlist">
                <a href="welcome.php">
                    <h4><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                </a>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                    <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Reel Music</h4>
                
                
            </div>
            <div class="menu_song">
                
            </div>
        </div>
        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_results">
                        <!-- <a href="" class="card">
                            <img src="img/1.jpg" alt="">
                            <div class="content">
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="user">
                    <img src="img/music_icon.png" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Trending Reel Songs</h1>
                <p>Reel karo , feel karo <br> From Kacha badam to Gomi gomi</p>
                <!-- <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div> -->
            </div>
            <div class="Reel">
                <div class="ganna">
                    <ul class="container-fluid">
                <li  class="songItem1 row align-items-center">
                    <span class="col-1">01</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>                       
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </div>
                    
                </li>
                <li  class="songItem1 row align-items-center">
                    <span class="col-1">02</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                        
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">03</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                        
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">04</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">05</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">06</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">07</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">08</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">09</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">10</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                        
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">11</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                        
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">12</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                </li>
                <li class="songItem1 row align-items-center">
                    <span class="col-1">13</span>
                    <div class="col-9">
                        <h5 class="aditi mb-0">On My Way</h5>
                    </div>
                    <div class="icon col-2 text-right">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
    
        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/20.jpg" alt="" id="poster_master_play">
            <h5 id="title"> Vande mataram <div class="subtitle">Bankim Chandra</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="reels.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
