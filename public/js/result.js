

function reDrawInfomation() {
 
  var objectInformation = objectReponse;

  var faceData = objectReponse.data.facedata;
  var imageInfo = faceData.image_info;
  $("#imageResult").attr("src",imageInfo.url);
 
 var generalResult  = faceData.generalResult;
 var specialResult = faceData.specialResult;


 drawContentTongQuan(faceData.generalResult);
 drawContentKetLuanTungPhan(faceData.specialResult);

 drawContentTuVanTongQuat(faceData.generalConclusion);

 // drawContentketLuanChiTiet(faceData.specialConclusion);
 return;
 // drawContent(generalResult);
 // drawContent(specialResult);
 // drawContentDetail(faceData.specialConclusion);
 // drawContentDetail1(faceData.generalConclusion);

}

function drawContentTuVanTongQuat(generalResult )
{

return;
var index =0;
generalResult.data.forEach((ketquatongquanItem) => {

index ++;

if( index%2 == 0)
{
var html= '<div class="description-tuvan"> \
\
<div class="content-tuvan">\
<h6>'+ketquatongquanItem.title+'</h6>\
\
 <ul>';

 html  +=   '<li class="content-paragraph">'+ketquatongquanItem.valueVI+'</li>';

   
html+= '</ul>\
</div>\
<div class="image-demo"> \
   <img src ="/images/86336.png"></div></div>';
$("#idtuvantongquan").append(html);

}
else 
{
var html= ' <div class="description-tuvan column-second"> \
\
<div class="image-demo"> \
    <img src ="/images/86336.png"> \
</div>\
<div class="content-tuvan">\
<h6>'+ketquatongquanItem.title+'</h6>\
\
<ul>';


 
html  +=   '<li class="content-paragraph">'+ketquatongquanItem.valueVI+'</li>';

    
html += '</ul>\
</div>\
\
</div>';
$("#idtuvantongquan").append(html);
}

});


}

function drawContentTongQuan(generalResult )
{


var index =0;
generalResult.data.forEach((ketquatongquanItem) => {

index ++;
if(index >2)
{
index =1;
}
var html= '<div class="record-content">\
<div class="record-content-tab">\
  <div class="image">\
      <img src="/images/face'+index+'.png">\
\
  </div>\
  <div class="description">\
\
      <div class="description-content">\
          <div class="center-div">';
          
          
          html += '<p class="title-description-content"> '+ ketquatongquanItem.title.vi + ' </p>';
         
          var dataList = ketquatongquanItem.data;
          dataList.forEach(function (item, index) {
             
           
              html  +=   '<p class="content-paragraph">'+item.valueVI+'</p>';
           });
         
         
         html+= '</div>\
      </div>\
  </div>\
</div>\
</div>';
$("#idGeneralResult").append(html);
});


}

function isNumeric(n) {
return !isNaN(parseFloat(n)) && isFinite(n);
}


function drawContentKetLuanTungPhan(ketLuanTungPhan )
{

let dataFace = objectReponse.data.faceAttitude;


let indexDraw =0;
ketLuanTungPhan.data.forEach((ketLuanTungPhanItem) => {
indexDraw ++;
let dataDrawFace  = "https://applamdep.com/images/image1.png";
https://applamdep.com/images/image1.png
if(dataFace)
{

switch(indexDraw) {
 case 1:

   dataDrawFace = dataFace.faceLeft;
   // code block
   break;
 case 2:
   dataDrawFace = dataFace.faceRight;
   // code block
   break;

   case 3:
     dataDrawFace = dataFace.eyeRight;
     // code block
     break;
     case 4:
       dataDrawFace = dataFace.faceRightOriginal;
       // code block
       break;

       case 5:
         dataDrawFace = dataFace.faceLeftOriginal;
         // code block
         break;

   default:
     dataDrawFace = dataFace.faceLeftOriginal;
        break;
   // code block
}
}
else 
{

}


var html= ' <div class="result-item"> \
<div class="avatar-image">\
\
<img src="'+dataDrawFace+'">\
\
</div>\
\
<div class="content-description">\
<span class="title-bold"> \
   ' + ketLuanTungPhanItem.title.vi+ '\
</span>\
\
<ul>';

var dataList = ketLuanTungPhanItem.data;
dataList.forEach(function (item, index) {

 const arr = item.valueVI.split(':');
 var value = arr[1];

;        if(isNumeric(value))
 {
    value =  Math.round(value * 100) / 100

   
 }
 if((value+'').endsWith("%"))
 {
     value =  value.replace('%','').trim();
    

     if(isNumeric(value))
     {
        value =  Math.round(value * 100) / 100;
        value = '' +value + '%';

       
     }
   

 }
  html  +=   '<li class="content-paragraph">'+"<span>" + arr[0]+":"  +"<strong class='boldText'>"+value+" </strong>" + "</span>"+'</li>';
});

html+=          '</ul></div></div> ';
$("#danhsachketquatungphan").append(html);
});


}

