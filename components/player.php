<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<link rel="stylesheet" href="player/css/clean-html-player.css">
<link rel="stylesheet" href="player/css/style.css">
<script type="text/javascript" src="player/js/jquery.min.js"></script>
<script type="text/javascript" src="player/js/jquery.cookie.js"></script>
<script type="text/javascript" src="player/js/jquery.jplayer.js"></script>
<script type="text/javascript" src="player/js/jplayer.playlist.min.js"></script>

<?php


// $getbook = $_GET['url'];
$getbook = '425';
$show_playlist = false; // false значит не показывать плейлист
$current_book = 'garri_potter_uznik_azkabana'; // url текущей аудиокниги, переменная нужна для установки сессии
$homepage = file_get_contents('https://storagebk.com/getfiles2.php?url=' . $getbook);
// $homepage = '{ title:"1 часть", mp3:"https://storagebk.com/audiobooks4/425/book/0001.mp3", }';
?>




<script type="text/javascript">
    $(document).ready(function() {

        var myPlaylist = new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, [
                <?php echo $homepage; ?>
            ],

            {

            });


        // функция получения данных куки
        function get_cookie(cookie_name) {
            var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

            if (results)
                return (unescape(results[2]));

            else
                return null;
        }

        // переменная xx = значение куки a_media
        var xx = get_cookie("<?php echo $current_book; ?>_a_media");

        var currentmedia = Number(xx);
        //alert(currentmedia);

        var currTimes = get_cookie("<?php echo $current_book; ?>_a_currtime");
        var currenttime = Number(currTimes);
        mycurrtuime = Number(currTimes);


        $("#jquery_jplayer_1").on($.jPlayer.event.setmedia, function(e) {
            //             console.log("172 stroka Current time", currenttime, ' current media', currentmedia, 'media-new', $(".jp-playlist li.jp-playlist-current").index());
            jQuery("#jquery_jplayer_1").jPlayer("option", "playbackRate", document.getElementById('speedvolume').value);


            <?php if (!isset($_COOKIE[$current_book . '_a_speed'])) { ?>
                $("#jquery_jplayer_1").jPlayer("option", "playbackRate", 1);
            <?php } else { ?>
                $("#jquery_jplayer_1").jPlayer("option", "playbackRate", <?php echo $_COOKIE[$current_book . '_a_speed']; ?>);
                document.getElementById("speedvolume").value = <?php echo $_COOKIE[$current_book . '_a_speed']; ?>;
                jQuery("#spdvlm").html(document.getElementById('speedvolume').value + 'x');
            <?php } ?>



            if (parseInt(currentmedia) == parseInt($(".jp-playlist li.jp-playlist-current").index())) {


                var currTimePlay1 = parseInt(currenttime);

                setTimeout(function() {
                    $("#jquery_jplayer_1").jPlayer("pause", currTimePlay1);
                }, 100);
            }

        });


        myPlaylist.select(currentmedia);


        $("#jquery_jplayer_1").bind($.jPlayer.event.ready, function(event) {
            $("#current-track").append(myPlaylist.playlist[myPlaylist.current].title);
            setTimeout(function() {
                $("#jquery_jplayer_1").jPlayer("pause", parseInt(currenttime));
            }, 100);
        });

        $("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) {
            $("#current-track").empty();
            $("#current-track").append(myPlaylist.playlist[myPlaylist.current].title);
        });

    });

    $(this).bind($.jPlayer.event.play, function(event) {
        jQuery("#jquery_jplayer_1").jPlayer("option", "playbackRate", document.getElementById('speedvolume').value);

        var currMedia = $(".jp-playlist li.jp-playlist-current").index();
        var currTime = parseInt(event.jPlayer.status.currentTime);
        $.cookie("<?php echo $current_book; ?>_a_media", currMedia, {
            expires: 14,
            path: "/"
        });
        $.cookie("<?php echo $current_book; ?>_a_currtime", currTime, {
            expires: 14,
            path: "/"
        });

    });


    $(this).bind($.jPlayer.event.timeupdate, function(event) {
        // 	console.log("231 stroka", parseInt(event.jPlayer.status.currentTime));
        var currTime = parseInt(event.jPlayer.status.currentTime);
        mycurrTimes = parseInt(event.jPlayer.status.currentTime);
        var alltime = $("#jquery_jplayer_1").data("jPlayer").status.duration;

        var timeinsec = (100 * currTime) / alltime;
        if (isNaN(timeinsec)) {
            timeinsec = 0;
        }

        document.cookie = "<?php echo $current_book; ?>_a_currtime=; max-age=0";
        document.cookie = "<?php echo $current_book; ?>_a_currtime=" + mycurrTimes + "; max-age=" + 30 * 24 * 60 * 60 + ";path=/";



    });

    $(".jp-playlist").animate({
        scrollTop: 140
    }, 400);


    setTimeout(function() {

        $(".jp-playlist").animate({
            scrollTop: $(".jp-playlist-current").offset().top - $(".jp-audio").offset().top - 140
        }, 400);
    }, 400);


    // изменить скорость
    function SpeedVolum() {
        jQuery("#spdvlm").html(document.getElementById('speedvolume').value + 'x');
        jQuery("#jquery_jplayer_1").jPlayer("option", "playbackRate", document.getElementById('speedvolume').value);
        var currSpeed = document.getElementById('speedvolume').value;
        $.cookie("<?php echo $current_book; ?>_a_speed", currSpeed, {
            expires: 14,
            path: "/"
        });


    }

    // изменить громкость
    function changeVolume() {
        jQuery("#jquery_jplayer_1").jPlayer("volume", document.getElementById('playervolume').value);
        jQuery("#vlmval").html(Math.floor(document.getElementById('playervolume').value * 100) + '%');
    }




    // перемотать вперед на 15 секунд
    $(document).on("click", "#next15", function() {
        $("#jquery_jplayer_1").jPlayer("play", mycurrTimes + 15);
    });

    // перемотать назад на 15 секунд
    $(document).on("click", "#prev15", function() {
        $("#jquery_jplayer_1").jPlayer("play", mycurrTimes - 15);
    });



    // выключить звук
    $(document).on("click", "#mute", function() {
        $("#jquery_jplayer_1").jPlayer("mute");
        //alert(document.getElementById('playervolume').value);
        document.getElementById("mute").classList.add('hidden');
        document.getElementById("unmute").classList.remove('hidden');
    });

    // unmute (включить звук)
    $(document).on("click", "#unmute", function() {
        $("#jquery_jplayer_1").jPlayer("volume", document.getElementById('playervolume').value);

        //document.getElementById('playervolume').value = 100;
        document.getElementById("unmute").classList.add('hidden');
        document.getElementById("mute").classList.remove('hidden');
    });

    // клик по прогресс бару
    $(document).on("click", ".player__progress-bar", function() {
        // 		console.log("369 stroka");
        //$.cookie("<?php //echo substr($_SERVER['REQUEST_URI'], 1, -1);
                    ?>//_a_currtime", currTime, {expires: 14, path: "/"});
        document.cookie = "<?php echo $current_book; ?>_a_currtime=; max-age=0";
        document.cookie = "<?php echo $current_book; ?>_a_currtime=" + currTime + "; max-age=" + 30 * 24 * 60 * 60 + ";path=/";
    });








    // автопауза
    $(document).on('change', '#timerplayer', function() {
        // document.getElementById("exampleModalToggle").style.display = "none";
        if (document.getElementById('timerplayer').value == '0') {
            clearTimeout(timer);
            clearInterval(intervals);
            document.getElementById('showme').innerHTML = '';
            document.getElementById('pauseshow').setAttribute('data-original-title', '');
            //document.getElementById('stopme').style.display = 'none';
        } else {

            if (window.timer !== undefined) {
                clearTimeout(timer);
                clearInterval(intervals);
                //document.getElementById('showme').innerHTML = '';
                document.getElementById('pauseshow').setAttribute('data-original-title', '');
            }

            document.getElementById('stopme').style.display = 'inline';
            timer = setTimeout(function() {
                jQuery("#jquery_jplayer_1").jPlayer('pause')
            }, document.getElementById('timerplayer').value);

            var duration = document.getElementById('timerplayer').value;
            var step = 1000;
            var endsAfter = duration;


            intervals = setInterval(function() {
                endsAfter -= step;
                if (endsAfter <= 0) clearInterval(intervals);
                document.getElementById('showme').innerHTML = '<br>Автопауза через ' + Math.floor((endsAfter / 1000) / 60) + ' мин. ' + ((endsAfter / 1000) - Math.floor((endsAfter / 1000) / 60) * 60) + ' сек.';
                //document.getElementById('pauseshow').title = endsAfter/1000;
                document.getElementById('pauseshow').setAttribute('data-original-title', 'через ' + endsAfter / 1000 + ' сек');



            }, step);

        }
    });


    // остановить автопаузу2
    $(document).on("click", "#stopme", function() {
        clearTimeout(timer);
        clearInterval(intervals);
        document.getElementById('stopme').style.display = 'none';
        document.getElementById('showme').innerHTML = '';
        document.getElementById('pauseshow').setAttribute('data-original-title', '');
        document.getElementById('timerplayer').value = '0';
    });
