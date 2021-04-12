var Marquee = Class.create({
  
    initialize: function(element) {
      this.element = $(element);
      this.paused = false;
    
      // If everything fits don't bother with all this mess
      if(this.element.scrollWidth == this.element.clientWidth) return;
    
      // Defaults to scrolling through all content in 40 seconds.
      // There is a limit to how fast we can go since we move by a pixel
      // at a time (for smooth scrolling) and most browsers can only call
      // our callback so fast even if we tell it to go faster.
      var duration = element.getAttribute('data-duration') || 40;
    
      // Create wrapping container to scroll the marquee in. Move
      // some of the relevant marquee styles to this wrapper.
      this.container = this.element.wrap('div');
      this.container.setStyle({
        width: this.element.clientWidth+'px',
        height: this.element.clientHeight+'px',
        overflow: 'hidden'
      });
    
      // Keep in mind how big it was so we know when to reset
      this.originalWidth = this.element.scrollWidth;
    
      // Make it look like it is wrapping around by duping content
      this.element.innerHTML += this.element.innerHTML;
    
      // Record the movement necessary before we reset to the start
      this.resetWidth = this.element.scrollWidth - this.originalWidth;
    
      // Size restrictions/clipping moved to wrapper, remove from element
      this.element.setStyle({
        width: this.element.scrollWidth+'px',
        height: this.element.scrollHeight+'px',
        overflow: 'auto'
      });
    
      // Calculate how often to move and setup timer
      var frequency = duration/this.element.getWidth();
      frequency = (100*frequency).round() / 100;
      new PeriodicalExecuter(this.move.bind(this), frequency);
    
      // Setup events to pause animation if moused over
      this.element.observe('mouseover', this.pause.bind(this));
      this.element.observe('mouseout', this.play.bind(this));
    },
    
    move: function() {
      if(this.paused) return; // Don't scroll if paused
    
      // If we have scrolled all content reset back to the start
      if(this.container.scrollLeft == this.resetWidth)
        this.container.scrollLeft = 0;
    
      // Scroll just by a pixel
      this.container.scrollLeft += 1;
    },
    
    pause: function() {this.paused = true},
    play: function() {this.paused = false}
    });
    
    // Anything with class "marquee" should be scrolled
    Event.observe(document, 'dom:loaded', function() {
    $$('.marquee').each(function(e) {new Marquee(e)})
    });
var submitBtn = document.getElementById("submitBtn");
var policyCheck = document.getElementById("policyCheck");

let bgImg1 = document.getElementById('img1'),
    content = document.getElementById('content'),
    form = document.getElementById('wpcf7-f11-o1'),
    thankYou = document.getElementById('thankyou'),
    thankYouBtn = document.getElementById('tyButton');

/* watch image size of img1 */
window.addEventListener('resize', setImageSize);
window.addEventListener('load', setImageSize);
function setImageSize() {
    if(window.innerWidth < 769 && window.innerHeight < window.innerWidth){
        console.log('mobile and landscape');
    } else if(window.innerWidth < 769) {
        console.log('mobile');
    } else {
        console.log('resize images');
        bgImg1.style.maxHeight = (content.clientHeight * 0.9) + "px";
    }
}

window.mobileAndTabletCheck = function() {
    let check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    console.log(check);
    return check;
};

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

function policyDisable() {
    if (policyCheck.checked) {
        submitBtn.disabled = false;
    } else {
        submitBtn.disabled = true;
    }
}
window.onload = policyDisable();