function drawContent(input) {

var htmlTemplage = '<fieldset class="fldset-class">\
<legend class="legend-class">'+input.title.vi+'</legend>';
var dataDraw = input.data;
dataDraw.forEach(element => {
 htmlTemplage +='<ul class="recordRecived">';
 var title = element.title.vi;
 var description = element.descript.vi;

 var dataChilds = element.data;
 htmlTemplage+= ' <li>  '+ title + '  </li>';
 dataChilds.forEach(itemChild => {
     var text = itemChild.valueVI;
     htmlTemplage+= ' <li>  '+ text + '  </li>';
     
 });
 htmlTemplage +='</ul>';
 
});
htmlTemplage+= ' </fieldset>';

$("#contentResult").append(htmlTemplage);
}


function drawContentDetail(input) {

var htmlTemplage = '<fieldset class="fldset-class">\
<legend class="legend-class">'+input.title.vi+'</legend>';
var dataDraw = input.data;
dataDraw.forEach(element => {

 element.forEach( eleteDetail => {
     htmlTemplage +='<ul class="recordRecived">';

     var title = eleteDetail.title.vi;
     // var description = eleteDetail.descript.vi;

     var dataChilds = eleteDetail.data;
     htmlTemplage+= ' <li>  '+ title + '  </li>';
     // dataChilds.forEach(itemChild => {
     //     var text = itemChild.valueVI;
     //     htmlTemplage+= ' <li>  '+ text + '  </li>';
         
     // });
     var text = dataChilds.vi;
     htmlTemplage+= ' <li>  '+ text + '  </li>';
     htmlTemplage +='</ul>';
 });

});
htmlTemplage+= ' </fieldset>';

$("#contentResult").append(htmlTemplage);
}

function drawContentDetail1(input) {

var htmlTemplage = '<fieldset class="fldset-class">\
<legend class="legend-class">'+input.title.vi+'</legend>';
var dataDraw = input.data;
htmlTemplage +='<ul class="recordRecived">';

dataDraw.forEach(element => {
 
    
     var title = element.title;
     // var description = eleteDetail.descript.vi;

     var dataChilds = element.valueVI;
     if(title)
     {
         htmlTemplage+= ' <li class ="bold-text">  '+ title + '  </li>';
     }
   
     // dataChilds.forEach(itemChild => {
     //     var text = itemChild.valueVI;
     //     htmlTemplage+= ' <li>  '+ text + '  </li>';
         
     // });
     var text = dataChilds;
     htmlTemplage+= ' <li>  '+ text + '  </li>';
  
 
});
htmlTemplage +='</ul>'; 
htmlTemplage+= ' </fieldset>';

$("#contentResult").append(htmlTemplage);
}

