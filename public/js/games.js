    window.onload = function() {
var btn = document.getElementById('btn');
 
 console.log(btn)
btn.addEventListener('click', function() {
  console.log("ok")
    const music = new Audio('/audios/ライオンの鳴き声1.mp3');
    music.play();
  
}, false);
}