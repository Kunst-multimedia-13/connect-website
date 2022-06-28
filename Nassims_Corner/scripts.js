var artistsBackup = new Array("Angela", "AnnaLena", "Eli", "Elli", "JuliaC", "JuliaP", "Juliana", "LauraH", "LauraM", "Leslie", "Magdalena", "Nassim", "Nataliia", "Raffaela", "Ricarda", "Samuel", "Sandra", "Thao", "Theresa", "Tobias", "Yunuo");
var artists = artistsBackup.slice();

function createThumbnails() {
    let artworkCount = 0;
    while (artists.length > 0) {
        if (artworkCount % 5 == 0) {
            document.getElementById("gallery").append(document.createElement('br'));
        }
        artworkCount++;
        let newThumbnail = document.createElement('input');
        let currentArtist = artists[Math.floor(Math.random() * artists.length)];
        newThumbnail.type = "submit";
        newThumbnail.value = currentArtist;
        newThumbnail.name = "artist";
        newThumbnail.style = "background-image: url('ArtworkPreviews/Artist=PP " + currentArtist + ".jpg'); background-position: center; background-size: cover; width: 128px; height: 128px; border-style: none; color: rgba(0,0,0,0)";
        document.getElementById("gallery").append(newThumbnail);
        artists = artists.filter((artist) => { return artist != currentArtist });
    }
}


// Code for random picture
window.onload = createThumbnails;