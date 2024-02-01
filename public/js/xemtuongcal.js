
var  resultHi = JSON.parse(sessionStorage._t);

var arraySkinMoleArray = [
  {
      "height": 2.830348,
      "left":175,
      "top": 86,
      "width": 2.291032
  }
];

var arraySkinMoleArray1 = resultHi.data.facedata.generalResult.data[3].data;

// if(arraySkinMoleArray1.length >0)
// {
//   arraySkinMoleArray = arraySkinMoleArray1[0].drawArr;
// }
// console.log("arraySkinMoleArray1",arraySkinMoleArray1);


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
     var htmlElement2 ='';
        arraySkinMoleArray.forEach(itemSkinMole => {
            
             var outPutRule = checknumber12( itemSkinMole, faceArea);
             
             if(outPutRule < 0)
             {
                outPutRule = checknumber34(itemSkinMole, faceArea);

                if(outPutRule <0 )
                {
                    outPutRule = checknumber56(itemSkinMole, faceArea);
                    if(outPutRule <0)
                    {
                        outPutRule = checknumber78(itemSkinMole, faceArea);
                            if(outPutRule <0)
                        {
                            outPutRule = checknumber78dowm(itemSkinMole, faceArea);
                            if(outPutRule <0)
                    {
                        outPutRule = checknumber910(itemSkinMole, faceArea);
                        if(outPutRule<0)
                        {
                          
                            outPutRule = checknumber1112dowm(itemSkinMole, faceArea);
                        }
                    }
                        }
                    }
                }
            

             }
             var titlepa = '';
             var contentPa ='';
    
             
             if(outPutRule == 1)
             {
                titlepa =  'Nốt ruồi số 1';
                contentPa = 'Người sở hữu nốt ruồi ở vị trí này là người có số khắc cha mẹ, hay xảy ra mâu thuẫn, cuộc sống đều phải tự thân vận động mới có </strong></p></div>';
             }
            else if(outPutRule == 2)
             {
                titlepa =  'Nốt ruồi số 2';
                contentPa = 'Dễ gặt hái được nhiều thành công, nhưng không được lâu dài</br> Dễ vướng vào thị phi ';
             }
             else if(outPutRule == 3)
             {
                titlepa =  'Nốt ruồi số 3';
                contentPa = 'Nốt ruồi ở trên mặt tại vị trí này là người có số khắc cha mẹ từ nhỏ, không sống chung được với cha mẹ</br>Là người thích sống bình dự, luôn bằng lòng với cuộc sống ';
             }
             else if(outPutRule == 4)
             {
                titlepa =  'Nốt ruồi số 4';
                contentPa = 'Được hưởng cuộc sống hạnh phúc, đầy đủ<br> Có số giàu sang <br>Gặp được quý nhân giúp đỡ khi gặp khó khăn';
             }
             else if(outPutRule == 5)
             {
                titlepa =  'Nốt ruồi số 5';
                contentPa = 'Là người có tấm lòng từ bi, nhân hậu</br>Người sở hữu nốt ruồi trên mặt tại vị trí này công việc làm ăn luôn gặp nhiều thuận lợi, được quý nhân giúp đỡ</br>Là người có địa vị trọng xã hội, được mọi người kính trọng';
             }
             else if(outPutRule == 6)
             {
                titlepa =  'Nốt ruồi số 6';
                contentPa = 'Đây là nốt ruồi không tốt, hay gặp phải thị phi, tai tiếng';
             }

             else if(outPutRule == 7)
             {
                titlepa =  'Nốt ruồi số 7';
                contentPa = 'Thường xuyên phải đi làm xa gia đình</br> Sức khỏe không được tốt </br> Gia đình hay xảy ra nhiều mâu thuẫn, cãi vã</br> Nên cẩn trọng trong việc làm ăn, kinh doanh';
             }
             else if(outPutRule == 71)
             {
                titlepa =  'Nốt ruồi số 7';
                contentPa = 'Giải mã nốt ruồi ở mặt xét thấy đây là người đa tài, am hiểu nhiều lĩnh vực khác nhau</br>Nhưng, gặp nhiều khó khăn trong công việc, nếu kiên trì sẽ vượt qua tất cả';
             }
             else if(outPutRule == 81)
             {
                titlepa =  'Nốt ruồi số 8';
                contentPa = 'Công danh, tiền tài đều rất tốt</br>Là người nhanh nhạy, thông minh</br>Chú ý nhiều hơn đến sức khỏe, tránh các bệnh về đường hô hấp';
             }
             else if(outPutRule == 9)
             {
                titlepa =  'Nốt ruồi số 9';
                contentPa = 'Là người sống bôn ba, tha hương</br> Sẽ có cuộc sống đầy đủ, sung túc</br>Dù Gặp nhiều khó khăn trong cuộc sống, nếu quyết tâm vượt qua, sẽ có được kết quả tốt';
             }

             else if(outPutRule == 10)
             {
                titlepa =  'Nốt ruồi số 10';
                contentPa = 'Đây là vị trí nốt ruồi trên khuôn mặt phú quý, có được nhiều thành tựu nhờ sự nỗ lực của bản thân</br>Xem nốt ruồi ở trên mặt cho biết đây là người am hiểu, hiểu biết sâu rộng';
             }

             else if(outPutRule == 11)
             {
                titlepa =  'Nốt ruồi số 11';
                contentPa = 'Dễ gặp được người tài giỏi, có quyền chức cao</br>Gặp nhiều bất lợi trong cuộc sống</br>Coi nốt ruồi trên mặt cho hay đây là vị trí nốt ruồi tốt, mang lại nhiều tài lộc';
             }

             else if(outPutRule == 12)
             {
                titlepa =  'Nốt ruồi số 12';
                contentPa = 'Làm ăn kinh doanh nên cẩn trọng, tránh thua lỗ</br>có sức đề kháng kém';
             }

             else if(outPutRule == 13)
             {
                titlepa =  'Nốt ruồi số 13';
                contentPa = 'Làm ăn xa sẽ rất dễ thành công<br>Nhưng, Vợ chồng hay xảy ra mâu thuẫn ';
             }

             else if(outPutRule == 131)
             {
                titlepa =  'Nốt ruồi số 13';
                contentPa = 'Người có nốt ruồi ở vị trí này là người biết lắng nghe, ngoan ngoãn, hiền lành</br>Nhưng Chuyện tình duyên hay lận đận';
             }
             var template = '<div class="center-div"> \
             <p class="title-description-content">' +titlepa  +' </p>\
             <p class="content-paragraph">Nội dung: </br> <strong>'+contentPa+' </strong></p></div>';

             htmlElement2 += template;
          
            
          });
          
          setTimeout(() => {
            document.getElementById("xemtuongResult").innerHTML = htmlElement2;
          }, 500);
        //   $("#xemtuongResult").html(htmlElement2);
       
          
});