</script>

<div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <span class="modal-title fs-5 h2" id="exampleModalToggleLabel">Автопауза</span> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><span id="pauseshow" data-toggle="tooltip" data-placement="bottom" title="" style="padding-left:20px;">Автопауза</span>

                    <select class="custom-select" style="width:85px;" id="timerplayer">
                        <option value="0">выкл.</option>
                        <!-- <option value="5000">5 сек</option> -->
                        <option value="300000">5 мин</option>
                        <option value="600000">10 мин</option>
                        <option value="900000">15 мин</option>
                        <option value="1200000">20 мин</option>
                        <option value="1500000">25 мин</option>
                        <option value="1800000">30 мин</option>
                        <option value="2100000">35 мин</option>
                        <option value="2400000">40 мин</option>
                        <option value="2700000">45 мин</option>
                        <option value="3000000">50 мин</option>
                        <option value="3300000">55 мин</option>
                        <option value="3600000">60 мин</option>
                    </select> <span id="showme"></span>
                    <span id="stopme" style="display:none;color:red;"><br />отменить</span>
                </p>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h3 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h3> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Скорость (<span id="spdvlm">1.0x</span>): <input type="range" class="player__speed-bar" value="1.0" min="0.5" max="2" step="0.1" id="speedvolume" oninput="SpeedVolum()">

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>




