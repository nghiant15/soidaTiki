@if (Session()->has('dataColor'))
@php
$dataColor = session('dataColor', null);
$dataCompany = Cache::get('webinfo');



 $dataCompany_admin = Cache::get('webinfo_admin');


$dataSale = session('dataSale', null);
$dataUserSales = session('dataCompany', null);

if($dataColor)
{
$dataColor = $dataColor->data;
}

@endphp

@else
@php

@endphp
@endif
<html>
<head>

    <meta charset="UTF-8">
    <meta name="theme-color" content="#d47690">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no" />
    <meta property="og:image" content="/images/tikitech_icon.png" />
    <link rel="icon" type="" href="/images/tikitech_icon.png">
    @if (isset($dataCompany))


    @isset($dataCompany->seoInfo->description)
    <meta name="description" content=" 100% Miễn Phí Trọn Đời, Nâng tầm shop mỹ phẩm bạn, với Hệ Thống Soi Da & Tư Vấn Online .Ngay tại nhà, Kiểm tra & tư vấn, tuổi da & hơn 40 thông số về da khác. Một lần quét, nói với bạn mọi điều .#soidaonline" />

    @endisset


    @isset($dataCompany->seoInfo->key)

    <meta name="keywords" content="{{ $dataCompany->seoInfo->key }}" />

    @endisset
    @isset($dataCompany->seoInfo->author)

    <meta name="author" content="{{ $dataCompany->seoInfo->author }}">

    @endisset
    @isset($dataCompany->seoInfo->imageShare)
    @endisset
    <title> 100% Miễn Phí Trọn Đời, Nâng tầm shop mỹ phẩm bạn, với Hệ Thống Soi Da & Tư Vấn Online .Ngay tại nhà, Kiểm tra & tư vấn, tuổi da & hơn 40 thông số về da khác. Một lần quét, nói với bạn mọi điều .#soidaonline
    </title>
    @endif
    <meta name="googlebot" content="noarchive" />
    <meta name="robots" content="noarchive" />

    <meta property="og:type" content="article" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/materia/bootstrap.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/all.css">

   
    <link rel="stylesheet" href="/css/campaign.css">

    @yield('header')


</head>

<style>

@keyframes example {
  from {color: #ffffff;}
  to {color:    ;}
}
    :root {
        --main_color: #dc3f5d;
    }

    #myVideo {
  
  width: 100%;
  height: auto;
}
</style>

<body>
    @if (Session()->has('dataSale'))
    @include('profile.formCustomer')
    @endif
    @if (Session()->has('dataCompany'))
    @include('profile.update')
    @include('profile.history')
    @include('profile.isVoucher')
    @else
    @include('login.login')

    @endif
  
    <div id="alert-web">

    </div>
    <div class="content-page">
       
        @include("book.header")
       
        <section class="banner_sectionbook">
             <img src ="/bannerbook.png">
        </section>
        
        <section class="banner_section3">
    

            <div class ="titlepage">
                <span class= "title1"> KHO SÁCH ONLINE </span> <span>100% DOWLOAD MIỄN PHÍ</span>
            </div>

            <div class ="bookdisplay"  >

    
<div class ="booknav"> 
    <ul class="nav ">
           <li class="nav-item">
               
                   <a class="nav-link"  onclick="getData(0)"  aria-current="page" href="javascript:void(0)">Sách tiếng anh</a>
           </li>
           <li class="nav-item">
                 <a class="nav-link" onclick="getData(1)" href="javascript:void(0)">Sách nuôi day con</a>
           </li>
           <li class="nav-item">
                 <a class="nav-link" onclick="getData(2)" href="javascript:void(0)">Tạp chí thời trang</a>
           </li>

           <li class="nav-item">
               <a class="nav-link" onclick="getData(5)"   href="javascript:void(0)">Tiểu thuyết</a>
           </li>
       
     </ul>
     

</div>


<div class="databook" id = "dataBook0">

</div>





{{-- <div class="pagination">
 <a href="#">&laquo;</a>
 <a href="#">1</a>
 <a href="#" class="active">2</a>
 <a href="#">3</a>
 <a href="#">4</a>
 <a href="#">5</a>
 <a href="#">6</a>
 <a href="#">&raquo;</a>
</div> --}}
</div>

<div class ="viewpdf">
   <a class ="btnBack" onclick="backToHomePage()" style ="color: var(--main_color) !important;background-color: transparent;font-weight: bolder;text-decoration: underline !important;"> 
       Danh mục sách
   </a>

   