function checknumber12(skinMole,faceArea )
{
    console.log("1",skinMole);
    console.log("2",faceArea);


  var isConditionX = (faceArea.left + ratex*2.2 <= skinMole.left
      &&  skinMole.left <= faceArea.left + ratex*3 );
    
      if( isConditionX ==false)
  {
      return -1;
  }
  


  var isConditionY = (faceArea.top -ratey   <= skinMole.top
                      && skinMole.top  <= faceArea.top +  ratey/3 );
 
            
  if( isConditionY ==false)
  {
      return -1;
  }

  if(skinMole.top <= faceArea.top -ratey/2.2 )
  {
      return 1;
  }
  else if(skinMole.top <= faceArea.top )
  {
  
    
     return  2;
  }
  else 
  {
   
     return 2;

  }


}

function checknumber34(skinMole,faceArea )
{

  var isConditionY = (faceArea.top -ratey   <= skinMole.top  &&  skinMole.top  <= faceArea.top-ratey/4 );
  
  if( isConditionY ==false)
  {
    return -1;
  }
  

  var isConditionX = (faceArea.left +ratex*5/2 <= skinMole.left
  && skinMole.left <= faceArea.left +ratex*5  );

  if( isConditionX ==false)
  {
      return -1;
  }
      //2,4
  if(skinMole.left <= faceArea.left +ratex*3.65 )
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
return -1;
}
var isConditionX = (skinMole.left   <= faceArea.left + ratex + ratex/3 );

if( isConditionX ==true)
{
    return 6 ;
}

else return 5;
  
 
}
//check
function checknumber78(skinMole,faceArea )
{
    var isConditionY = (faceArea.top <= skinMole.top 
        && skinMole.top  <= faceArea.top + ratey/2*0.9 );
    

        if( isConditionY ==false)
    {
        return -1;
    }
    
  
  if(skinMole.left <= faceArea.left +ratex*1.1 )
  {
    return 8;
  }
  else if( skinMole.left <= faceArea.left +ratex*2.1   )
  {
    return 7;
  }
   return -1;

 
}

//check
function checknumber78dowm(skinMole,faceArea )
{
    var isConditionY = (faceArea.top + ratey/2*0.9  < skinMole.top 
     && skinMole.top  <=  faceArea.top + ratey/2*0.9 + ratey/3);
    if( isConditionY ==false)
    {
        return -1;
    }
    alert("33"+isConditionY);
    
  
  if(skinMole.left <= faceArea.left +ratex*1.3 )
  {
    return 81;
  }
  else if( skinMole.left <= faceArea.left +ratex*2.1   )
  {
    return 71;
  }
   return -1;

 
}



function checknumber910(skinMole,faceArea )
{
    var isConditionY = (faceArea.top <= skinMole.top 
        && skinMole.top  <= faceArea.top + ratey/3 );
    

        if( isConditionY ==false)
    {
        return -1;
    }
    
    
  
  if(skinMole.left >= faceArea.left +ratex*3.7 )
  {
    return 10;
  }
  else if( skinMole.left >= faceArea.left +ratex*3 )
  {
    return 9;
  }
   return -1;

 
}

function checknumber1112dowm(skinMole,faceArea )
{
    
    
    var isConditionY = (faceArea.top + ratey/3  < skinMole.top 
     && skinMole.top  <=  faceArea.top + ratey/2*0.9 + ratey/3);
    alert(isConditionY);
     if( isConditionY ==false)
    {
        return -1;
    }
   
    
  
    if(skinMole.left >= faceArea.left +ratex*3.7 )
    {
      return 12;
    }
    else if( skinMole.left >= faceArea.left +ratex*3 )
    {
      return 11;
    }
     return -1;
 

 
}


function checknumber1314(skinMole,faceArea )
{
    var isConditionx = (faceArea.left + ratex*2.2   < skinMole.left
        && skinMole.left <= faceArea.left +ratex*3);
    if(isConditionx ==false)
    {
        return -1;
    }
    
    
    if(faceArea.top < skinMole.top  &&  skinMole.top <= faceArea.top+ yAnumber/2+ yAnumber/4 )
    {
        return 13;
    }
    else if( skinMole.top < faceArea +yAnumber -yAnumber/4)
    {  
        return 131;
    }
     return -1;
 

 
}




