var artistsBackup = new Array("Angela", "AnnaLena", "Eli", "Elli", "JuliaC", "JuliaP", "Juliana", "LauraH", "LauraM", "Leslie", "Magdalena", "Nassim", "Nataliia", "Raffaela", "Ricarda", "Samuel", "Sandra", "Thao", "Tobias", "Yunuo");
var artists = artistsBackup.slice();

function createThumbnails() {
    let artworkCount = 0;
    while (artists.length > 0) {
        // if (artworkCount % 5 == 0) {
        //   document.getElementById("gallery").append(document.createElement('br'));
        // }
        artworkCount++;
        let newThumbnail = document.createElement('img');
        let currentArtist = artists[Math.floor(Math.random() * artists.length)];
        newThumbnail.src = "ArtworkPreviews/Artist=PP " + currentArtist + ".jpg";


        newThumbnail.setAttribute('class', 'galleryImage');
        // newThumbnail.width = "";
        // newThumbnail.height = "auto";
        document.getElementById("gallery").append(newThumbnail);
        //newThumbnail.addEventListener("click", presentArtwork(currentArtist));
        artists = artists.filter((artist) => { return artist != currentArtist });
    }
}



// Code for random picture
window.onload = createThumbnails;