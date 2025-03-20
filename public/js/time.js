var currtime = document.getElementById("currtime");
var currdate = document.getElementById("currdate");

function zeropadder(n){
  return (parseInt(n,10) < 10 ? '0' : '') +n;
}

function updateTime() {
  var timeNow = new Date(),
      hh = timeNow.getHours(),
      mm = timeNow.getMinutes(),
      ss = timeNow.getSeconds();
  
  
  currtime.innerHTML = hh + "<span>:</span>" + zeropadder(mm) + " " ;

  setTimeout(updateTime, 1000);

}


updateTime();
dater();