<!-- 
<div id="myModal" class="modal" tabindex="-1">
    <div class="modal-content center_block" style="max-width:400px;">
        <span class="close">&times;</span>
        <p><span id="pauseshow" data-toggle="tooltip" data-placement="bottom" title="" style="padding-left:20px;">Автопауза</span>

            <select class="custom-select" style="width:85px;" id="timerplayer">
                <option value="0">выкл.</option>
                <option value="300000">5 мин</option>
                <option value="600000">10 мин</option>
                <option value="900000">15 мин</option>
                <option value="1200000">20 мин</option>
                <option value="1500000">25 мин</option>
                <option value="1800000">30 мин</option>
                <option value="2100000">35 мин</option>
                <option value="2400000">40 мин</option>
                <option value="2700000">45 мин</option>
                <option value="3000000">50 мин</option>
                <option value="3300000">55 мин</option>
                <option value="3600000">60 мин</option>
            </select> <span id="showme"></span>
            <span id="stopme" style="display:none;">отменить</span>
        </p>

        Скорость (<span id="spdvlm">1.0x</span>): <input type="range" class="player__speed-bar" value="1.0" min="0.5" max="2" step="0.1" id="speedvolume" oninput="SpeedVolum()">

    </div>
</div> -->









<!-- MY PLAYER TOP |^ -->


