<?php
if (file_exists("JSONs/" . $_GET['artist'] . "_info.json")) {
    $titlePrimary = "h5";
    $titleSecondary = "h6";
    $artist = $_GET['artist'];
    $json = json_decode(file_get_contents("JSONs/" . $artist . "_info.json"));

    function returnArrayValue(string $jsonKey, int $arrayKey, string $default)
    {
        global $json;
        if (!isset($json->$jsonKey[$arrayKey]) || $json->$jsonKey[$arrayKey] != "") {
            return $default . " " . $arrayKey;
        }
        return $json->$jsonKey[$arrayKey];
    }
    function createImg(string $id, string $class, string $imgName, string $altGerman, string $altEnglish)
    {
        global $artist;
        echo "<img id=" . $id . "class = " . $class . " src = media/" . $artist . "_" . $imgName . ".jpg alt='" . $altGerman . " | " . $altEnglish . "' >";
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
            <?php
            # HEADER IMAGE
            if (file_exists("media/" . $artist . "_header.jpg")) createImg("header-image", "", "header", "Kopfzeilenbild", "header image");

            #PROJECT TITILE
            $key = "project-title";
            if (isset($json->$key) && $json->$key != "") echo "<h1 id='project-title'>" . $json->$key . "</h1>";

            # ARTIST NAME
            $key = "artist-name";
            if (isset($json->$key) && $json->$key != "") echo "<h3 id='artist-name'>" . $json->$key, "</h3>";

            # PROJECT DESCRIPTION TITLE GERMAN
            $key = "project-description-german";
            if (isset($json->$key) && $json->$key != "") echo "<" . $titlePrimary . ">DAS PROJEKT</" . $titlePrimary . ">";

            # PROJECT DESCRIPTION TITLE ENGLISH
            $key = "project-description-english";
            if (isset($json->$key) && $json->$key != "") echo "<" . $titleSecondary . ">ABOUT THE PROJECT</" . $titleSecondary . ">";

            # PROJECT DESCRIPTION GERMAN
            $key = "project-description-german";
            if (isset($json->$key) && $json->$key != "") echo "<p class='body_standard'>" . $json->$key . "</p>";

            # PROJECT DESCRIPTION ENGLISH
            $key = "project-description-english";
            if (isset($json->$key) && $json->$key != "") echo "<p class='body_standard'>" . $json->$key . "</p>";

            # ARTIST DESCRIPTION TITLE GERMAN
            $key = "artist-description-german";
            if (isset($json->$key) && $json->$key != "") {
                if ($artist == ("Tobias" || "Samuel")) echo "<" . $titlePrimary . ">ZUM KÜNSTLER</" . $titlePrimary . ">";
                else echo "<" . $titlePrimary . ">ZUR KÜNSTLERIN</" . $titlePrimary . ">";
            } elseif (file_exists("media/" . $artist . "_portrait.jpg")) {
                if ($artist == ("Tobias" || "Samuel")) echo "<" . $titlePrimary . ">DER KÜNSTLER</" . $titlePrimary . ">";
                else echo "<" . $titlePrimary . ">DIE KÜNSTLERIN</" . $titlePrimary . ">";
            }

            # ARTIST DESCRIPTION TITLE ENGLISH
            $key = "artist-description-english";
            if (isset($json->$key) && $json->$key != "") echo "<" . $titleSecondary . ">ABOUT THE ARTIST</" . $titleSecondary . ">";
            elseif (file_exists("media/" . $artist . "_portrait.jpg")) echo "<" . $titleSecondary . ">THE ARTIST</" . $titleSecondary . ">";

            # ARTIST PORTRAIT
            if (file_exists("media/" . $artist . "_portrait.jpg")) {
                createImg("artist-protrait", "", "portrait", "Künstlerportrait", "a potrait of the artist");
            }

            # ARTIST DESCRIPTION GERMAN
            $key = "artist-description-german";
            if (isset($json->$key) && $json->$key != "") echo "<p class='body_standard'>" . $json->$key . "</p>";

            # ARTIST DESCRIPTION ENGLISH
            $key = "artist-description-english";
            if (isset($json->$key) && $json->$key != "") echo "<p class='body_standard'>" . $json->$key . "</p>";

            # EMAIL
            $key = "email";
            if (isset($json->$key) && $json->$key != "") echo "<a href='mailto:".$json->$key."'>".$json->$key."</a>";

            # SOCIALS
            if (file_exists("JSONs/social_icons.json")) {
                $svgJson = json_decode(file_get_contents("JSONs/social_icons.json"));
                $key = "socials";
                foreach ($json->$key as $currentPlatform) {
                    $key = key($currentPlatform);
                    if ($currentPlatform->$key != "" && isset($svgJson->$key)) {
                        echo "<a href=" . $currentPlatform->$key . " target='_blank'><svg class='icon' width=64 height=64 viewbox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'>" . $svgJson->$key . "</svg></a>";
                    }
                }
            }

            # IMAGE GALLERY
            $currentArtwork = 1;
            while (file_exists("media/" . $artist . "_artwork_" . $currentArtwork . ".jpg")) {
                if ($currentArtwork % 3 == 0) echo "<br />";
                createImg("artwork-" . $currentArtwork, "artwork-image", "artwork_" . $currentArtwork, returnArrayValue("images-altTexts-german", $currentArtwork - 1, "Galeriebild" . $currentArtwork), returnArrayValue("images-altTexts-english", $currentArtwork - 1, "gallery image" . $currentArtwork));
                $currentArtwork++;
            }

            # VIDEO GALLERY
            $key = "videos-links";
            $currentVideo = 1;
            while (file_exists("media/" . $artist . "_video_" . $currentVideo . ".mp4")) {
                if ($currentVideo % 3 == 0) echo "<br />";
                echo "<video width='1080' height='720' autoplay muted controls"
                    . " alt='" . returnArrayValue("videos-altTexts-german", $currentArtwork - 1, "Video" . $currentArtwork) . " | " . returnArrayValue("videos-altTexts-english", $currentArtwork - 1, "video" . $currentArtwork) . "'"
                    . " src='media/" . $artist . "_video_" . $currentVideo . ".mp4" . "' type='video/mp4'>"
                    . "Ihr Browser unterstützt dieses Videoformat nicht | Your browser does not support this video file"
                    . "</video>";
                $currentVideo++;
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