//For Firefox we have to handle it in JavaScript 
var vids = $(".video-entrada"); 
$.each(vids, function(){
       this.controls = false; 
}); 
//Loop though all Video tags and set Controls as false

$(".video-entrada").click(function() {
  //console.log(this); 
  if (this.paused) {
    this.play();
  } else {
    this.pause();
  }
});