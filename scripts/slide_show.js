let i = 0;
let file = "../images/";
let images = [file + 'bikers.jpg',file + 'runners_2.jpg', file + 'swimmers.jpg'];


function changeImg() {
    document.getElementById("slide_show").src = images[i];
    if(i < images.length - 1) {
    i++;
} else {
    i = 0;
}
    setTimeout("changeImg()", 3000);
}
window.onload = changeImg();