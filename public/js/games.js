
const animalArray = [['らいおん','/audios/ライオンの鳴き声1.mp3', '/images/animals/らいおん.jpeg'], ['ぞう', '/audios/ゾウの鳴き声2.mp3', '/images/animals/ぞう.jpeg'], ['うま', '/audios/馬の鳴き声1.mp3', '/images/animals/うま.jpeg'],
['にわとり', '/audios/ニワトリの鳴き声3.mp3','/images/animals/にわとり.jpeg'],['からす', '/audios/カラスが鳴く夕方.mp3','/images/animals/からす.jpeg'], ['すずめ', '/audios/スズメが鳴く朝.mp3','/images/animals/すずめ.jpeg'], ['ひよこ', '/audios/ヒヨコの鳴き声.mp3','/images/animals/ひよこ.jpeg'],
['いぬ', '/audios/犬の鳴き声1.mp3', '/images/animals/いぬ.jpeg'],['ねこ', '/audios/猫の鳴き声1.mp3','/images/animals/ねこ.jpeg']]

var btn = document.getElementById('btn');
var ans1Pic = document.getElementById('ans1Pic');
var ans2Pic = document.getElementById('ans2Pic');
var next = document.getElementById('next');

function doReload() {
 

    window.location.reload();
}

var random = Math.floor( Math.random() * 9 );

var random2 = Math.floor( Math.random() * 9 )
if(random2 == random) {
    random2 = Math.floor( Math.random() * 9 )
} 


/*let element = document.getElementById('ans1');
element.innerHTML = animalArray[random][0];

let element2 = document.getElementById('ans2');
element2.innerHTML = animalArray[random2][0];*/

let randomElement = ['ans1Pic', 'ans2Pic']

function arrayShuffle(array) {
  for(var i = (array.length - 1); 0 < i; i--){

    // 0〜(i+1)の範囲で値を取得
    var r = Math.floor(Math.random() * (i + 1));

    // 要素の並び替えを実行
    var tmp = array[i];
    array[i] = array[r];
    array[r] = tmp;
  }
  return array;
}

arrayShuffle(randomElement)



let elementImg1 = document.getElementById(randomElement[0]);
let elementImg2 = document.getElementById(randomElement[1]);

elementImg1.innerHTML = '<img src="'+ animalArray[random][2] +'" class="img-fluid" alt="..." name="'+ animalArray[random][0] +'">'
elementImg2.innerHTML = '<img src="'+ animalArray[random2][2] +'" class="img-fluid" alt="..." name="'+ animalArray[random2][0] +'">'
    
    
let music = new Audio(animalArray[random][1]);
btn.addEventListener('click', function(e) {
    music.play();
   console.log(e.target)
   
}, false);

let ans = document.getElementById('ans');
ans1Pic.addEventListener('click', function(e){
    music.pause()
    console.log(e.target.name)
    console.log(animalArray[random][0])

 
    if(e.target.name == animalArray[random][0]) {
        //alert("correct")
        let correct = new Audio("/audios/Quiz-Buzzer02-1.mp3");
        correct.play();
        ans.innerHTML = "せいかい！";
    } else {
        //alert("wrong")
        let wrong = new Audio("/audios/Quiz-Wrong_Buzzer01-1.mp3");
        wrong.play();
        ans.innerHTML = "ざんねん！せいかいは、" + animalArray[random][0] + 'でした';
    }

  
},false)

ans2Pic.addEventListener('click', function(e){
    if(e.target.name == animalArray[random][0]) {
        //alert("correct")
        let correct = new Audio("/audios/Quiz-Buzzer02-1.mp3");
        correct.play();
        ans.innerHTML = "せいかい！";
    } else {
        let wrong = new Audio("/audios/Quiz-Wrong_Buzzer01-1.mp3");
        wrong.play();
        //alert("wrong")
        ans.innerHTML = "ざんねん！ せいかいは、" + animalArray[random][0] + 'でした';
    }
},false)
    
  
next.addEventListener('click', function(){
  doReload()
},false)

var parentsBtn = document.getElementById("parentsBtn")

parentsBtn.addEventListener('click', function(e){
    console.log(e)
   window.location.replace('/');
},false)



