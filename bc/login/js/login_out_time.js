//一段時間未執行,則系統登出

var oTimerId;

function Timeout(){
  window.open("login/logout.php","_top")
}

function ReCalculate(){
  clearTimeout(oTimerId);
  oTimerId = setTimeout('Timeout()', 10000);
}

document.onmousedown = ReCalculate;
document.onmousemove = ReCalculate;

ReCalculate();
