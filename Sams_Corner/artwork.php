<?php
if (file_exists("JSONs/" . $_GET['artist'] . "_info.json")) {
    $lang = "german";
    $artist = $_GET['artist'];
    $json = json_decode(file_get_contents("JSONs/" . $artist . "_info.json"));

    function echoObjValue(string $key)
    {
        global $json;
        echo $json->$key;
    }
    function returnArrayValue(string $jsonKey, int $arrayKey, string $default) {
        global $json;
        if (!isset($json->$jsonKey[$arrayKey])) {
        return $default . " " . $arrayKey;
        }
        return $json->$jsonKey[$arrayKey];
    }

    function createImg(string $id, string $class, string $imgName, string $altEnglish, string $altGerman)
    {
        global $artist, $lang;
        echo "<img id=" . $id . "class = " . $class . " src = images/" . $artist . "_" . $imgName . ".jpg";
        if ($lang == "english") {
            echo " alt='" . $altEnglish . "'";
        } else {
            echo " alt='" . $altGerman . "'";
        }
        echo ">";
    }

?>
    <!DOCTYPE html>
    <html lang="EN">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>con:nect</title>
        <link rel="stylesheet" href="style.css" />
        <link id="favicon" rel="icon" href="https://cdn.glitch.global/cd1845f1-7885-4da2-ad8b-cd3882b8f972/Connect_Illus_Dots.svg?v=1652605879062" type="image/svg">
    </head>

    <body>
        <header>
            <nav class="navbar">
                <ul class="menu body_large">
                    <li><a href="./index.html">
                            <h6 class="selected_nav">Home</h6>
                        </a></li>
                    <li><a href="./about_us.html">
                            <h6>About us</h6>
                        </a></li>
                    <li><a href="./contact.html">
                            <h6>Contact</h6>
                        </a></li>
                </ul>
            </nav>
        </header>

        <section class="content">
            <?php if (file_exists("images/" . $artist . "_header.jpg")) {
                createImg("header-image", "", "header", "header image", "Kopfzeilenbild");
            }

            $key = "project-title";
            if (isset($json->$key)) { ?>
                <h1 id="project-title"><?php echoObjValue($key) ?></h1>
            <?php }

            $key = "artist-name";
            if (isset($json->$key)) { ?>
                <h3 id="artist-name"><?php echoObjValue($key) ?></h3>
            <?php }

            $key = "project-description-" . $lang;
            if (isset($json->$key)) { ?>
                <h6 id="project-description-introduction">
                    <?php
                    if ($lang == "english") {
                        echo "ABOUT THE PROJECT";
                    } else {
                        echo "DAS PROJEKT";
                    } ?> </h6>
                <p id="project-description" class="body_standard"><?php echoObjValue("project-description-" . $lang) ?></p>
            <?php }

            $key = "artist-description-" . $lang;
            if (isset($json->$key)) {
            ?> <h6 id="artist-description-introduction">
                    <?php
                    if ($lang == "english") {
                        echo "ABOUT THE ARTIST";
                    } else {
                        if ($artist == ("Tobias" || "Samuel")) echo "ZUM KÜNSTLER";
                        else {
                            echo "ZUR KÜNSTLERIN";
                        }
                    } ?>
                </h6>
            <?php
            } elseif (file_exists("images/" . $artist . "_portrait.jpg")) {
            ?> <h6 id="artist-description-introduction">
                    <?php
                    if ($lang == "english") {
                        echo "THE ARTIST";
                    } else {
                        if ($artist == ("Tobias" || "Samuel")) echo "DER KÜNSTLER";
                        else {
                            echo "DIE KÜNSTLERIN";
                        }
                    } ?>
                </h6>
            <?php
            }

            if (file_exists("images/" . $artist . "_portrait.jpg")) {
                createImg("artist-protrait", "", "portrait", "a potrait of the artist", "Künstlerportrait");
            }

            $key = "artist-description-" . $lang;
            if (isset($json->$key)) {
            ?><p id="artist-description" class="body_standard"><?php echoObjValue($key) ?></p>
            <?php }

            $currentArtwork = 1;
            while (file_exists("images/" . $artist . "_artwork_" . $currentArtwork . ".jpg")) {
                if ($currentArtwork % 3 == 0) echo "<br />";
                createImg("artwork-" . $currentArtwork, "artwork-image", "artwork_" . $currentArtwork, returnArrayValue("images-altText-english", $currentArtwork-1, "gallery image ". $currentArtwork), returnArrayValue("images-altText-german", $currentArtwork-1, "Galeriebild ". $currentArtwork));
                $currentArtwork++;
            }

            $key = "videos-links";
            $currentVideo = 1;
            foreach ($json->$key as $currentVideoLink) {
                if ($currentVideo % 3 == 0) echo "<br />";
                ?>
                <iframe width = 480 height = 270 class = "artwork-video" src = <?php echo $currentVideoLink. "?autoplay=1&mute=1?loop=1 title = ".returnArrayValue("videos-altTexts-".$lang, $currentVideo-1, "Video ". $currentVideo); ?>></iframe>
                <?php
            }
            ?>
        </section>

        <div class="spacing_64"></div>
        <footer class="main-footer" style="background-color: var(--secondary-shade2); z-index: 0">
            <div class="footer-content">
                <h1 style="height: 85px">contact us</h1>
                <h6 class="height" style="color: var(--secondary-shade1)">email</h6>
                <p class="body_large">connect_art@lrz.uni-muenchen.de</p>
                <div id="privacy-policy_terms-of-service" class="btn_l">
                    <a href="privacy-policy.html">privacy policy</a>
                    <img src="https://cdn.glitch.global/cd1845f1-7885-4da2-ad8b-cd3882b8f972/Connect_Logo_LMU_Big.svg?v=1652605879344" alt="LMU logo" />

                </div>
                <p class="caption">
                    copyright © 2022 con:nect
                </p>
                <div class="spacing_48">
                </div>
            </div>
        </footer>
    </body>
<?php
} else {
    header("Location: index.html");
}
?>