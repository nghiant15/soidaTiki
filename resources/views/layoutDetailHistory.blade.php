
@php
   $dataColor  = null;
   $bannerPage = null;
   
    if (isset($globalColor)) {
        $dataColor = $globalColor->mainColor;

    }
    else 
    {
        $dataColor = "#1a214f";
    }
   

    if (isset($globalData) && isset($globalData->banner)) {


        $bannerPage = $globalData->banner;

       
        
    }
    else 
    {
        $bannerPage =   new \stdClass();
        $bannerPage->imageBannerDesktop= "https://api-soida.applamdep.com/image_brand/applamdep1320 (1).png";
        $bannerPage->imageBannerMobile  = "https://api-soida.applamdep.com/image_brand/applamdep1320 (1).png";
        
    }



   
    $dataUserSales = session('dataCompany', null);

   
    
    $dataUser = null;


        if($dataUserSales)
        {
            $dataUser = $dataUserSales->data;
        }
    
 

 
 
@endphp
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/status.css">
    <link rel="stylesheet" href="/css/soidanew.css">
    <link rel="stylesheet" href="/css/reponsive.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/button.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/table.css">
    <style> 
    
        :root{
            --main_color : {{$dataColor}};
            --color_button_dark: {{$dataColor}};
            --color_button_light: {{$dataColor}};
            --color_title: {{$dataColor}};
            --color_title_section: {{$dataColor}};
            --color_letter_white:{{$dataColor}};
            --main_letter_dark: {{$dataColor}};
            --main_letter_blue: {{$dataColor}};
            --gralident1: {{$dataColor}};
            --gralident2: {{$dataColor}};
            --white: {{$dataColor}};
            --circle-small: {{$dataColor}};
            --bg-white: {{$dataColor}};
            --black-50: {{$dataColor}};
            --success_color: #3bb54a;
            --error_color: #3d0d13;
        }
        .recomendProduct p {
            color: {{$dataColor}} !important; 
        }
        .text-center-box{
            color: {{$dataColor}} !important;
        }
        .description-text p{
           color: {{$dataColor}} !important; 
        }
        .hadernav span {
            color: {{$dataColor}} !important; 
        }
        .account_hover a {
            color: {{$dataColor}} !important; 
        }
    </style>

   
    @yield('header')
    
</head>

<body>
    <script>
        var isLogin = false;

        var slug;
    </script>

    @if (Session()->has('dataCompany'))
    <script>
        var isLogin = true;
    </script>
    @endif
   
    


    

    <div class="content-page">

    <div class="content-plugin">
    <div class="banner">
</div>

 
<div class="hadernav">
    <div class="title-header">
        <span class="soida"> SOI DA </span>
        <span class="online"> ONLINE </span>
        <span class="ai">AI </span>
    </div>

    <div class="sologan">
        <img src="/images/navabar.svg">
        <span>Ứng dụng soi da với công nghệ AI hiện đại *</span>
    </div>


</div>

        <div id="alert-web">

        </div>
        @yield('contentpage')

        </div>
    </div>

    @include('new.popupLoading')

    @include('new.popupSuccess')

    
<footer class="bg-smoke mt-5">
    <div class="content-page">
        <div class="content-plugin">
            <div class="row" style="padding: 20px 0;margin:0">                     
                <div class="footer__col1--padding">   
                    <div class="desktop-inline">
                    <div class="footer__col1--column">
                        <img class="footer__logo-shynh" src="/footerLogo.png" alt="logo">
                        <div class="footer__global-title text-center font--main">
                            <a>
                                <span class="font--main">
                                    
                                </span>
                            </a>
                        </div>  
                        
                    </div>   
                    </div>   
                </div>                
                <div class="footer__col2--padding">             
                    <div div="" class="footer__space--mobi">
                    </div>    
                          <div class="footer__global-title font--main">
                                <span> CÔNG TY TNHH CÔNG NGHỆ TIKITECH </span>
                            </div>
                         
                            <div class="footer__global font--main">
                            Số 91 Đường N1, Khu dân cư Hiệp Thành, Phường Hiệp Thành, Quận 12, Thành phố Hồ Chí Minhh
                            </div> 
                            <div class="footer__global font--main">
                                Hotline: <a class="font--main" href="tel:0903 969 952">0903 969 952</a> 
                                
                            </div> 
                            <div class="footer__global font--main"> 
                                Email: <a class="font--main" href="mailto:hi@tikitech.vn">hi@tikitech.vn</a>
                            </div>    
                </div>
            </div>
        </div>
    </div>

  
</footer> 



</body>

        <script type="text/javascript" src="/js/history.js"></script>

        

</html>