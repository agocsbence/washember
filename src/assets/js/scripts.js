let bgImg1 = document.getElementById('img1'),
    content = document.getElementById('content'),
    form = document.getElementById('wpcf7-f11-o1'),
    thankYou = document.getElementById('thankyou'),
    thankYouBtn = document.getElementById('tyButton');

/* watch image size of img1 */
window.addEventListener('load', setImageSize);
window.addEventListener('resize', setImageSize);
function setImageSize() {
    bgImg1.style.maxHeight = (content.clientHeight * 0.9) + "px";
}

/* listen for email sending */
document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log('Mail sent!');
    form.style.display = "none";
    thankYou.style.display = "block";
}, false );

tyButton.addEventListener('click', showForm);

function showForm() {
    form.style.display = "block";
    thankYou.style.display = "none";
}
