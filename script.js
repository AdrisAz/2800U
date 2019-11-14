/*var Clementines=0;
var Apples=0;
var Bananas=0;
var Broccoli=0;
var Eggplant=0;
var Lettuce=0;
var Cake=0;
var Cheese=0;
var Chocolate=0;
var Brownies=0;
var Fritter=0;
var Donuts=0;
var Steak=0;
var Chicken=0;
var Pork=0;
var Lobster=0;
var Salmon=0;
var Duck=0;*/
/*sessionStorage.setItem("Clementines","0");
 sessionStorage.setItem("Apples","0");
 sessionStorage.setItem("Bananas","0");
 sessionStorage.setItem("Broccoli","0");
 sessionStorage.setItem("Eggplant","0");
 sessionStorage.setItem("Lettuce","0");
 sessionStorage.setItem("Cake","0");
 sessionStorage.setItem("Cheese","0");
 sessionStorage.setItem("Chocolate","0");
 sessionStorage.setItem("Brownies","0");
 sessionStorage.setItem("Fritter","0");
 sessionStorage.setItem("Donuts","0");
 sessionStorage.setItem("Streak","0");
 sessionStorage.setItem("Chicken","0");
 sessionStorage.setItem("Pork","0");
 sessionStorage.setItem("Lobster","0");
 sessionStorage.setItem("Salmon","0");
 sessionStorage.setItem("Duck","0");*/






//Testing Functions
/*function ClementinesINC(){
  var test =sessionStorage.getItem("Clementines");
  alter(test);
var num=Clementines;
num++
var obj =document.getElementById('ClementinesA');
obj.style.display='block';
obj.innerHTML =num +" Are in Your Cart";


return num;
}*/
function ApplesINC(){
  var num= sessionStorage.getItem("Apples");
  num++;

  return num;
}
function BananasINC(){
  var num= sessionStorage.getItem("Bananas");
  num++;

  return num;
}
function BroccoliINC(){
  var num= sessionStorage.getItem("Broccoli");
  num++;

  return num;
}
function EggplantINC(){
  var num= sessionStorage.getItem("Eggplant");
  num++;

  return num;
}
function LettuceINC(){
  var num= sessionStorage.getItem("Lettuce");
  num++;

  return num;
}
function CakeINC(){
  var num= sessionStorage.getItem("Cake");
  num++;

  return num;
}
function CheeseINC(){
  var num= sessionStorage.getItem("Cheese");
  num++;

  return num;
}
function ChocolateINC(){
  var num= sessionStorage.getItem("Chocolate");
  num++;

  return num;
}
function BrowniesINC(){
  var num= sessionStorage.getItem("Brownies");
  num++;

  return num;
}
function FritterINC(){
  var num= sessionStorage.getItem("Fritter");
  num++;

  return num;
}
function DonutsINC(){
  var num= sessionStorage.getItem("Donuts");
  num++;

  return num;
}
function SteakINC(){
  var num= sessionStorage.getItem("Steak");
  num++;

  return num;
}
function ChickenINC(){
  var num= sessionStorage.getItem("Chicken");
  num++;

  return num;
}
function PorkINC(){
  var num= sessionStorage.getItem("Pork");
  num++;

  return num;
}
function LobsterINC(){
  var num= sessionStorage.getItem("Lobster");
  num++;

  return num;
}
function DuckINC(){
  var num= sessionStorage.getItem("Duck");
  num++;

  return num;
}
function SalmonINC(){
  var num= sessionStorage.getItem("Salmon");
  num++;

  return num;
}
function ClementinesPrice(){
var num= ClementinesINC();
  var clementinesP=num*3.97;
  return clementinesP;
}
function ApplesPrice(){
  var num= ApplesINC();
  var applesP=num*4.47;
  return applesP;
}
function BananasPrice(){
  var num= BananasINC();
  var bananasP=num*1.50;
  return bananasP;
}
function BroccoliPrice(){
  var num= BroccoliINC();
  var broccoliP=num*12.94;
  return broccoliP;
}
function EggplantPrice(){
  var num= EggplantINC();
   var eggplantP=num*3.37;
  return eggplantP;
}
function LettucePrice(){
  var num= LettuceINC();
   var lettuceP=num*2.47;
  return lettuceP;
}
function CakePrice(){
  var num= CakeINC();
  var cakeP=num*6;
  return cakeP;
}
function CheesePrice(){
  var num= CheeseINC();
  var cheesesP=num*14.97;
  return cheeseP;
}
function ChocolatePrice(){
  var num= ChocolateINC();
  var chocolatesP=num*6.18;
  return chocolateP;
}
function BrowniesPrice(){
  var num= BrowinesINC();
  var browniesP=num*6;
  return browniesP;
}
function FritterPrice(){
  var num= FritterINC();
  var fritterP=num*1.16;
  return fritterP;
}
function DonutsPrice(){
  var num= DunutsINC();
  var donutsP=num*2.27;
  return donutsP;
}
function SteakPrice(){
  var num= SteakINC();
  var steakP=num*12.48;
  return steakP;
}
function ChickenPrice(){
  var num= ChickenINC();
  var chickenP=num*7;
  return chickenP;
}
function PorkPrice(){
  var num= PorkINC();
  var porkP=num*9.86;
  return porkP;
}
function SalmonPrice(){
  var num= SalmonINC();
  var salmonP=num*21.64;
  return salmonP;
}
function DuckPrice(){
  var num= DuckINC();
  var duckP=num*19.9;
  return duckP;
}
function LobsterPrice(){
  var num= LobsterINC();
  var lobsterP=num*14.67;
  return lobsterP;
}
function ClementinesDisplay(){
    var num= ClementinesINC();
    var  item= ClementinesPrice();

    var obj =document.getElementById('ClementinesA');
    obj.style.display='block';
	obj.innerHTML =num +" Are in Your Cart";

  var obj2 = document.getElementById('ClementinesPr');
  obj2.style.display='block';
obj2.innerHTML ="$"+item.toFixed(2);

}
