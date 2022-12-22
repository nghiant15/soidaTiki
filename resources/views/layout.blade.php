@php
    $dataColor =  "#1a214f";
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
        --main_color : #1a214f;
        --color_button_dark: #015C92;
        --color_button_light: #53A6D8;
        --color_title: #53A6D8;
        --color_title_section: #015C92;
        --color_letter_white: #FFFFFF;
        --main_letter_dark: #212326;
        --main_letter_blue: #53A6D8;
        --gralident1: #7DC387;
        --gralident2: #6CFF95;
        --white: #FFFFFF;
        --circle-small: #E5E5E5;
        --bg-white: #FAFAFA;
        --black-50: #F2F2F2;
        --success_color: #3bb54a;
        --error_color: #3d0d13;
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
   
    
    {{-- @include('login.login') --}}

    @if (Session()->has('dataCompany'))
    @include('profile.update')
    @include('profile.history')
    @include('profile.isVoucher')
    @include('login.login')



    @else
    @include('profile.update')
    @include('profile.history')
    @include('profile.isVoucher')
    @include('login.login')



    @endif

    <div class="content-page">

        <div class="content-plugin">
<div class="banner">
  
    
    @if ($slug =="menard" || $slug =="Menard" )
      <img id ="bannerId" src="/menard.jpg">
      
    @elseif  ($slug =="nhidanhatdang" || $slug =="Nhidanhatdang" )
        <img id ="bannerId1" src="/banner2.jpg">
    @elseif  ($slug =="drHelen" || $slug =="DrHelen" )
    <img id ="bannerId1" src="/banner3.jpg">
     
    @else


            @if ($agent->isMobile())
            
            <img id ="bannerId" src="/assets/banner/tikitech-soida-mobile.png">
             @else 
            <img id ="bannerId" src="/assets/banner/applamdep1320.png">
            @endif
       
      
    @endif

   
</div>

 
<div class="box-position-header">
    <div class="position_header">
        <div class="banner_header flex-center-space">
            <div class="banner__header--left">
                <a href ="/"><img style= "max-width:24px"   src ="/homepage.png" /> </a>
            </div>
            <div class="flex-center banner__header--right">
                <div class="hoverBlock_form_account relative">
                    @if (session()->has('dataCompany'))
                    <div class="account_hover">
                        <a href="javascript:void(0)" class="btn btn_nav scroll-nav-font navbar-a"
                        style="margin:auto;box-shadow:none">
                        @if(isset($dataUser->name))
                        {!!$dataUser->name!!}
                        @else
                        Tài khoản
                        @endif
                    </a>
                        <div class="status-form-function-user position_form_information_user">
                            <div class="form-function-user">
                                <div>
                                    <p id="active-form-information-user">Thông tin cá nhân</p>
                                </div>
                                <p onclick="openPageHistory()">Lịch sử soi da</p>
                              
                                <hr />
                                <div class="flex-center" onclick="questionLogout()">
                                    <p  style="color:var(--main_color)">
                                        Đăng xuất</p>
                                    <svg style="width:16px !important; height:16px !important"
                                        onclick="logoutUser()" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="var(--main_color)"
                                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    <div class="flex" >
                        <a onclick="ToggleDisplayClass('.status-modal-account',true)"
                            href="javascript:void(0)"
                            id="status__text__login"
                            class=" btn_nav btn_nav-no-after navbar-a navbar-a"
                            style="margin:auto;box-shadow:none">
                            Đăng nhập
                        </a>
                        <div class="hover-after-login" >
                            <a id="name_after_login" href="javascript:void(0)"
                                
                                class=" btn_nav  navbar-a navbar-a"
                                style="margin:auto;box-shadow:none">
                                
                            </a>
                            <div class="status-form-after-login position_form_information_user">
                                <div class="form-function-user">
                                    <p onclick="reloadWeb()">Click để xem thông tin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    @endif
                    <div class="indicator"></div>
                </div>
                @if (Session()->has('dataCompany'))
                <a class="hover_historySoida_a" href="javascript:void(0)"
                    onclick="openPageHistory()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10L8 16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 12V16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 8V16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <rect x="3" y="4" width="18" height="16" rx="2"
                            stroke="{{ $dataColor }}" stroke-width="2" />
                    </svg>
                </a>
                @endif
            </div>
        </div>
    </div>
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

    
        
</body>

<script type="text/javascript" src="/js/history.js"></script>

</html>