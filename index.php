<?php
session_start();
require 'fonctions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/root&font.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body>
        <?php require 'header.php';?>
        <main>
            <div class="header">
                <h1 data-aos="zoom-in" data-aos-duration="3000"><?php if(isset($_SESSION['user'])){echo 'Bienvenue chez ';}?>SonoS <?php if(isset($_SESSION['user'])){echo $_SESSION['user']['login'];}?>, le sanctuaire musical.</h1>
            </div>
            <div class="Container">
                <div class="pres" >
                    <h1 data-aos="fade-down"  data-aos-duration="1500"> La Musique </h1>
                    <p data-aos="fade-up"  data-aos-duration="2000">
                        Art universel, la musique qu'elle soit classique ou moderne, accompagne chaque
                        instant de notre vie, du petit-matin à la nuit dans les clubs, dans nos moments
                        de tristesse comme de joie. Nous l'écoutons seul ou nous la partageons entre amis.
                        Pour citer Kant : " La musique est la langue des émotions".Il en est des notes de musique
                        comme des voyages, les deux transportent des émotions, une destination vers le bonheur et rien d'autre.
                        Elle rend perceptible la profondeur de l'âme ; elle en est l'expression universelle,
                        dépassant bien au-delà, toutes les frontières de la matière, du temps et de
                        "Faites de la musique, Fête de la Musique" est le mot d'ordre de tous
                        les amoureux de la musique qui se rassemble tous les ans le 21 juin pour
                        fêter la musique, fête instaurée par Jack Lang, ancien ministre de la culture.
                        Un monde sans musique, c'est comme un monde sans amour... une vie sans vie !
                    </p>
                </div>
                <div class="parallax-style">
                    <div class="blur"><h1 data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">Les Styles</h1></div>
                </div>
                <div id='link-foot' class="style">
                    <section  data-aos="fade-up" data-aos-duration="3000">
                        <div class="image1"><h2>Le Rap</h2></div>
                        <p>
                            En 1995-96, le rap américain change définitivement avec des artistes comme 2Pac,
                            Notorious BIG, Coolio, KRS One, LL Cool J puis les Fugees, Nas, Jay-Z et la
                            création de labels très puissants comme Death Row ou Def Jam.
                            Le rap est une nouvelle forme d'expression vocale sur fond musical. Celui-ci est né dans les
                            ghettos aux États-Unis. Le rap est un genre musical qui s'est popularisé
                            au fil des années et qui connait son apogée en 1980. Son apparition est due
                            à l'influence d'autres genres musicaux, principalement le reggae, le blues
                            et le jazz. Bien qu'il se soit fait connaitre dès les années 70, le rap a
                            commencé à être chanté dès la fin des années 60.
                            Ce genre musical a pour thèmes récurants l'amour, la politique ainsi que
                            la pauvreté liée aux différents problèmes sociaux. Le rap a également un
                            style rythmique propre à lui, des couplets rimés séparés de refrains. Le rap
                            restera dans les styles favori encore longtemps.
                        </p>
                    </section>
                    <section data-aos="fade-down" data-aos-duration="3000">
                        <div class="image2"><h2>La Drill</h2></div>
                        <p>
                            Depuis déjà plusieurs années, en même temps que la propagation
                            du mouvement grime au Royaume-Uni, un genre plus sombre apparaît
                            dans les quartiers de la capitale anglaise, la drill. Originaire
                            des quartiers South Side de Chicago, elle est relevée au grand
                            public grâce au succès d’un rappeur nommé Chief Keef. Elle voyage
                            ensuite jusqu’au Royaume-Uni où elle va connaître un engouement
                            important chez les gangs de Londres.
                            À l’image de ce qu’il se passe en Amérique et en Angleterre depuis
                            quelques années, la drill s’implante en France et s’impose tout
                            simplement comme l’un des genres les plus populaires du moment,
                            l’une des balises d’un hip-hop qui se renouvèle sans cesse. Freeze
                            Corleone, Lyonzon, 1PLIKÉ140 et Diddi Trix sont là pour le prouver,
                            reprenant les choses là où Kaaris les avait laissées avec «Or Noir».
                            La Drill fait partie aujourd'hui des styles de musique les plus écouté au monde
                            et pour encore longtemps.
                        </p>
                    </section>
                    <section data-aos="fade-up" data-aos-duration="3000">
                        <div class="image3"><h2>Le R'n'B</h2></div>
                        <p>
                            Le R’N’B (ou RNB ou R&B) est né dans les années 1980 aux États-Unis de la
                            rencontre du hip-hop, de la soul et de la pop. On ne confondra pas R’N’B
                            et Rhythm And Blues, style musical des années 50-60.
                            C’est aux États-Unis que le R’N’B voit le jour, dans les grandes villes
                            du pays puis surtout en Angleterre.
                            À l’origine, le R’N’B tient sa principale source du hip-hop auquel certains
                            DJ et producteurs ont ajouté des synthétiseurs et un son plus « commercial ».
                            Le R’N’B est aussi, dès le départ, un mouvement (à la différence du hip-hop
                            par exemple) où les femmes tiennent un rôle central, notamment au chant. On
                            citera, parmi les pionniers du genre, Mary J. Blidge ou encore Aaliyah, Brandy,
                            Zhané…
                            Suivront au cours des années 1990 puis 2000 des « phénomènes » comme le groupe
                            Boys II Men, R Kelly, Usher, Destiny’s Child (avec Beyonce)…
                            Le R’N’B s’est « installé » en France dès le début des années 90 avec des
                            groupes américains comme Boys II Men.
                        </p>
                    </section>
                </div>
                <div class="parallax-lien">
                    <div class="blur"><h1 data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">Les Playlists</h1></div>
                </div>
                <div class="playlist">
                    <h1 data-aos="zoom-out" data-aos-duration="2000">Découvrez quelques albums et Playlists Intéressants !!!</h1>
                    <div class="grille" data-aos="zoom-in" data-aos-duration="3000">
                        <img class ="div1" src="https://images.wave.fr/images//astroworld.jpg" alt="img grille" width="150px">
                        <img class ="div2" src="https://static.qobuz.com/images/covers/xc/8a/qjuyvjoy08axc_600.jpg" alt="img grille" width="150px">
                        <img class ="div3" src="https://m.media-amazon.com/images/I/71GBsl4AoqL._SL1400_.jpg" alt="img grille" width="150px">
                        <img class ="div4" src="https://static.fnac-static.com/multimedia/Images/FR/NR/6c/2e/c1/12660332/1540-1/tsp20200916170059/Nouvel-album.jpg" alt="img grille" width="150px">
                        <img class ="div5" src="https://static.fnac-static.com/multimedia/Images/FR/NR/c3/6d/c1/12676547/1540-1/tsp20200917142335/Shoot-For-The-Stars-Aim-For-The-Moon.jpg" alt="img grille" width="150px">
                        <img class ="div6" src="https://cdns-images.dzcdn.net/images/cover/4d2f748127feb33e3fb8a397b95bea94/200x200.jpg" alt="img grille" width="150px">
                        <img class ="div7" src="https://static.fnac-static.com/multimedia/Images/FR/NR/3a/62/d3/13853242/1540-1/tsp20211027111256/Akimbo.jpg" alt="img grille" width="150px">
                        <img class ="div8" src="https://media.senscritique.com/media/000020059544/source_big/Body_Single.jpg" alt="img grille" width="150px">
                        <img class ="div9" src="https://static.fnac-static.com/multimedia/Images/FR/NR/64/e5/a8/11068772/1540-1/tsp20200611121920/After-Hours.jpg" alt="img grille" width="150px">
                        <img class ="div10" src="https://m.media-amazon.com/images/I/717mskB5iEL._SL1200_.jpg" alt="img grille" width="150px">
                        <img class ="div11" src="https://m.media-amazon.com/images/I/81jo9g-1cVL._SL1425_.jpg" alt="img grille" width="150px">
                        <img class ="div12" src="https://media.senscritique.com/media/000004822401/325/I_Am_Sasha_Fierce.jpg" alt="img grille" width="150px">
                        <div class="div13"></div>
                        <div class="div14"></div>
                    </div>
                </div>
            </div>
        </main>
        <?php require 'footer.php';?>
    </body>
    <script>
        AOS.init();
    </script>
</html>