function drawRecomendProduct ( ) {

var dataUser =  sessionStorage.getItem("dataUser");
var objectreponse = JSON.parse(dataUser);


$.ajax({
 url: api.baser_url + ""+ api.a,
 type: "post",
 headers: {
     Authorization: 'Bearer '+objectreponse.data.token
 },
 data: {
     "name": $("#txtname").val(),
     "email": "",
     "phone": $("#phoneNumber").val(),
     "Address": $("#address").val(),
     "Company_Id": "6134e13410bfea17bff4000d",
     "username": globalUser.username,
 } ,
  success: function (response) {
        if(response.is_success)
     {
     
         Swal.fire({
             position: 'top-center',
             icon: 'success',
             title: 'Cập nhật thành công',
             showConfirmButton: false,
             timer: 1000
         })

     }
     else
     {
         Swal.fire({
             position: 'top-center',
             icon: 'error',
             title: 'Cập nhật thất bại',
             showConfirmButton: false,
             timer: 1000
         })

     }
 },
 error: function(jqXHR, textStatus, errorThrown) {
    
 }
});

}


function drawProduction(dataRequest) {

var company =null  ;

if (sessionStorage.getItem("dataCompany") === null) {
 
   company = companyIdGlobal;
}
else 
{
   company = JSON.parse(sessionStorage.getItem("dataCompany"));
   company = company.company_data;
 


}


var bodyRequest = {

 "company_id": company,
 "result": dataRequest

};
$.ajax({
 type: "POST",
 url: "https://api-soida.applamdep.com/itemSdk/get_product_result",
 data: JSON.stringify(bodyRequest),
 contentType: "application/json",
 dataType: "json",
 complete: function(data) {
  
      drawSuggessProduct(data.responseJSON);
 },
});
}

function drawConcludeOverview(dataRequest) {

var company =null  ;





if (sessionStorage.getItem("dataCompany") === null) {

company = companyIdGlobal;
}
else 
{
company = JSON.parse(sessionStorage.getItem("dataCompany"));
company = company.company_data;
}

var bodyRequest = {

"company_id": company,
"result": dataRequest

};
$.ajax({
type: "POST",
url: "https://api-soida.applamdep.com/api/paramenterRecomed/getAllCocludeOverView",
data: JSON.stringify(bodyRequest),
contentType: "application/json",
dataType: "json",
success:function(data)
{ 


 drawConcludeOverviewItem(data.data.K5);
  drawConcludeOverviewItem(data.data.K6);
  drawConcludeOverviewItem(data.data.K7);
  drawConcludeOverviewItem(data.data.K8);
 drawConcludeOverviewItem(data.data.K9);
}
});
}

var indexstt =1;

function drawConcludeOverviewItem (item) 
{

if(item)
{
for (var i = 0; i < item.length; i++) {

 
   var itemIndex = item[i];
   var tilte = itemIndex.Title;
   var des = itemIndex.Content;

   var level = itemIndex.Level;

   var iconImage = itemIndex.Icon;
   var htmltemplate ='\
   <div class="description-tuvan">   <div class="content-tuvan">      <h6>'+''+indexstt +'. '+ tilte +'</h6>        <ul><li class="content-paragraph">'+des+'</li></ul>   </div>   <div class="image-demo">           <img src="'+iconImage+'"></div></div>\
   ';
   if(indexstt %2 !=0)
   {
     htmltemplate =  '<div class="description-tuvan column-second">  <div class="image-demo">            <img src="'+iconImage+'">     </div>    <div class="content-tuvan">       <h6>'+''+indexstt +'. '+tilte+'</h6>       <ul><li class="content-paragraph">'+ des+'</li></ul>    </div>    </div>';
   }
   indexstt ++;

   $("#idtuvantongquan").append(htmltemplate);

}
}
}

