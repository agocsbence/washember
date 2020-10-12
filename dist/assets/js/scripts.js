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
