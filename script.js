

var allPics = new Array ("Angela", "AnnaLena", "Eli", "Elli", "JuliaC", "JuliaP", "Juliana", "LauraH", "LauraM", "Leslie", "Magdalena", "Nassim", "Nataliia", "Raffaela", "Ricarda", "Samuel", "Sandra", "Thao", "Tobias", "Yunuo");



// Code for random picture
window.onload = choosePic;

function choosePic() {
  var rdm_num = Math.floor(Math.random() * allPics.length);
  document.getElementById("curr-project-img").src = "ArtworkPreviews/Artist=PP " + allPics[rdm_num] + ".jpg";
}


// Code for project image parallax
window.addEventListener("scroll", function() {
  var value = window.scrollY;
  let project_pic = document.getElementById("curr-project-img");
  //project_pic.style.objectPosition = value * 10 + "% " + value * 10 + "%";
  project_pic.style.objectPosition = "50% " + (value * 0.05 + 10) + "%";
})


