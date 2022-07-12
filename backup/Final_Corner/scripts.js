var artistsBackup = new Array("Angela", "AnnaLena", "Eli", "Elli", "JuliaC", "JuliaP", "Juliana", "LauraH", "LauraM", "Leslie", "Magdalena", "Nassim", "Nataliia", "Raffaela", "Ricarda", "Samuel", "Sandra", "Thao", "Theresa", "Tobias", "Yunuo");
var artistFullName_b = new Array("Angela Denninger", "Anna Lena Welter", "Elisabeth Frank", "Elisabeth Elmauer", "Julia Cox", "Julia Prottengeier", "Juliana Gutiérrez Wiest", "Laura Hollmann", "Laura Mayr", "Leslie Scholl", "Magdalena Ammer", "Nassim Chamseddine", "Nataliia Daliba", "Raffaela Kammer", "Ricarda Jocher", "Samuel Brookman-Amissah", "Sandra Kienle", "Diep-Thao Pham", "Theresa Zimmermann", "Tobias Biber", "Yunuo Zhang");
var artists = artistsBackup.slice();
var artistsFullName = artistFullName_b.slice();

function createThumbnails() {
    let artworkCount = 0;
    while (artists.length > 0) {
        // if (artworkCount % 5 == 0) {
        //     document.getElementById("gallery").append(document.createElement('br'));
        // }
        artworkCount++;
        let newThumbnail = document.createElement('input');
        let currentNum = Math.floor(Math.random() * artists.length);
        let currentArtist = artists[currentNum];
        newThumbnail.type = "submit";
        newThumbnail.className = "galleryImage";
        newThumbnail.value = currentArtist + currentNum;
        newThumbnail.name = "artist";

        //newThumbnail.setAttribute('class', 'galleryImage');
        // tempImage = document.createElement('img');
        // tempImage.src = "ArtworkPreviews/Artist=PP " + currentArtist + ".jpg";
        // document.append(tempImage);
        // document.getImage

        newThumbnail.style = "background-image: url('ArtworkPreviews/Artist=PP " + currentArtist + ".jpg');";
        //newThumbnail.innerHTML = artistFullName_b[currentNum];
        document.getElementById("gallery").append(newThumbnail);
        artists = artists.filter((artist) => { return artist != currentArtist });
    }
}


// Code for random picture
window.onload = createThumbnails;