function drawConcludeDetail(dataRequest) {

  for (var i = 0; i < dataRequest.length; i++)
  {
      var item = dataRequest[i];
      var groupK = item['level'];
      if(groupK < "K5") 
         continue;
      var valueGroupK = item['sdktype'];
      drawConcludev2( groupK, valueGroupK);
  }

return;
if (sessionStorage.getItem("dataCompany") === null) {

company = companyIdGlobal;
}
else 
{
company = JSON.parse(sessionStorage.getItem("dataCompany"));
company = company.company_data;
}

var bodyRequest = {

"company_id": company,
"result": dataRequest

};
$.ajax({
type: "POST",
url: "https://api-soida.applamdep.com/api/paramenterRecomed/getAllCocludeDetail",
data: JSON.stringify(bodyRequest),
contentType: "application/json",
dataType: "json",
success:function(data)
{
 drawConclude(data.data.K5);
 drawConclude(data.data.K6);
 drawConclude(data.data.K7);
 drawConclude(data.data.K8);
 drawConclude(data.data.K9);
}
});
}

function drawConcludev2 ( groupk, valuek) 
{
  var tilte = "";
  var des = "";
  
  var text = "Mức độ nhẹ";

  if(valuek >3)
    valuek = 3;
    valuek=  valuek+'';


  
    switch(groupk) {
      case "K5":
        tilte = "Lão hoá da";

        switch (valuek) {
          case  "1":
            des = 'Làn da bạn đang ở mức độ lão hoá nhẹ. Ở một số vị trí, da của bạn bắt đầu khô hơn, không được căng đầy, có dấu hiệu xuất hiện các rãnh nhăn.';
            break;
          case "2":
            des = 'Làn da bạn đang ở mức độ lão hoá nhẹ. Ở một số vị trí, da của bạn bắt đầu khô hơn, không được căng đầy, có dấu hiệu xuất hiện các rãnh nhăn.';
            break;
          case "3":
            des = 'Làn da bạn đang ở mức độ lão hoá nhiều và cần được chăm sóc ngay. Các rãnh nhăn xuất hiện ở nhiều vị trí trên khuôn mặt. Da khô và mất tính đàn hồi ở một số điểm. Da không đều màu.';
            break;
          default:
            
            break;
        }
        break;

      case "K6":
        tilte = "Mụn và mụn viêm đỏ";
        switch (valuek) {
          case  "1":
            des = 'Mụn ở mức độ nhẹ. Số lượng mụn không nhiều, lượng dầu tiết trên da tương đối.';
            break;
          case "2":
            des = 'Mụn ở mức độ tương đối nhiều,làn da bạn cần được chăm sóc do Da bóng nhờn do lượng bã dầu tiết ra nhiều. Có thể lây sang những vùng da khác.';
            break;
          case "3":
            des = 'Mụn ở mức độ nặng. Da bạn đang tiết nhiều bã nhờn. Vi khuẩn Acne đang xuất hiện và tấn công các vùng da lân cận. Cần được thăm khám và điều trị đúng hoạt chất.';
            break;
          default:
            
            break;
        }
        break;
      case "K7":
        tilte ="Quầng thâm mắt";
        switch (valuek) {
          case  "1":
            des = 'Mắt bạn đang xuất hiện quầng thâm với mức độ nhẹ. Quanh vùng mắt có vẻ thiếu nước, và tối màu.';
            break;
          case "2":
            des = 'Vùng da quanh mắt tối màu đậm hơn, da không được căng, nhìn mất sức sống.';
            break;
          case "3":
            des = 'Bạn đang gặp vấn đề nặng về quầng thâm mắt. Vùng da quanh mắt tối màu, Xuất hiện rãnh nhăn. Cần được chăm sóc và điều trị để tươi trẻ hơn.';
            break;
          default:
             break;
        }
        break;

      case "K8":
        tilte ="Lỗ chân lông";

        switch (valuek) {
          case  "1":
            des = 'Lỗ chân lông của bạn ở mức độ không đáng lo ngại, Chỉ một số vị trí có lỗ chân lông hơi to, tương đối.';
            break;
          case "2":
            des = 'Lỗ chân lông ở mức độ trung bình, nhiều điểm trên khuôn mặt có lỗ chân lông, nhìn làn da chưa được mịn màng.';
            break;
          case "3":
            des = 'Lỗ chân lông ở mức độ báo động, da có nhiều lỗ chân lông to, nhìn da không được mịn màng.';
            break;
          default:
            
            break;
        }
      break;

      case "K9":
        tilte ="Đốm thâm nám";
        switch (valuek) {
          case  "1":
            des = 'Mức độ thâm/nám của bạn nhẹ, da chưa đồng đều màu. Có xuất hiện các điểm đậm màu trên bề mặt da.';
            break;
          case "2":
            des = 'Mức đô thâm/nám của bạn trung bình, đã xuất hiện nhiều điểm thâm/nám trên bề mặt và có khả năng dưới da đang xuất hiện nhiền melanin.';
            break;
          case "3":
            des = 'Mức độ thâm/nám của bạn khá nặng. Có rất nhiều điểm đậm màu trên làn da bạn và có dấu hiệu lan rộng hơn. Nhiều hơn melanin đang xuất hiện.';
            break;
      
          default:
            
            break;
        }
        break;
      
      default:
        // code block
    }


   if(valuek ==2)
   {
       text = "Mức độ trung bình";
     
   }

   if(valuek >=3)
   {
       text = "Mức độ nặng";
     
   }


   if(valuek>3)
      valuek =3;

     var valueLevel = valuek*1 + 0.3;

     if(valueLevel >3)
      valueLevel = 3;
   var percentage =  Math.round((valueLevel /3) * 100);
   
   
   var htmlTemp = ' <div class="ConcludeItem"><p class ="paragraph-text-pa"> <span class ="bold-text-pa">'+tilte+': </span>\
<span> '+text+' (Mức '+valuek +'/3) </span>\
   </p > \
   <div class="progress-bar-container">\
       <div class="progress-bar-indicator" style ="width: '+percentage+'%;" >\
       \
       </div> \
\
       <span class="tooltip-target">\
               <span class="tooltip-content" style =" left: calc('+percentage +'% - 35px);"><p class ="title-score"> Điểm của bạn</p><p> <span class ="score">'+valueLevel+'</span>/3</p> </span>\
       </span>\
   </div>\
   <div id="textbox">\
   <p class="alignleft">0</p>\
   <p class="aligncenter">Điểm trung bình</p>\
   <p class="alignright">3</p>\
   </div>\
   <div style="clear: both;"></div>\
    <div class="concludeDetalText" style="">\
    <span class="" style=" font-weight: bold; text-decoration: underline; ">Kết luận:</span>\
               <span class="description-text-1">\
               '+ des +' </span>\
                </div>\
                </div>';
$("#ConcludeItemArea").append(htmlTemp);

}



