//change bgImages
const images = ["assets/img/spray.png", "assets/img/telephone.png", "assets/img/tool-1.png", "assets/img/tool-2.png", "assets/img/tool-3.png", "assets/img/tool-4.png", "assets/img/tool-5.png"],
      random = Math.floor(Math.random() * images.length);

let bgImg1 = document.getElementById('img1'),
    content = document.getElementById('content');

window.addEventListener('load', setImageSize);
window.addEventListener('resize', setImageSize);

console.log(bgImg1);
console.log(content);
console.log(content.clientHeight);

function setImageSize() {
    bgImg1.style.maxHeight = (content.clientHeight * 0.9) + "px";
}