</div>

<div class ="viewpdf">
  
   <div class="display-title">
          <p class="title" id ="titleid">KHÔNG CÓ GÌ CHẾT ĐI BAO GIỜ </p>
          <p class="title1" id ="title1id" >Việt nam và ký ức chiến tranh </p>
          <p class="author" id ="authorid">   NGUYỄN THANH VIỆT</p>
    </div>
    <div>
    <div id="pdfviewer"></div>

   

</div>
        </section>

    
    </div>
    @include('book.footer')
    @include('book.layout')
    <div class="status-backToTop-campaign">
        <div class="back-to-top-campaign" onclick="BackToTop()">
            <div class="flex-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/templateForm.js"></script>
    <script src="/js/welcome.js"></script>
    <script src="/js/contant.js"></script>
    <script src="/js/campaign/bannerCampaignHome.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/welcome.js"></script>
    <script src="/js/form.js"></script>
    <script src="/js/general.js"></script>

    <script src="/js/login.js"></script>
    <script src="/js/status.js"></script>
    <script src="/js/campaign/layout.js"></script>
    <script>
        setTimeout(() => {
            hideIntroSkinCare();
        }, 10000);
        function hideIntroSkinCare(){
            $('.intro__skin-care').hide();
        }
        function renderCarousel2() {
            let data = {!!json_encode($dataGlobal->bannerSmall) !!};
        var li = ``;
        var itemCarousel = ``;
        var html = ``;
        data.forEach((item, i) => {
      
            var imageLink = "https://api-soida.applamdep.com/public/image_brand/" +item.image_link;
        if (i === 0) {
        li +=
        `<li data-target="#carouselExampleIndicators2" data-slide-to=${i} class="active"></li>`;
        } else {
        li += `<li data-target="#carouselExampleIndicators2" data-slide-to=${i}></li>`;
        };

        if (i === 0) {
        itemCarousel += `
        <div class="carousel-item banner-box-img active  ">
            <a href=${item.hrefLink} target="_blank">        
                <div class="bg-image banner-box-img" style= "background-size: contain; background-image:url('${imageLink}')">
                
                </div>
            </a>
        </div>
        `;
        } else {
        itemCarousel += `
        <div class="carousel-item banner-box-img  ">
     
            <a href=${item.href} target="_blank" >     
                <div class="banner-box-img bg-image"  style="background-size: contain; background-image:url('${imageLink}')">
    
                </div>
            </a>
        </div>

        `;
        };
        });
        html += `
        <ol class="carousel-indicators carousel-indicators1">
            ${li}
        </ol>
        <div class="carousel-inner" style='border-radius:15px'>
            ${itemCarousel}
        </div>
        

        `
        let idRender = document.querySelector(".classRenderCarousel2");

        if (idRender) {
        idRender.innerHTML = html;
        }
    }
    renderCarousel2();
    function renderCarousel1() {
        return;
        let data = {!!json_encode($dataGlobal->bannermain) !!};
        var li = ``;
        var itemCarousel = ``;
        var html = ``;
        data.forEach((item, i) => {
           

        var imageLink = "https://api-soida.applamdep.com/public/image_brand/" +item.image_link;
        if (i === 0) {
        li +=
        `<li data-target="#carouselExampleIndicators1" data-slide-to=${i} class="active"></li>`;
        } else {
        li += `<li data-target="#carouselExampleIndicators1" data-slide-to=${i}></li>`;
        };

        if (i === 0) {
        itemCarousel += `
        <div class="carousel-item carousel-item-banner1 active banner1-box-img ">
            <a href=${item.hrefLink} target="_blank">
                <div class="bg-image carousel-item-banner1" style="background-image:url('${imageLink}')">
                        
                </div>
            </a>
        </div>
        `;
        } else {
        itemCarousel += `
        <div class="carousel-item carousel-item-banner1 banner1-box-img">
            <a href=${item.hrefLink} target="_blank">
                <div class=" carousel-item-banner1  bg-image" style="background-image:url('${imageLink}')">
            

                </div>
            </a>
        </div>

        `;
        };
        });
        html += `
        <ol class="carousel-indicators carousel-indicators1 carousel-indicators2">
            ${li}
        </ol>
        <div class="carousel-inner">
            ${itemCarousel}
        </div>
        <a class="carousel-control-prev a-none-hover" href="#carouselExampleIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next a-none-hover" href="#carouselExampleIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        `
        let idRender = document.querySelector(".classRenderCarousel1");

        if (idRender) {
        idRender.innerHTML = html;
        }
    }
    renderCarousel1();

    $('.carousel').carousel({
        interval: 2000
    });
    async function callApiWeb(){
 
    // await getAllCampaign("renderBanner-new", "1");
   
    };


    var dataWeb = {!!json_encode($dataGlobal) !!};
    // callApiWeb();
        
    