<div id="jp_container_1" class="jp-audio">

    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <div class="ctf-showcase-player ctf-showcase-player-playlist ctf-showcase-player-visible" style="width:100%;">
        <div class="cleanPlayer chp chp--playlist chp--boxShadow chp--borderRadius chp__theme--light">
            <div class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--paused plyr__tab-focus">
                <div class="plyr__controls">
                    <button id="prev15" type="button" class="plyr__control chp__control__prev" data-toggle="tooltip" data-placement="top" title="Назад на 15 сек.">
                        <svg class="chp__control__icon__first" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-play"></use>
                        </svg><svg class="chp__control__icon__last" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-play"></use>
                        </svg></button>


                    <button type="button" class="plyr__control jp-play"><svg class="icon--not-pressed" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-play"></use>
                        </svg></button>


                    <button type="button" class="plyr__control jp-pause"><svg class="icon--not-pressed" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-pause"></use>
                        </svg></button>



                    <button type="button" id="next15" class="plyr__control chp__control__next" data-toggle="tooltip" data-placement="top" title="Вперед на 15 сек.">
                        <svg class="chp__control__icon__first" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-play"></use>
                        </svg><svg class="chp__control__icon__last" role="presentation" focusable="false">
                            <use xlink:href="player/demo.svg#plyr-play"></use>
                        </svg></button>


                    <div class="jp-current-time"></div>


                    <div class="jp-progress">
                        <div class="jp-seek-bar" id="jp-seek-bar">
                            <div class="jp-play-bar">
                            </div>
                        </div>
                    </div>


                    <!-- <div class="plyr__progress jp-progress" >
	                        
	                      <input class="jp-seek-bar" id="jp-seek-bar" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" aria-valuemin="0" aria-valuemax="0" aria-valuenow="0">
                                
                            <progress class="plyr__progress__buffer jp-play-bar" style="display:none;" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress></div> 
                             -->



                    <div class="plyr__time plyr__time--current" aria-label="Current time">
                        <div class="jp-duration"></div>
                    </div>


                    <div class="plyr__volume jp-volume-bar">

                        <button id="mute" type="button" class="plyr__control">
                            <svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="player/demo.svg#plyr-volume"></use>
                            </svg>

                        </button>


                        <button id="unmute" type="button" class="plyr__control hidden">
                            <svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="player/demo.svg#plyr-muted"></use>
                            </svg>

                        </button>


                        <input data-plyr="volume" id="playervolume" onchange="changeVolume()" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-6537" aria-valuetext="100.0%" style="--value:100%;">
                    </div>


                    <div class="plyr__menu">
                        <!-- <button id="myBtn" aria-haspopup="true" type="button" class="plyr__control" data-toggle="tooltip" data-placement="top" title="Настройки">
                            <svg role="presentation" focusable="false">
                                <use xlink:href="player/demo.svg#plyr-settings"></use>
                            </svg></button> -->

                        <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle" aria-haspopup="true" aria-controls="plyr-settings-6538" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings" data-toggle="tooltip" data-placement="top" title="Автопауза">
                            <i class="fa-solid fa-stopwatch"></i></button>

                        <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle2" aria-haspopup="true" aria-controls="plyr-settings-6538" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings" data-toggle="tooltip" data-placement="top" title="Скорость">
                            <i class="fa-solid fa-gauge-high"></i></button>

                    </div>
                </div>
            </div>


            <div class="jp-type-playlist" <?php if (isset($show_playlist) and $show_playlist == false) { ?> style="display:none;" <?php } ?>>
                <div class="jp-playlist">
                    <ul class="chp__playlist" style="max-height: none">
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script> -->