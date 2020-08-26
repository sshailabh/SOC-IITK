function displayNextImage() {
    x = (x === images.length - 1) ? 0 : x + 1;
    document.getElementById("img").src = images[x];
}

function displayPreviousImage() {
    x = (x <= 0) ? images.length - 1 : x - 1;
    document.getElementById("img").src = images[x];
}
function displayNextImage1(){
  x1 = (x1 === images1.length - 1) ? 0 : x1 + 1;
  document.getElementById("img1").src = images1[x1];
}
function displayPreviousImage1(){
  x1=(x1<=0)?images1.length-1:x1-1;
 document.getElementById("img1").src=images1[x1];
}
function displayNextImage2(){
 x2 = (x2 === images2.length - 1) ? 0 : x2 + 1;
 document.getElementById("img2").src = images2[x2];
}
function displayPreviousImage2(){
 x2 = (x2 <= 0) ? images2.length - 1 : x2 - 1;
 document.getElementById("img2").src = images2[x2];
}
function displayNextImage3(){
 x3 = (x3 === images3.length - 1) ? 0 : x3 + 1;
 document.getElementById("img3").src = images3[x3];
}
function displayPreviousImage3(){
 x3 = (x3 <= 0) ? images3.length - 1 : x3 - 1;
 document.getElementById("img3").src = images3[x3];
}

function startTimer() {
    setInterval(displayNextImage, 3000);
    setInterval(displayNextImage1,3000);
    setInterval(displayNextImage2,3000);
    setInterval(displayNextImage3,3000);
}

var images = [], x = -1,x1=-1,x2=-1,x3=-1;
images[0] = "confi2.jpg";
images[1] = "confi3.jpg";
images[2] = "confi.jpg";
var images1=[];
images1[0]="b+2.jpg";
images1[1]="b+3.png";
images1[2]="b+.jpg";
var images2=[];
images2[0]="smoke2.jpg";
images2[1]="smoke3.jpg";
images2[2]="smoke.jpg";
var images3=[];
images3[0]="sleep2.jpg";
images3[1]="sleep3.png";
images3[2]="sleep.jpg";

function toggle_visibility(id)
{
  var e = document.getElementById(id);
if(e.style.display == 'block')
e.style.display = 'none';
else
e.style.display = 'block';
}
