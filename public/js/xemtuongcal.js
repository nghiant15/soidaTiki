
var  resultHi = JSON.parse(sessionStorage._t);

var arraySkinMoleArray = [
  {
      "height": 2.830348,
      "left": 158.43831,
      "top": 67.3142,
      "width": 2.291032
  }
];

var arraySkinMoleArray1 = resultHi.data.facedata.generalResult.data[3].data;

if(arraySkinMoleArray1.length >0)
{
  arraySkinMoleArray = arraySkinMoleArray1[0].drawArr;
}
console.log("arraySkinMoleArray1",arraySkinMoleArray1);


var faceArea = {
  "height": 100.6203,
  "left": 102.71003,
  "top": 62.76482,
  "width": 105.47623
};
faceArea= resultHi.data.rectangle;

var xAnumber = faceArea.left;
var yAnumber = faceArea.top;
var ratex = faceArea.width/5;
var ratey = faceArea.height/2;
var ratexy= 0.2;
var htmlElement = '<div class="center-div"><p class="title-description-content"> Nốt ruồi số 1  </p><p class="content-paragraph">Nội dung: <strong>Người sở hữu nốt ruồi ở vị trí này là người có số khắc cha mẹ, hay xảy ra mâu thuẫn, cuộc sống đều phải tự thân vận động mới có </strong></p></div>';
document.addEventListener("DOMContentLoaded", function(event) {

        arraySkinMoleArray.forEach(itemSkinMole => {
              console.log("itemSkinMole",itemSkinMole);
              console.log("faceArea",faceArea);
              if(checknumber12( itemSkinMole, faceArea) )
              {   
                

                
                 
              }
              else 
              {
                
              }
          
          
            
          });
       
          
});

function checknumber12(skinMole,faceArea )
{

  alert(faceArea.left + ratex*2.2 <= skinMole.left);
  alert(skinMole.left <= faceArea.left + ratex*3 );
  alert(faceArea.left + ratex*3 );
  var isConditionX = (faceArea.left + ratex*2.2 <= skinMole.left
      &&  skinMole.left <= faceArea.left + ratex*3 );
    
      if( isConditionX ==false)
  {
      return false;
  }
  


  var isConditionY = (faceArea.top -ratey   <= skinMole.top
                      && skinMole.top  <= faceArea.top +  ratey/3 );
 

  if( isConditionY ==false)
  {
      return false;
  }

  if(skinMole.top <= faceArea.top -ratey/2 )
  {
      return 1;
  }
  else if (skinMole.top <= faceArea.top )
  {
     return  2;
  }
  else 
  {
     return 2;

  }

  return false;
}

function checknumber34(skinMole,faceArea )
{

  var isConditionY = (faceArea.top -ratey   <= skinMole.top  &&  skinMole.top  <= faceArea.top-ratey/4 );
  
  if( isConditionY ==false)
  {
      return false;
  }
  

  var isConditionX = (faceArea.left +ratex*5/2 <= skinMole.left
  && skinMole.left <= faceArea.left +ratex*5  );

  if( isConditionX ==false)
  {
      return false;
  }
      //2,4
  if(skinMole.left <= faceArea.left +ratex*3+ ratex/2 )
  {
      return 3;
  }
   //6,8,10
  else 
  {
      return 4;


  }
  return false;
}

function checknumber56(skinMole,faceArea )
{
  
var isConditionY = (faceArea.top -ratey   <= skinMole.top 
&& skinMole.top  <= faceArea.top-ratey/6 );
if( isConditionY ==false)
{
return false;
}
var isConditionX = (skinMole.left   <= faceArea.left + ratex + ratex/3 );
if( isConditionX ==true)
{
return 6;
}
else return 5;
  
 
}

function checkeyeLeftUp(skinMole,faceArea )
{
var isConditionX = (skinMole.left   <= faceArea.left +ratex*2.2 );

var isConditionY = (faceArea.top <= skinMole.top 
&& skinMole.top  <= faceArea.top + ratey/2*0.9 );
if( isConditionY ==false)
{
return false;
}

if( isConditionX ==true)
{
return 6;
}
else return 5;
  
 
}