function drawConclude (item) 
{

if(item)
{
for (var i = 0; i < item.length; i++) {
var itemIndex = item[i];
   var tilte = itemIndex.Title;
   var des = itemIndex.Content;
   var text = "Mức độ nhẹ";
  

   var level = itemIndex.Level;

   if(level ==2)
   {
       text = "Mức độ trung bình";
     
   }

   if(level ==3)
   {
       text = "Mức độ nặng";
     
   }


   if(level>3)
     level =3;

     var valueLevel = level*1 + 0.3;

     if(valueLevel >3)
     valueLevel = 3;
   var percentage =  Math.round((valueLevel /3) * 100);
   
   
   var htmlTemp = ' <div class="ConcludeItem"><p class ="paragraph-text-pa"> <span class ="bold-text-pa">'+tilte+': </span>\
<span> '+text+' (Mức '+level +'/3) </span>\
   </p > \
   <div class="progress-bar-container">\
       <div class="progress-bar-indicator" style ="width: '+percentage+'%;" >\
       \
       </div> \
\
       <span class="tooltip-target">\
               <span class="tooltip-content" style =" left: calc('+percentage +'% - 35px);"><p class ="title-score"> Điểm của bạn</p><p> <span class ="score">'+valueLevel+'</span>/3</p> </span>\
       </span>\
   </div>\
   <div id="textbox">\
   <p class="alignleft">0</p>\
   <p class="aligncenter">Điểm trung bình</p>\
   <p class="alignright">3</p>\
   </div>\
   <div style="clear: both;"></div>\
    <div class="concludeDetalText" style="">\
    <span class="" style=" font-weight: bold; text-decoration: underline; ">Kết luận:</span>\
               <span class="description-text-1">\
               '+ des +' </span>\
                </div>\
                </div>';
$("#ConcludeItemArea").append(htmlTemp);

}
}
}


