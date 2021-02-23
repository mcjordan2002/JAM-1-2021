<!DOCTYPE html>
<html>
    <head>
        <title>Passé - Présent - Futur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" href="images/icon.png" type="image/x-icon">
         <!-- Compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         <!-- Compiled and minified JavaScript -->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
    </head>
    <body>
        <audio id="mySong" autoplay loop>
            <source src="evolution.mp3" type="audio/mp3">
        </audio>
        <div class="preloader-background">
            <div class="evol preloader-background">
                <div class="planet planetEarth">
                    <div class="container">
                        <div class="loader"><span></span></div>
                        <div class="earth"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="timeline-container" id="timeline-1">
            <div class="bottomleft">
                <a id="icon" class="btn-floating btn cyan pulse"><i class="material-icons">play_arrow</i></a>
            </div>
            <div class="timeline-header">
              <h2 class="timeline-header__title">L'EVOLUTION DE L'HUMANITE</h2>
              <h3 class="timeline-header__subtitle">...</h3>
            </div>
            <h2 class="white-text center-align" style="text-transform: uppercase;">Le passé</h2>
            <div class="timeline">
                <blockquote class="white" style="border-left: 5px solid purple;">
                    "Les vrais hommes de progès sont ceux qui ont pour point de départ un respet profond pour le passé."
                    Ernest Renan
                </blockquote>
              <div class="timeline-item" data-text="Il y a quatres miliards d'années">
                <div class="timeline__content"><img class="timeline__img" src="assets/bigbang.gif" />
                  <h2 class="timeline__content-title">Le big bang</h2>
                  <p class="timeline__content-desc">
                    Le Big Bang (« Grand Boum ») est en gros l'origine et l'évolution de l'Univers. De lui est né , l'univers, les étoiles, les planètes dont la planète Terre. 
                  </p>
                </div>
              </div>
              <div class="timeline-item" data-text="Il y a des miliards d'années">
                <div class="timeline__content"><img class="timeline__img" src="assets/evolution1.gif"/>
                  <h2 class="timeline__content-title">L'humain</h2>
                  <p class="timeline__content-desc">La vie naquit sur Terre; d'êtres unicellulaires sont nées Végétaux, Animaux et Humains. L'humain a evolué au fil des années grâces à son intelligence et aux contraintes auquelles il etait soumis.</p>
                </div>
              </div>
              <div class="timeline-item" data-text="Les inventions qui ont bouleversés le monde">
                <div class="timeline__content"><img class="timeline__img" src="assets/bulb.gif"/>
                  <h2 class="timeline__content-title">1879</h2>
                  <p class="timeline__content-desc">Au fil des années l'humain a progressé pour survivre depuis la découverte du feu jusqu'au civilisation. <br> Nous sommes en 1879 ou Thomas Edison a développé et commercialisé l'ampoule éléctrique. Elle a mit la lumière sur beaucoup de chose 😂.</p>
                </div>
              </div>
              <div class="timeline-item" data-text="L'ORDINATEUR">
                <div class="timeline__content"><img class="timeline__img" src="assets/computer.gif"/>
                  <h2 class="timeline__content-title">1960</h2>
                  <p class="timeline__content-desc">Aprés l'invention des vehicules (voitures, avions), du téléphone et de l'appareil photo. Il y a eu la création des ordinateurs , qui a été le début d'une grande aventure pour l'humanité❤️.</p>
                </div>
              </div>
              <blockquote class="white" style="border-left: 5px solid  #344277;">
                "Avoir la classe c'est detre à l'instant présent quelqu'un à la différence des autres."
                Sam-Borklacq
            </blockquote>
              <div class="timeline-item" data-text="2021">
                <div class="timeline__content"><img class="timeline__img" src="assets/rocket.gif"/>
                  <h2 class="timeline__content-title">2021</h2>
                  <p class="timeline__content-desc">Actuellement nous ne pouvons pas encore voyager dans le temps ou se téléporter mais l'humain actuel est capable de tellement de choses. La preuve voyager dans l'espace n'est plus un problème pour nous.</p>
                  <img  style="margin-top: 15px;" class="materialboxed" width="200" src="assets/daryl.jpg">
                  <h6 class="white-text">Un humain moderne.</h6>
                </div>
              </div>
              <div class="timeline-item" data-text="Les IA">
                <div class="timeline__content"><img class="timeline__img" src="assets/ia.gif"/>
                  <h2 class="timeline__content-title">Les IA</h2>
                  <p class="timeline__content-desc">Dans le futur nous seront peut etre dominé par des intelligences artificielles .😂<br> Il y en 2021 qui sont capables de tenir des conversations intelligibles, d'autres qui arrivent à battre des champions du monde de jeu de stratégie comme l'echec.</p>
                </div>
              </div>
              <div class="timeline-item" data-text="La réalité virtuelle">
                <div class="timeline__content"><img class="timeline__img" src="assets/vr.gif"/>
                  <h2 class="timeline__content-title">La VR et AR</h2>
                  <p class="timeline__content-desc">Grâce à la réalité virtuelle on peut être imergé dans un monde virtuel et même effectuer des interactions avec des objets. On espère qu'elle pourra evoluer comme dans SAO.😬</p>
                </div>
              </div>
              <blockquote class="white" style="border-left: 5px solid  #344277;">
                "Au lieu de planifier l'imprévisible planifions ensemble le futur."
                Jean Marie Descarpentries.
            </blockquote>
              <div class="timeline-item" data-text="Le futur">
                <div class="timeline__content"><img class="timeline__img" src="assets/evangelion.gif"/>
                  <h2 class="timeline__content-title">2090</h2>
                  <p class="timeline__content-desc">
                      Nous vivons déja en colonie sur mars avec des extra-terrestres. Qui aurait cru que evangelion etait logique .
                  </p>
                </div>
              </div>
              <div style="border-bottom: solid 5px oldlace; min-width: max-content">

              </div>
              <div class="container center">
                  <h4 class="white-text">Si vous avez un casque VR voici à quoi ressemble notre monde en 2090</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2uoroYM9wF8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!-- <div class="timeline-item" data-text="NEW TIMELINE DESIGN">
                <div class="timeline__content"><img class="timeline__img" src="kk.jpg"/>
                  <h2 class="timeline__content-title">1922</h2>
                  <p class="timeline__content-desc">At the end of August 1922, the Turkish armieswon their ultimate victory. Within a few weeks, the Turkish mainland was completelyliberated, the armistice signed, and the rule of the Ottoman dynasty abolished</p>
                </div>
              </div> -->
            
            </div>
          </div>

    </body>  
    <script>
        var mySong = document.getElementById("mySong");
        var icon = document.getElementById("icon");

        icon.onclick = function() {
            if(mySong.paused) {
                mySong.play();
            } else {
                mySong.pause();
            }
        }
    </script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
			$(document).ready(function(){
				$('.sidenav').sidenav();
				$('.parallax').parallax();
				$('.tabs').tabs();
			});
		</script>
	<script>
		document.addEventListener("DOMContentLoaded", function(){
        $('.preloader-background').delay(10000).fadeOut('slow');
		});
    </script>
    <script>
        var hidden, visibilityChange;
        if (typeof document.hidden !== "undefined") {
            hidden = "hidden";
            visibilityChange = "visibilitychange";
        } else if (typeof document.mozHidden !== "undefined") {
            hidden = "mozHidden";
            visibilityChange = "mozvisibilitychange";
        } else if (typeof document.msHidden !== "undefined") {
            hidden = "msHidden";
            visibilityChange = "msvisibilitychange";
        } else if (typeof document.webkitHidden !== "undefined") {
            hidden = "webkitHidden";
            visibilityChange = "webkitvisibilitychange";
        }

        document.addEventListener(visibilityChange, handleVisibilityChange, false);

        function handleVisibilityChange() {
            $("audio").prop('muted', document[hidden]);
        }
    </script>
    <script>
         (function($) {
            $.fn.timeline = function() {
                var selectors = {
                id: $(this),
                item: $(this).find(".timeline-item"),
                activeClass: "timeline-item--active",
                img: ".timeline__img"
                };
                selectors.item.eq(0).addClass(selectors.activeClass);
                selectors.id.css(
                "background-image",
                "url(" +
                    selectors.item
                    .first()
                    .find(selectors.img)
                    .attr("src") +
                    ")"
                );
                var itemLength = selectors.item.length;
                $(window).scroll(function() {
                var max, min;
                var pos = $(this).scrollTop();
                selectors.item.each(function(i) {
                    min = $(this).offset().top;
                    max = $(this).height() + $(this).offset().top;
                    var that = $(this);
                    if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
                    selectors.item.removeClass(selectors.activeClass);
                    selectors.id.css(
                        "background-image",
                        "url(" +
                        selectors.item
                            .last()
                            .find(selectors.img)
                            .attr("src") +
                        ")"
                    );
                    selectors.item.last().addClass(selectors.activeClass);
                    } else if (pos <= max - 40 && pos >= min) {
                    selectors.id.css(
                        "background-image",
                        "url(" +
                        $(this)
                            .find(selectors.img)
                            .attr("src") +
                        ")"
                    );
                    selectors.item.removeClass(selectors.activeClass);
                    $(this).addClass(selectors.activeClass);
                    }
                });
                });
            };
            })(jQuery);

            $("#timeline-1").timeline();

    </script>
</html>