

function reDrawInfomation() {
 
         var objectInformation = objectReponse;
         console.log(objectInformation);
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
     
    debugger;
  
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
         html  +=   '<li class="content-paragraph">'+"<span>" + arr[0]+":" + "</span>" +"<span class='boldText'>"+value+" </span>"+'</li>';
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
            console.log(data);
             drawSuggessProduct(data.responseJSON);
        },
    });
}



 function drawSuggessProduct(listProduct) 
 {


    var dataProducts = listProduct.data;

 
    dataProducts.forEach(groupProduct => {
        var dataProducts = groupProduct[Object.keys(groupProduct)[0]];
       var listDataProducts = dataProducts.list_product;
        debugger;
        var htmlItem = '\
        <div class="title-category"> \
   \
  <span>'+dataProducts.title+' </span>\
\
</div>\
<div class="product-list">';

listDataProducts.forEach(element => {
        
  var pathImage = 'https://api-soida.applamdep.com/public/image_plugin/';
  debugger;
  htmlItem+=  '<div class="product-item1">\
  \
    <div class="image-avatar"> \
      <img src="'+pathImage+''+element.image_link+'">\
    </div>\
    <div class="content-product">\
        <div class="brand"><a href="'+element.linkdetail+'">'+element.title+'</a> </div>\
    </div>\
 \
</div>'; 
            
         
        
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


  
