var Marquee=Class.create({initialize:function(e){if(this.element=$(e),this.paused=!1,this.element.scrollWidth!=this.element.clientWidth){var t=e.getAttribute("data-duration")||40;this.container=this.element.wrap("div"),this.container.setStyle({width:this.element.clientWidth+"px",height:this.element.clientHeight+"px",overflow:"hidden"}),this.originalWidth=this.element.scrollWidth,this.element.innerHTML+=this.element.innerHTML,this.resetWidth=this.element.scrollWidth-this.originalWidth,this.element.setStyle({width:this.element.scrollWidth+"px",height:this.element.scrollHeight+"px",overflow:"auto"});var i=t/this.element.getWidth();i=(100*i).round()/100,new PeriodicalExecuter(this.move.bind(this),i),this.element.observe("mouseover",this.pause.bind(this)),this.element.observe("mouseout",this.play.bind(this))}},move:function(){this.paused||(this.container.scrollLeft==this.resetWidth&&(this.container.scrollLeft=0),this.container.scrollLeft+=1)},pause:function(){this.paused=!0},play:function(){this.paused=!1}});Event.observe(document,"dom:loaded",function(){$$(".marquee").each(function(e){new Marquee(e)})});const images=["assets/img/spray.png","assets/img/telephone.png","assets/img/tool-1.png","assets/img/tool-2.png","assets/img/tool-3.png","assets/img/tool-4.png","assets/img/tool-5.png"],random=Math.floor(Math.random()*images.length);let bgImg1=document.getElementById("img1"),content=document.getElementById("content");function setImageSize(){bgImg1.style.maxHeight=.9*content.clientHeight+"px"}window.addEventListener("load",setImageSize),window.addEventListener("resize",setImageSize),console.log(bgImg1),console.log(content),console.log(content.clientHeight),document.addEventListener("wpcf7mailsent",function(e){console.log("Mail sent!")},!1);