function drawSuggessProduct(listProduct) 
{


var dataProducts = listProduct.data;


dataProducts.forEach(groupProduct => {
 var dataProducts = groupProduct[Object.keys(groupProduct)[0]];
var listDataProducts = dataProducts.list_product;

 var htmlItem = '\
 <div class="title-category"> \
\
<span>'+dataProducts.title+' </span>\
\
</div>\
<div class="product-list">';

listDataProducts.forEach(element => {
 
var pathImage = 'https://api-soida.applamdep.com/public/image_plugin/' +'' +element.image_link +'';

var xhr = new XMLHttpRequest();
xhr.open('HEAD', pathImage, false);
xhr.send();

if (xhr.status == "404") {
htmlItem+=  '<div class="product-item1">\
\
 <div class="image-avatar"> \
  <a href = "'+element.linkdetail+'">  <img src="/imageNo.jpg"></a>\
 </div>\
 <div class="content-product">\
     <div class="brand"><a href="'+element.linkdetail+'">'+element.title+'</a> </div>\
 </div>\
\
</div>'; 
        

} else {
htmlItem+=  '<div class="product-item1">\
\
 <div class="image-avatar"> \
 <a href = "'+element.linkdetail+'"> <img src="'+pathImage+'"></a>\
 </div>\
 <div class="content-product">\
     <div class="brand"><a href="'+element.linkdetail+'">'+element.title+'</a> </div>\
 </div>\
\
</div>'; 
        
}


  
 
});

htmlItem+= '</div>';
$("#list-product").append(htmlItem);            
    
 
 });

 
// });
//  $("#formProductSuggestion").append(htmlTemplate);


$('.product-list').slick({
 infinite: true,
 slidesToShow:3,
 initialSlide:0,
 draggable:true,
 mobileFirst:true,
 speed:500,
 
 arrows: false,
 slidesToScroll:  1,
 responsive: [
     {
         breakpoint: 768,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 1
         }
       }
     ,
      {
       breakpoint: 600,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     }
   
   ]
});


}


function drawSuggessProduct1(listProduct) 
{


var dataProducts = listProduct.data;

var htmlTemplate ="";
dataProducts.forEach(groupProduct => {
 var dataProducts = groupProduct[Object.keys(groupProduct)[0]];
 htmlTemplate+= '<div class="row">\
 <div class="titleProductRecomend">'+dataProducts.title+' </div>\
</div>';
htmlTemplate+='  <div class="dataProduct">';

    
      dataProducts.list_product.forEach(itemProduct =>  {

         htmlTemplate += '<div class="product-item">\
                         <div> \
                         <img\
                         src="https://api-soida.applamdep.com/public/image_plugin/toner-Dashu-0x0.jpg"\
                         alt="">\
                         </div>\
                         <div class="product-title">\
                         <div> Nước Hoa Hồng Cho Nam Dashu Tăng Độ Ẩm Cho Da, Dưỡng Trắng Da 153ml\
                         </div>\
                         </div>\
                         </div>';
                       

             
       

      


       



     });


htmlTemplate+='  </div>';
htmlTemplate+='  </div>';

 
});
$("#formProductSuggestion").append(htmlTemplate);

$('.dataProduct').slick({
 infinite: true,
 slidesToShow:3,
 initialSlide:0,
 draggable:true,
 mobileFirst:true,
 speed:500,
 
 arrows: false,
 slidesToScroll:  1,
 responsive: [
     {
         breakpoint: 768,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 1
         }
       }
     ,
      {
       breakpoint: 600,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 1
       }
     }
   
   ]
});


}