function skinSoida() {

// $(".bookdisplay").hide();
// $(".bg-smoke").hide();
// $(".viewpdf").hide();
// $(".bg-smoke").hide();
// $("#b-placeholder").show();
// hideTips();
// $(".bg-light").hide();
// haldleOpenCamera();



}
function openBook(itembook)
{  
    
    return;
    var linkhref = itembook.linkFiePdf;
    sessionStorage.setItem("linkhref", linkhref);
    var titleTemp=  itembook.title;
    var title1Temp=  itembook.title2;
    var authorTemp=  itembook.author;

    if(titleTemp != "")
    {
        $("#titleid").text(titleTemp);
    }
    else 
    {
        $("#titleid").hide();
    }

    if(title1Temp != "")
    {
        $("#title1id").text(title1Temp);
    }
    else 
    {
        $("#title1id").hide();
    }

    if(authorTemp != "")
    {
        $("#authorid").text(authorTemp);
    }
    else 
    {
        $("#authorid").hide();
    }
    $(".bookdisplay").hide();
    
    $(".bg-smoke").hide();

    adobeDCView.previewFile(
    {
        content:  {location: {url: linkhref}},
        metaData: {fileName: itembook.title}
    });

    setTimeout(() => {
        $(".viewpdf").show();
        $(".bg-smoke").show();
        $(".bg-light").show();
        
    }, 2000);
}


function backToHomePage()
{      $(".viewpdf").hide();
        $(".bg-light").hide();
        $(".bg-smoke").hide();
   
            setTimeout(() => {
                
            $(".bookdisplay").show();
            $(".bg-smoke").show();

        
                
            }, 500);

}



function getAllBook(type =0, turnon = true) 
{
    $.ajax({
                type: "GET",
                url: "https://api-soida.applamdep.com/api/book/fe/getAll",
                data:{
                 
                    Type: type
                },
             
              
                complete: function(data) {
                  
                    if(turnon ==true)
                    {
                            Swal.fire({
                            title: 'Đang lấy dữ liệu...',
                            html: 'Vui lòng chờ...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: () => {
                            Swal.showLoading()
                            }
                            });
                    }
                  
                    $("#dataBook0").empty();
                
                   
                    var dataDraw = data.responseJSON.data;
                    for (let i = 0; i < dataDraw.length; i++) {
                         let itemBook = dataDraw[i];
                         var imagecover =  itemBook.linkCover;
                         var  title = itemBook.title;
                         var linkFile = itemBook.linkFiePdf;

                         var hrefLink = "https://applamdep.com/soida/"+ itemBook.slug;
                         
                         var stringifiedObj = JSON.stringify(itemBook);
                         let div1 =  document.createElement('div');
                         div1.className = "book-item";
                         div1.innerHTML = ' <a href="'+hrefLink+'"><img src ="'+imagecover+'"/></a>   <a class="titlenava" href="'+hrefLink+'" ><p>'+title+' </p></a>';
                         div1.onclick = 

                         div1.addEventListener( 'click', function(event){
                           
                            doSomething(event,itemBook);
                        }, false );

                        function doSomething(event, greeting) {
                             openBook(greeting);
                        
                        }
                         $("#dataBook0").append(div1);
                         
                    }
                    setTimeout(() => {
                        swal.close();
                        
                    }, 1000);
                

                },
            });

          


        }

var typeInput= 0;
function getData(type)
{
   
    if(typeInput != type)
    {
        typeInput = type;
        getAllBook(type,true);

        
    }
  
}
window.addEventListener('load', function () {

   
    getAllBook(0, true);
   
})

document.addEventListener("adobe_dc_view_sdk.ready", function()
   {
      adobeDCView = new AdobeDC.View({clientId: "f2ca61bb930e452f94e2a43f779e5261", divId: "pdfviewer"});
     
   });
    </script>
</body>

</html>