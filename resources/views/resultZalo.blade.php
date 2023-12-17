@php
        $dataLikn =  session('TuVanData', null);
         $zaloLink =  $dataLikn->zaloLink;
         $messengerLink = $dataLikn->messengerLink;

         if($zaloLink =='')
         {
            $zaloLink = "http://zalo.me/769304971095062899?src=qr";
         }
        if($messengerLink =='')
         {
            $messengerLink ="https://m.me/106007668343244?ref=mess";
         }

       
@endphp
@extends('layoutZalo')


    <script>
        var successGameTrue =  {!! json_encode($successGame) !!};
      
    </script>

@include('popup.subscrible')

@section('header')
    <title>Thông tin kết quả soi da</title>
    <meta name="theme-color" content="#d47690">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/css/soidanew.css">
    <link rel="stylesheet" href="/css/tuvantongquan.css">
    <link rel="stylesheet" href="/css/reponsive.css">
    <link rel="stylesheet" href="/css/sanphamgoiy.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet"> -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <!-- <link rel="stylesheet" href="http://localhost:5000/contain/css/style.css" /> -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">
    <!-- <link rel="stylesheet" href="https://ungdungsoida.netlify.app/contain/css/style.css" /> -->

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/aos/aos.css">
    <link rel="stylesheet" href="/styles/skin_screening/index.css">
    <link rel="stylesheet" href="/styles/skin_screening/responsive.css">
    <link rel="stylesheet" href="/styles/global/index.css">
    <link rel="stylesheet" href="/styles/global/global_responsive.css">
    <link rel ="stylesheet" href ="/css/welcomNew.css">
    <!-- ASSETS CDN SLICK -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
.animated-gradient {
  background: repeating-linear-gradient(to right, red 0%, blue 50%, red 100%);
  width: 100%;
  background-size: 200% auto;
  background-position: 0 100%;
  animation: gradient 2s infinite;
  animation-fill-mode: forwards;
  animation-timing-function: linear;
}

@keyframes gradient { 
  0%   { background-position: 0 0; }
  100% { background-position: -200% 0; }
}   
    </style>



@endsection
@section('contentpage')

@if ( $zaloLink != "" )
<a  id ="zaloMessage" style ="display:none"  onclick="OpenAction('zalo')" ><div style="position:fixed;bottom:70px;right:30px; z-index:1000" class="messenger"><noscript>
    <img src="/zalo96.png"/></noscript>
    <img class=" lazyloaded"  src="/zalo96.png" data-src="/zalo96.png"></div></a>  

@endif

@if ( $messengerLink != "" )
    
<a  id ="messenger" style ="display:none" onclick="OpenAction('messenger')" ><div style="position:fixed;bottom:170px;right:30px; z-index:1000" class="messenger"><noscript>
    <img src="/tikiFacebook.png"/></noscript>
    <img class=" lazyloaded"  src="/tikiFacebook.png" data-src="/tikiFacebook.png"></div>
</a>

@endif




<style>
.call-btn {
    position: fixed;
    bottom: 24px;
    right: 165px;
    background: #37c837;
    text-align: center;
    color: #fff;
    box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
    z-index: 99;
    transition: all .3s;
    font-weight: 700;
    border-radius: 5px;
    padding: 3px 10px 0px 38px;
    font-size: 18px;
    line-height: 25px;
}
.call-btn img {
    position: absolute;
    left: 0;
    top: 0;
    padding: 5px 7px;
    background: rgba(0,0,0,0.3);
    border-radius: 5px 0 0 5px;
    animation: blinking 1s ease-in-out infinite;
}	
    @include("popupGame.popupFailed")

    @include("game.popupRegigerGame")
    @include ("popupGame.popup")
    <script>
        var slugGlobal = {!! json_encode($slug) !!};
        var turnOfGame = {!! json_encode($turnOffGame) !!};
        var successGame = {!! json_encode($successGame) !!};
        var displayGame = {!! json_encode($displayGame) !!};
        var contetnFail = {!! json_encode($contetnFail) !!};
        var contentSuccess = {!! json_encode($contentSuccess) !!};
       
        var ageGame = {!! json_encode($ageGame) !!};
        var ageGameReal = {!! json_encode($ageGameReal) !!};
        var gameType = {!! json_encode($gameType) !!};
        var gameJoinType1 = {!! json_encode($gameJoinType1) !!};
    
    </script>
    {{-- <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body loginpopup">
                <form id="formLogin">
                    <button class="login-google">Tiếp tục với google </button>
                    <span class="break-line">Hoặc </span>
                    <input type="text" placeholder="Email hoặc SĐT" id="userNameLogin" name="userName"
                        class="login-input userName" required>
                    <span class="errorMessage errorMessageUserName" style="display:none"> Bạn chưa nhập email hoặc
                        số điện thoại</span>
                    <input type="password" placeholder="Mật khẩu" id="passwordLogin" class="login-input password"
                        name="password" required>
                    <span class="errorMessage errorMessagePassword" style="display:none">Bạn chưa nhập mật
                        khẩu</span>
                </form>
                <button class="login-btn" onclick="login()">Đăng nhập/Đăng ký </button>
                <p class="bottomPage">
                    Bạn chưa có tài khoản?
                    <a href="javascript:void(0)" onclick="openForm(1)"> <strong>Tạo tài khoản </strong> </a>
                </p>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body loginpopup">

                <form id="formRegister">
                        <button class="login-google">Tiếp tục với google </button>
                        <span class="break-line">Hoặc </span>
                        <input type="text" placeholder="Email hoặc SĐT" id="userNameRegister" name="userName"
                            class="login-input userName" required>
                        <span class="errorMessage errorMessageUserName" style="display:none"> Bạn chưa nhập email hoặc
                            số điện thoại</span>
                        <input type="password" placeholder="Mật khẩu" id="passwordRegister" class="login-input password"
                            name="password" required>
                        <span class="errorMessage errorMessagePassword" style="display:none">Bạn chưa nhập mật
                            khẩu</span>
                </form>

                <button class="login-btn" onclick="register()">Tạo tài khoản ngay </button>

                <p class="bottomPage">Bạn đã có tài khoản? <a href="javascript:void(0)" onclick="openForm(0)">
                        <strong>Đăng nhập </strong> </a>
                </p>



            </div>

        </div>
    </div>
</div> --}}

    <div id="b-placeholder">
        <div class="centerText recomendProduct">
            <p>
                KẾT QUẢ PHÂN TÍCH
            </p>
            <img src="/images/step3.png">
        </div>
        <div class ="avgclass">
            <span class ="title">
                 Sức khỏe làn da bạn ở mức <span id ="score2" class="score"> </span> 
                 
            </span>
           
        </div>

        <span  id ="scoreAvg" class="score">  </span>  

        {{-- <div class="profilearea">

        <div class="dropdown">
            <button class="dropbtn" >
                <span id ="profileName"> </span>
                <img src="/assets/drop-down-arrow.png"> 
            </button>
            <div class="dropdown-content">
            <a href="javascript:void(0)" onclick ="openAccountPage()">Thông tin tài khoản</a>
            <a href="javascript:void(0)" onclick ="openHomePage()">Soi da online</a>
            <a href="javascript:void(0)" onclick ="openHistoryPage()">Lịch sử soi da</a>
            <a href="javascript:void(0)" onclick="logout()"  >Đăng xuất</a>
            </div>
        </div>
    </div> --}}

        {{-- <div class="areaLogin">


        <ul class="right-menu">




            <li class="right-text login">
                <a id="myBtn" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">Đăng nhập/Đăng ký</a>
            </li>
            <li class="right-text login">
                <a href="https://applamdep.com/" href="javascript:void(0)" data-toggle="modal"
                    data-target="#signUpModal">Đăng ký</a>
            </li>
        </ul>

    </div> --}}

        <style>
            .slick-slide img {
                width: 100% !important;
            }

            .slick-slide {
                height: unset !important;
            }

            .ai-skin__result {
                display: block !important
            }
        </style>

       

        <div class="ai-skin__container">
            <div id="output">
                <div class="ai-skin__result-top">
                    <div class="ai-skin__result-image ai-skin__image--cropped">
                        <img id="imageResult">
                        <div id="spotContainer" class="ai-skin__result-plot"> </div>
                        <div id="blackHeadContainer" class="ai-skin__result-plot"> </div>
                        <div id="pimpleContainer" class="ai-skin__result-plot"> </div>
                        <div id="acneContainer" class="ai-skin__result-plot">
                            <div class="ai-skin__result-plot__box"
                                style="width: 5.00292px; height: 4.66571px; top: 102.585px; left: 155.757px; color: rgb(255, 255, 0); border-color: rgb(255, 255, 0);">
                            </div>
                        </div>
                        <div id="moleContainer" class="ai-skin__result-plot"></div>
                    </div>
                    <div class="ai-skin__result-checkContainer">
                        <div class="rowcolum1">
                            <label class="ai-skin__result-checkbox">
                                <span class="ai-skin__result-checkbox-input">
                                    <input type="checkbox" id="myCheckSpot" onclick="resultModule.toggleSpot()">
                                    <span class="ai-skin__result-checkmark">
                                        <span></span>
                                    </span>
                                </span>
                                <span class="ai-skin__result-checkbox-label">Đốm tàn nhan</span>
                            </label>
                            <label class="ai-skin__result-checkbox">
                                <span class="ai-skin__result-checkbox-input">
                                    <input type="checkbox" id="myCheckAcne" onclick="resultModule.toggleAcne()"
                                        checked="true">
                                    <span class="ai-skin__result-checkmark">
                                        <span></span>
                                    </span>
                                </span>
                                <span class="ai-skin__result-checkbox-label"> Mụn trứng cá</span>
                            </label>
                        </div>

                        <div class="rowcolum1 column2">
                            <label class="ai-skin__result-checkbox">
                                <span class="ai-skin__result-checkbox-input">
                                    <input type="checkbox" id="myCheckPimple" onclick="resultModule.togglePimple()">
                                    <span class="ai-skin__result-checkmark">
                                        <span></span>
                                    </span>
                                </span>
                                <span class="ai-skin__result-checkbox-label">Mụn sưng viêm</span>
                            </label>
                            <label class="ai-skin__result-checkbox">
                                <span class="ai-skin__result-checkbox-input">
                                    <input type="checkbox" id="myCheckBlackhead" onclick="resultModule.toggleBlackhead()">
                                    <span class="ai-skin__result-checkmark">
                                        <span></span>
                                    </span>
                                </span>
                                <span class="ai-skin__result-checkbox-label">Mụn đầu đen</span>
                            </label>
                        </div>
                        <div class="rowcolum1 column3">
                            <label class="ai-skin__result-checkbox">
                                <span class="ai-skin__result-checkbox-input">
                                    <input type="checkbox" id="myCheckMole" onclick="resultModule.toggleMole()">
                                    <span class="ai-skin__result-checkmark">
                                        <span></span>
                                    </span>
                                </span>
                                <span class="ai-skin__result-checkbox-label">Nốt ruồi</span>
                            </label>
                        </div>


                    </div>

                </div>

                <div class="box-modal-suggestion">
                    <p class="text-center-box">
                        Bây giờ hãy khám phá các <br>dấu hiệu lão hoá da của bạn một cách chi tiết

                    </p>
                </div>

                <div class="resultNote" id ="viewhistory">

                    <p class="text-title-paragraph">

                        Thông tin tổng quan
                    </p>
                </div>
                <div id="idGeneralResult">

               
                </div>
              

@if (Session()->has('dataCompany'))

@else
       @if($slug !="bibabo")
        

                <div class="resultNote">
                        
                    <p class="maincontent text-suggest-login" id="suggest-login-content">

                <span style="font-weight:600;text-decoration: underline;cursor:pointer" onclick="ToggleDisplayClass('.status-modal-account',true)">
                THEO DÕI 
                </span>
                <span style ="text-indent: 3px;">  LỊCH SỬ SOI DA</span>

                <span style="font-weight: 600;"></span>  
                </p>

                </div>
        @endif
@endif


               

                @if (1==1)
                 <div class="poupupContainer">
                    <div class="modalpopup">

                        <p class="maincontent">
                            Chúng tôi muốn bạn có thể dễ dàng nắm bắt mọi thông tin và hiểu hơn trước khi vào sâu chi tiết
                        </p>
                        {{-- <p class="descriptionContent"> 
                            Chúng tôi sẽ chia ra thành các thành phần trong phần tổng quan để bạn nắm rõ một số thứ trước khi chúng ta vào các phần chi tiết, hãy đọc hết tất cả các thành phần tổng quan để rõ hơn nhé.
                        </p> --}}
                    </div>
                </div>
                <div class="resultNote">

                    <p class="text-title-paragraph">

                        Các vấn đề cần lưu ý nhất trên làn da
                    </p>

                    <p class="description">
                        Hiểu chi tiết hơn về làn da giúp bạn biết cách chăm sóc và có làn da tuyệt vời nhất
                    </p>
                </div>
                
                
                <div class="result-list" id="danhsachketquatungphan">




                </div>

                <div class="title-overview">
                    <div class="hcn">

                    </div>
                    <div class="title-larger" id ="ketluachitiet" >
                        Kết luận chi tiết
                    </div>

                </div>

            </div>

            <style>
                .ConcludeItem{
                    padding: 0px 20px;

                    margin-top: 20px;
                  
                }
                .ConcludeItem  {
                font-family: SFU Futura;
                font-style: normal;
                font-size: 14px;
                line-height: 20px;
                color: #1c213f;
                }

                

.progress-bar-container {
    width: 100%;
    height: 13px;
    margin: 4px 0px 2px 0px;
    background: #0000001f;
}

.progress-bar-indicator {
  height: 100%;
  background-image: linear-gradient(to right, #00ff4c, #ffc107, #f55581);
 
}

#indicator-1 {
  width: 80%;
}
.paragraph-text-pa {
    display: inline-flex;
    padding-bottom: 30px;

}

.bold-text-pa {
    margin-right: 5px;
    font-weight: bold;
}
.bold-text-pa1 {
    font-weight: bold;
}
.tooltip-target { position: relative; }

.tooltip-content { 
    font-size: 9px;
    background-color: snow;
    border-radius: 20px;
    width: 70px;
    line-height: 10px;
    text-align: center;
    padding: 3px;
    display: block;
    position: absolute;
     color: black;
  
    top: -38px;
}

.tooltip-content::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #fff transparent transparent transparent;
}
.tooltip-target:hover .tooltip-content {
    display: block;
}


#textbox {
    display: flex;
    justify-content: space-between;
}
.concludeDeta-text-1 {

    display: flex;
}
.concludeDetalText {
    padding-left: 8%;
    margin-bottom: 20px;
}
            </style>


            <div id ="ConcludeItemArea" class ="blurdiv1" >
        
            </div>
        


                <div class="title-overview blurdiv1" id ="tvtq_area"  >
                    <div class="hcn">

                    </div>
                    <div class="title-larger">
                        Tư vấn tổng quát
                    </div>

                </div>
                <style>
                    .titletvtq {
                    margin-right: 5px;
                    font-weight: bold;
                    font-family: SFU Futura;
                    font-style: normal;
                    font-size: 14px;
                    line-height: 20px;
                    color: #1c213f;
                    }
                    .paragraphText{

                        font-family: SFU Futura;
                        font-style: normal;
                        font-size: 14px;
                        line-height: 20px;
                        color: #1c213f; 
                        text-align: justify;
                       
                    }


                    }
                </style>
                <div id="idtuvantongquan" class="blurdiv1"  style="
                text-align: justify;
           
                padding: 10px;
            ">

                    {{-- <div class ="tuvantongquanItem"> 
                        <p class ="titletvtq">Lão hoá da: </p>
                        <p class ="paragraphText">Làm sạch da 2 lần/ngày,bôi kem dưỡng mỗi ngày, đắp mặt nạ dưỡng ẩm 2-3 lần/tuần , tẩy tế bào chết và ngừng sử dụng các sản phẩm chăm sóc da gây dị ứng. </p>   
                    </div>

                    <div class ="tuvantongquanItem"> 
                        <p class ="titletvtq">Mụn và mụn viêm đỏ: </p>
                        <p class ="paragraphText">Làm sạch da 2 lần/ngày,bôi kem dưỡng mỗi ngày, đắp mặt nạ dưỡng ẩm 2-3 lần/tuần , tẩy tế bào chết và ngừng sử dụng các sản phẩm chăm sóc da gây dị ứng. </p>   
                    </div>

                    <div class ="tuvantongquanItem"> 
                        <p class ="titletvtq">Quầng thâm mắt: </p>
                        <p class ="paragraphText">Làm sạch da 2 lần/ngày,bôi kem dưỡng mỗi ngày, đắp mặt nạ dưỡng ẩm 2-3 lần/tuần , tẩy tế bào chết và ngừng sử dụng các sản phẩm chăm sóc da gây dị ứng. </p>   
                    </div>

                    <div class ="tuvantongquanItem"> 
                        <p class ="titletvtq">Lỗ chân lông: </p>
                        <p class ="paragraphText">Làm sạch da 2 lần/ngày,bôi kem dưỡng mỗi ngày, đắp mặt nạ dưỡng ẩm 2-3 lần/tuần , tẩy tế bào chết và ngừng sử dụng các sản phẩm chăm sóc da gây dị ứng. </p>   
                    </div>
                    <div class ="tuvantongquanItem"> 
                        <p class ="titletvtq">Đốm thâm nám: </p>
                        <p class ="paragraphText">Làm sạch da 2 lần/ngày,bôi kem dưỡng mỗi ngày, đắp mặt nạ dưỡng ẩm 2-3 lần/tuần , tẩy tế bào chết và ngừng sử dụng các sản phẩm chăm sóc da gây dị ứng. </p>   
                    </div> --}}

                </div>
                @endif
                

            </div>
            <div class="recomend-title-box" id ="hideProductList"> 

<div class="centerText"> 
<p>GỢI Ý TỪ CHUYÊN GIA</p>
<img src="/images/start-direct.png"> 

</div>
<div  class="title-strong"> 
<p> CÁC SẢN PHẨM CHUYÊN GIA ĐỀ XUẤT RIÊNG CHO BẠN </p>
</div>
</div>

<div id = "list-product">



</div>

            @if (1==1)
            <div class="content-plugin" id ="buttonRecomand">
                
               
                <div class="box-class-center" style="height:77px">
                    <div class=" nav-button  spaceAjustVer btnrecomend">

                        <a href="javascript:void(0)" onclick="openRecomendProduct()" style="width: 234px !important">
                            <img src="/images/arrow.png"> GỢI Ý CHĂM SÓC TỪ CHUYÊN GIA </a>

                    </div>
                </div>



            </div>

            @endif

        </div>

            
       



        <script>
            var zaloLink = '{!! $zaloLink !!}';
            var messengerLink = '{!! $messengerLink !!}';
            function openRecomendProduct() {

                var base_url = window.location.origin + "/" + "soida/nhan-de-xuat-cham-soc-da";


                if (slugGlobal != null && slugGlobal !== "") {

                    base_url = window.location.origin + "/" + slugGlobal + "/" + "nhan-de-xuat-cham-soc-da";
              }

                window.open(base_url, "_self");
                return;



                if (slugGlobal == null) {
                    window.location.href = "/nhan-de-xuat-cham-soc-da";
                } else {
                    window.location.href = "/" + slugGlobal + "/nhan-de-xuat-cham-soc-da";
                }

                window.location.href = "/nhan-de-xuat-cham-soc-da";

                return;
                if (slugGlobal == null) {
                    window.location.href = "/nhan-de-xuat-cham-soc-da";
                } else {
                    window.location.href = "/" + slugGlobal + "/nhan-de-xuat-cham-soc-da";
                }

            }

            function jsonPath(obj, expr, arg) {
                var P = {
                    resultType: (arg && arg.resultType) || "VALUE",
                    result: [],
                    normalize: function(expr) {
                        var subx = [];
                        return expr
                            .replace(/[\['](\??\(.*?\))[\]']/g, function($0, $1) {
                                return "[#" + (subx.push($1) - 1) + "]";
                            })
                            .replace(/'?\.'?|\['?/g, ";")
                            .replace(/;;;|;;/g, ";..;")
                            .replace(/;$|'?\]|'$/g, "")
                            .replace(/#([0-9]+)/g, function($0, $1) {
                                return subx[$1];
                            });
                    },
                    asPath: function(path) {
                        var x = path.split(";"),
                            p = "$";
                        for (var i = 1, n = x.length; i < n; i++)
                            p += /^[0-9*]+$/.test(x[i]) ? "[" + x[i] + "]" : "['" + x[i] + "']";
                        return p;
                    },
                    store: function(p, v) {
                        if (p)
                            P.result[P.result.length] =
                            P.resultType == "PATH" ? P.asPath(p) : v;
                        return !!p;
                    },
                    trace: function(expr, val, path) {
                        if (expr) {
                            var x = expr.split(";"),
                                loc = x.shift();
                            x = x.join(";");
                            if (val && val.hasOwnProperty(loc))
                                P.trace(x, val[loc], path + ";" + loc);
                            else if (loc === "*")
                                P.walk(loc, x, val, path, function(m, l, x, v, p) {
                                    P.trace(m + ";" + x, v, p);
                                });
                            else if (loc === "..") {
                                P.trace(x, val, path);
                                P.walk(loc, x, val, path, function(m, l, x, v, p) {
                                    typeof v[m] === "object" &&
                                        P.trace("..;" + x, v[m], p + ";" + m);
                                });
                            } else if (/,/.test(loc)) {
                                // [name1,name2,...]
                                for (var s = loc.split(/'?,'?/), i = 0, n = s.length; i < n; i++)
                                    P.trace(s[i] + ";" + x, val, path);
                            } else if (/^\(.*?\)$/.test(loc))
                                // [(expr)]
                                P.trace(
                                    P.eval(loc, val, path.substr(path.lastIndexOf(";") + 1)) +
                                    ";" +
                                    x,
                                    val,
                                    path
                                );
                            else if (/^\?\(.*?\)$/.test(loc))
                                // [?(expr)]
                                P.walk(loc, x, val, path, function(m, l, x, v, p) {
                                    if (P.eval(l.replace(/^\?\((.*?)\)$/, "$1"), v[m], m))
                                        P.trace(m + ";" + x, v, p);
                                });
                            else if (/^(-?[0-9]*):(-?[0-9]*):?([0-9]*)$/.test(loc))
                                // [start:end:step]  phyton slice syntax
                                P.slice(loc, x, val, path);
                        } else P.store(path, val);
                    },
                    walk: function(loc, expr, val, path, f) {
                        if (val instanceof Array) {
                            for (var i = 0, n = val.length; i < n; i++)
                                if (i in val) f(i, loc, expr, val, path);
                        } else if (typeof val === "object") {
                            for (var m in val)
                                if (val.hasOwnProperty(m)) f(m, loc, expr, val, path);
                        }
                    },
                    slice: function(loc, expr, val, path) {
                        if (val instanceof Array) {
                            var len = val.length,
                                start = 0,
                                end = len,
                                step = 1;
                            loc.replace(
                                /^(-?[0-9]*):(-?[0-9]*):?(-?[0-9]*)$/g,
                                function($0, $1, $2, $3) {
                                    start = parseInt($1 || start);
                                    end = parseInt($2 || end);
                                    step = parseInt($3 || step);
                                }
                            );
                            start = start < 0 ? Math.max(0, start + len) : Math.min(len, start);
                            end = end < 0 ? Math.max(0, end + len) : Math.min(len, end);
                            for (var i = start; i < end; i += step)
                                P.trace(i + ";" + expr, val, path);
                        }
                    },
                    eval: function(x, _v, _vname) {
                        try {
                            return $ && _v && eval(x.replace(/@/g, "_v"));
                        } catch (e) {
                            throw new SyntaxError(
                                "jsonPath: " +
                                e.message +
                                ": " +
                                x.replace(/@/g, "_v").replace(/\^/g, "_a")
                            );
                        }
                    },
                };

                var $ = obj;
                if (expr && obj && (P.resultType == "VALUE" || P.resultType == "PATH")) {
                    P.trace(P.normalize(expr).replace(/^\$;/, ""), obj, "$");
                    return P.result.length ? P.result : false;
                }
            }
        </script>
        <script>
            var resultModule = (function() {
                const IMAGE_INFO_SELECTOR = "$.data.facedata.['image_info']";
                const SKIN_SPOT_SELECTOR =
                    "$.data.facedata.specialResult.data[*].data[?(@.key == 'SkinSpot')]";
                const SKIN_ACNE_SELECTOR =
                    "$.data.facedata.specialResult.data[*].data[?(@.key == 'SkinAcne')]";
                const SKIN_PIMPLE_SELECTOR =
                    "$.data.facedata.specialResult.data[*].data[?(@.key == 'SkinPimple')]";
                const SKIN_BLACKHEADS_SELECTOR =
                    "$.data.facedata.specialResult.data[*].data[?(@.key == 'SkinBlackHeads')]";
                const SKIN_MOLE_SELECTOR =
                    "$.data.facedata.generalResult.data[*].data[?(@.key == 'SkinMole')]";
                // "$.data.facedata.generalConclusion.data[*].data[?(@.key == 'SkinMole')]";

                const SKIN_DRAWERS = [{
                    selector: SKIN_SPOT_SELECTOR,
                    checkboxId: "myCheckSpot",
                    plotContainerId: "spotContainer",
                    plotColor: "#FEA500",
                }, {
                    selector: SKIN_ACNE_SELECTOR,
                    checkboxId: "myCheckAcne",
                    plotContainerId: "acneContainer",
                    plotColor: "#FFFF00",
                }, {
                    selector: SKIN_PIMPLE_SELECTOR,
                    checkboxId: "myCheckPimple",
                    plotContainerId: "pimpleContainer",
                    plotColor: "##00A853",
                }, {
                    selector: SKIN_BLACKHEADS_SELECTOR,
                    checkboxId: "myCheckBlackhead",
                    plotContainerId: "blackHeadContainer",
                    plotColor: "#FF50AF",
                }, {
                    selector: SKIN_MOLE_SELECTOR,
                    checkboxId: "myCheckMole",
                    plotContainerId: "moleContainer",
                    plotColor: "#FE0000",
                }, ];

                var dataJson = null;

                // startup();

                return {
                    toggleAcne: toggleAcne,
                    toggleBlackhead: toggleBlackhead,
                    toggleMole: toggleMole,
                    togglePimple: togglePimple,
                    toggleSpot: toggleSpot,
                    startup: startup
                };

                function startup() {

                    try {
                        dataJson = objectReponse;
                    } catch (e) {
                        console.error(e);
                    }
                    dataJson && showResult(dataJson);

                    const imageSizeChangedObserver = new ResizeObserver(function() {
                        dataJson && renderSkinIssues(dataJson);
                    });
                    imageSizeChangedObserver.observe(
                        document.getElementById("imageResult")
                    );

                }

                function showResult(dataJSON) {
                    dataJSON.data.facedata.generalConclusion.data = dataJSON.data.facedata.generalConclusion.data.slice(
                        0, 2)
                    renderSkinIssues(dataJSON);


                }

                function renderSkinIssues(data) {
                    const imageInfos = jsonPath(data, IMAGE_INFO_SELECTOR);
                    const imageInfo = imageInfos && imageInfos[0];
                    if (!imageInfo) return;
                    const img = document.getElementById("imageResult");
                    img.src = imageInfo.url;

                    const imagePlottedWidth = img.width;
                    const originalWidth = imageInfo.width;
                    const scaleRatio = imagePlottedWidth / originalWidth;

                    clearDrawData();
                    SKIN_DRAWERS.forEach(function(item) {
                        const skinItems = jsonPath(data, item.selector);
                        const skinItem = skinItems && skinItems[0];

                        if (skinItem && skinItem.value > 0) {
                            document
                                .getElementById(item.checkboxId)
                                .setAttribute("checked", true);

                            drawData(
                                skinItem.drawArr,
                                item.plotContainerId,
                                item.plotColor,
                                scaleRatio
                            );
                        }
                    });
                }

                function renderData(itemInput, idParse = "demo", titleDefault = "") {
                    var outputs = "";
                    outputs += "<details open>"
                    if (itemInput.title !== undefined) {
                        outputs += "<summary class='summary-txt'>" +
                            itemInput.title.vi + "\n" + "</summary>";
                    } else if (titleDefault !== "") {
                        outputs += "<summary class='summary-txt'>" + titleDefault
                        outputs += "</summary>";
                    }
                    // console.log('outputs', outputs)
                    let dataInput1 = ""
                    for (var i = 0; i < itemInput.data.length; i++) {
                        let itemData = itemInput.data[i];
                        // console.log('itemData', itemData)
                        if (itemData !== null) {
                            let itemOutput = "";
                            if (itemData.title !== undefined && itemData.title.vi !== undefined) {
                                itemOutput += "<li class='title-txt'>" + itemData.title.vi + ": " + "\n" + "</li>";
                            } {
                                itemData.data !== undefined ?
                                    itemData.data.forEach((item, i) => {
                                        itemOutput += "<li class='description-txt'>" + item.valueVI + "\n" +
                                        "</li>";
                                    }) :
                                    null;
                            } {
                                itemData.valueEN !== undefined && itemData.valueVI !== undefined ?
                                    (itemOutput += "<li class='description-txt'>" + itemData.valueVI + "\n" + "</li>") :
                                    null;
                            }
                            // console.log('itemOutput', itemOutput)
                            dataInput1 += "<ul>" + itemOutput + "</ul>";
                        }
                    }
                    outputs += dataInput1 + "</details>"

                    document.getElementById(idParse).innerHTML = outputs;
                }

                function renderSpecialData(itemInput, idParse = "demo") {
                    var outputs = "";
                    outputs += "<details open>"
                    if (itemInput.title !== undefined) {
                        outputs +=
                            "<summary class='summary-txt'>" +
                            itemInput.title.vi +
                            "</summary>";
                    }
                    let dataInput1 = ""
                    for (let j = 0; j < itemInput.data.length; j++) {
                        let tempData = itemInput.data[j];
                        for (let k = 0; k < tempData.length; k++) {
                            let itemData = tempData[k];
                            if (itemData.data !== undefined) {
                                if (itemData !== null) {
                                    // outputs += "<li>" + "-------------" + "</li>";
                                    let itemOutput = "";
                                    if (itemData.title !== undefined) {
                                        itemOutput += "<li class='title-txt'>" + itemData.title.vi + "\n" + "</li>";
                                    } {
                                        itemData.data !== undefined ?
                                            itemData.data.vi.forEach((item, i) => {
                                                itemOutput += "<li class='description-txt'>" + item + "\n" +
                                                "</li>";
                                            }) :
                                            null;
                                    } {
                                        itemData.valueEN !== undefined &&
                                            itemData.valueVI !== undefined ?
                                            (itemOutput += "<li class='description-txt'>" + itemData.valueVI + "\n" +
                                                "</li>") :
                                            null;
                                    }
                                    outputs += "<ul>" + itemOutput + "</ul>";
                                }
                            }
                        }
                    }
                    outputs += dataInput1 + "</details>"

                    document.getElementById(idParse).innerHTML = outputs;
                }

                function drawData(arr, itemId, color = "red", scaleRatio = 1) {
                    if (arr && arr.length > 0) {
                        for (var i = 0; i < arr.length; i++) {
                            renderDivItem(itemId, arr[i], scaleRatio, color);
                        }
                    }
                }

                function clearDrawData() {
                    document
                        .querySelectorAll(".ai-skin__result-plot__box")
                        .forEach(function(item) {
                            item.remove();
                        });
                }

                function renderDivItem(itemId, data, scaleRatio = 1, color = "red") {
                    var div = document.createElement("div");

                    div.style.width = data.width * scaleRatio + "px";
                    div.style.height = data.height * scaleRatio + "px";
                    div.style.top = data.top * scaleRatio + "px";
                    div.style.left = data.left * scaleRatio + "px";
                    div.style.color = color;
                    div.style.borderColor = color;

                    div.className = "ai-skin__result-plot__box";
                    let el = document.getElementById(itemId);
                    el.appendChild(div);
                }

                function toggleSpot() {
                    toggleSkinIssue("myCheckSpot", "spotContainer");
                }

                function toggleAcne() {
                    toggleSkinIssue("myCheckAcne", "acneContainer");
                }

                function togglePimple() {
                    toggleSkinIssue("myCheckPimple", "pimpleContainer");
                }

                function toggleBlackhead() {
                    toggleSkinIssue("myCheckBlackhead", "blackHeadContainer");
                }

                function toggleMole() {
                    toggleSkinIssue("myCheckMole", "moleContainer");
                }

                function toggleSkinIssue(toggleId, containerId) {
                    var checkBox = document.getElementById(toggleId);
                    var plotContainer = document.getElementById(containerId);

                    if (checkBox.checked == true) {
                        plotContainer.style.display = "block";
                    } else {
                        plotContainer.style.display = "none";
                    }
                }

            })();
        </script>

        <script>
            // Check for valid email syntax
            function validateEmail(email) {
                var re =
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function closeForm() {
                document.contactform.name.value = '';
                document.contactform.email.value = '';
                document.contactform.message.value = '';
                document.contactform.phone.value = '';
                document.contactform.address.value = '';

                $('.email').removeClass('typing');
                $('.name').removeClass('typing');
                $('.message').removeClass('typing');
                $('.phone').removeClass('typing');
                $('.address').removeClass('typing');

                $('.cd-popup').removeClass('is-visible');
                $('.notification').addClass('is-visible');
                $('#notification-text').html("Cám ơn bạn đã tin dùng dịch vụ chúng tôi!");
            }
        </script>

        <script>
            function loadDataRecomendProductNew() {
                var decoded = sessionStorage.getItem("_t");
                let dataJson = null
                try {
                    dataJson = JSON.parse(decoded);
                } catch (e) {
                    console.error(e);
                }
                // console.log('dataJson',)
                sessionStorage.removeItem("_t");
                if (dataJson !== null) {
                    try {
                        $.ajax({
                            type: "POST",
                            dataType: "json",
                            data: {
                                "data": dataJson.data.facedata.hintResult
                            },
                            url: "https://csgvietnam.com/itemSdk/multiItem",
                            success: function(data) {
                                let res = data
                                if (res.data !== undefined) {
                                    loadRecommendData(res.data)
                                    showSlides(1)
                                }
                            },
                            error: function(error) {
                                jsonValue = jQuery.parseJSON(error.responseText);
                            }
                        });
                    } catch (e) {
                        // console.log('e1111', e)
                        callDefaultRecommend()
                    }
                } else {
                    callDefaultRecommend()
                }

                function callDefaultRecommend() {
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "https://csgvietnam.com/itemSdk",
                        success: function(data) {
                            let res = data
                            if (res.data !== undefined) {
                                // loadRecommendData(res.data)

                            }
                        },
                        error: function(error) {
                            jsonValue = jQuery.parseJSON(error.responseText);
                        }
                    });
                }


            }




            function loadRecommendData(data = null) {

                return;
                var htmlTemplate = sessionStorage.getItem("htmlTemplate");

                $("#formProductSuggestion").empty();
                $("#formProductSuggestion").html(htmlTemplate);


                $('.slick-carousel').slick({
                    slidesToShow: 3,
                    settings: "unslick",
                    slidesToScroll: 1,
                    arrows: true,
                    infinite: false,
                    touchThreshold: 100,
                    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                    nextArrow: '<button class="slide-arrow next-arrow"></button>',
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,

                                slidesToScroll: 1,
                            },
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3,

                                slidesToScroll: 1,
                                arrows: true,
                            },
                        }, {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 2,

                                slidesToScroll: 1,
                                arrows: true,
                            },
                        }


                    ],
                });

                return;


                var slideItemData = ''
                var slideControlItem = ''
                var slidesDiv = document.getElementById("slidbannerProduct");
                // var dotsDiv = document.getElementById("slideshow-control");

                for (i = 0; i < data.length; i++) {
                    var item = data[i];

                    slideItemData += '<div class="card mr-2">\
                            <img src="' + item.image + '" alt="">\
                            <div class="product-title">\
                                <div>\
                                     ' + item.title + ' \
                                </div>\
                            </div>\
                        </div>';




                }

                for (i = 0; i < data.length; i++) {
                    var item = data[i];
                    slideItemData += '<div class="card mr-2">\
                            <img src="' + item.image + '" alt="">\
                            <div class="product-title">\
                                <div>\
                                     ' + item.title + ' \
                                </div>\
                            </div>\
                        </div>';
                }

                $("#slidbannerProduct").empty();
                $("#slidbannerProduct").html(slideItemData);
                $("#slidbannerProduct2").empty();
                $("#slidbannerProduct2").html(slideItemData);
                $("#slidbannerProduct3").html(slideItemData);
                $("#slidbannerProduct4").html(slideItemData);
                $("#slidbannerProduct5").html(slideItemData);
                $('.slick-carousel').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    infinite: false,
                    touchThreshold: 1000,
                    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                    nextArrow: '<button class="slide-arrow next-arrow"></button>',
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,

                            slidesToScroll: 1,
                        },
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,

                            slidesToScroll: 1,
                            arrows: false,
                        },
                    }, ],
                });
                showSlides(1)
            };


            $(document).ready(function($) {

                //loadDataRecomendProductNew();
                $(document).keyup(function(event) {
                    if (event.which == '27') {
                        $('.cd-popup').removeClass('is-visible');
                    }

                });

            

             

             

                
            });

            window.onscroll = function(ev) {
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                 
                }
                };
        </script>


    </div>







    <script>
            var companyIdGlobal = {!! json_encode($companyId) !!};
    </script>
    
    <script>
        function getBaseUrl() {
            // return "https://ungdungsoida.netlify.app/";
            return "./";
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // sessionStorage.setItem('dataCompany', JSON.stringify(dataCompany));


        });
    </script>

    <script>
        function sendreward() {
            $("#btnreward").hide();
            $("#btnrewardLoading").show();
            $.ajax({
                type: "PUT",
                url: "https://api-soida.applamdep.com/api/add-customer-request",
                data: JSON.stringify({
                    UserName: "TIKITECH",
                    Phone: $("#mobilePhone").val(),
                    Type: 0,
                }),
                contentType: "application/json",
                dataType: "json",
                complete: function(data) {
                    $("#btnreward").show();
                    $("#btnrewardLoading").hide();
                    $("#formContact").hide();
                    $("#result").show();

                },
            });
        }



        function closePopup(elementclose) {

            var elementRemove = elementclose.closest("div");
            var elementParrent = elementclose.closest(".ai-skin__container");
            elementParrent.removeChild(elementRemove);


        }
    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>


    <script type="text/javascript" src="/js/form.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/templateForm.js"></script>

    <script type="text/javascript" src="/js/login.js"></script>


    <script type="text/javascript" src="/js/contant.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/result.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
         var turnOffGame = {!! json_encode($turnOffGame,false) !!};
        
        var objectReponse = null;


        document.addEventListener("DOMContentLoaded", function() {

            var showRecomend =  sessionStorage.getItem("showRecomend");

            var urlHref =  window.location.href;

            if(urlHref.includes("bibabibo"))
            {

            }
            else 
            {
                 
                $("#hideProductList").hide();
                $("#list-product").hide();
                $("#buttonRecomand").hide();
            }

            if(urlHref.includes("hasaki") || showRecomend ==true )
            { 

                $("#buttonRecomand").show();


            }
            if(showRecomend==true)
            {
              $("#subscribleId").hide();

            //   $(".blurdiv").removeClass( "blurdiv" );

              setTimeout(() => {
              document.getElementById('viewhistory').scrollIntoView();
              
                }, 300);

                sessionStorage.setItem("showRecomend",false);

            }
            $("#buttonRecomand").show();

            var resultCheck = sessionStorage.getItem("_t");
            if (resultCheck == null) {

                            var locationHost = window.location.origin;
                            const firstPath = window.location.pathname.split('/')[1]; 

                            if(firstPath == null || firstPath == "")
                            {
                            window.open(locationHost);
                            }
                            else 
                            {
                            window.open(locationHost+"/" +firstPath,"_self");
                            }

            } else {
                objectReponse = JSON.parse(resultCheck);
            }

            resultModule.startup();

            reDrawInfomation();

            if(isLogin)
            {
                drawProduction(objectReponse.data.facedata.hintResult);
            }
            drawConcludeDetail(objectReponse.data.facedata.hintResult);

            drawConcludeOverview(objectReponse.data.facedata.hintResult);
            avgScore();
            drawProduction(objectReponse.data.facedata.hintResult);
            if(  turnOffGame == true)
            {

            }
                
        });
    </script>
@endsection


<script>
   var refreshIntervalId;


    // setTimeout(() => {
    //     refreshIntervalId = setInterval(myTimer, 1000);
    // }, 4000);

setTimeout(() => {
    readTextConclude();
   
}, 3000);

function myTimer() {

        
    if(isOnScreen($('#ketluachitiet'))) { 
        
            
            if(!isLogin )
            { 
                setTimeout(() => {
                      
                         readTextConclude();
                        clearInterval(refreshIntervalId);  
                }, 2000);
                
            }  

    };
}




function isOnScreen(element)
{
    var curPos = element.offset();
    var curTop = curPos.top;
    var screenHeight = $(window).height();
    return (curTop > screenHeight) ? false : true;
}
function openFormRegister() {
    if(!isLogin)
    {
        ToggleDisplayFormFollow3('.status-modal-follow',true);
    }
    
    
}


function openFormRegister2() {
    if(!isLogin)
    {
        ToggleDisplayFormFollow2('.status-modal-follow',true);
    }
    
    
    
}

function DowloadBook() 
{   
    return;
    var item =  sessionStorage.linkhref;

    

    if(item != null &&  item != '')
    {
            var link = document.createElement("a");
            link.setAttribute('download', name);
            link.href = item;
            document.body.appendChild(link);
            link.click();
            link.remove();
            sessionStorage.removeItem("linkhref");
            

    }


}

const timeoutDisplayMessage = setTimeout(ShowZalo, 5000);

function ShowZalo() {
  document.getElementById("socialBLock").style.display = "block";

  
}

var timeGet = new Date().getTime();
function OpenAction ( connectionType)
{   
    addContionType(connectionType);
  setTimeout(() => {
    if(zaloLink =="")
    {
        zaloLink =  "http://zalo.me/769304971095062899?src=qr";
    }
    if(messengerLink =="")
    {
        messengerLink =  "https://m.me/106007668343244?ref=mess";
    }
    if(connectionType =="messenger")
    {
        window.open(messengerLink,'_blank');
    }
    else 
    {
        window.open(zaloLink,'_blank');
        
    }
    
  }, 1000);

}

</script>



<div id ="socialBLock" class="actionToolbar_mobile toolbar_style_2  " style="
    display: none;
">
	<div class="container container-pd">
		<div class="toolbar-wrapper d-flex justify-content-around">
			<div class="toolbar-item toolbar-item-zalo">
				<a class="toolbar-item--boxlink cta-chatzalo" onclick="OpenAction('zalo')"  target="_blank" rel="noopener noreferrer" aria-label="zalo">
					<svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="22" cy="22" r="22" fill="url(#toolbar_paint4_linear)"></circle>
						<g clip-path="url(#toolbar_clip0)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z" fill="white"></path>
							<path d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z" fill="white"></path>
							<path d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z" fill="white"></path>
							<path d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z" fill="#0068FF"></path>
						</g>
						<defs>
							<linearGradient id="toolbar_paint4_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse">
								<stop offset="50%" stop-color="#3985f7"></stop>
								<stop offset="100%" stop-color="#1272e8"></stop>
							</linearGradient>
							<clipPath id="toolbar_clip0"><rect width="26.3641" height="24.2" fill="white" transform="translate(8.78906 9.90234)"></rect></clipPath>
						</defs>
					</svg>
					<span class="box-text">NHẬN TƯ VẤN QUA ZALO</span>
				</a>
			</div>
			
			<div class="toolbar-item toolbar-item-msg">
				<a class="toolbar-item--boxlink cta-chatmessager" onclick="OpenAction('messenger')"  target="_blank" rel="noopener" aria-label="messenger">
					<svg viewBox="0 0 60 60" cursor="pointer"><svg x="0" y="0"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><circle fill="#0A7CFF" cx="30" cy="30" r="30"></circle><svg x="10" y="10"><g transform="translate(0.000000, -10.000000)" fill="#FFFFFF"><g id="logo" transform="translate(0.000000, 10.000000)"><path d="M20,0 C31.2666,0 40,8.2528 40,19.4 C40,30.5472 31.2666,38.8 20,38.8 C17.9763,38.8 16.0348,38.5327 14.2106,38.0311 C13.856,37.9335 13.4789,37.9612 13.1424,38.1098 L9.1727,39.8621 C8.1343,40.3205 6.9621,39.5819 6.9273,38.4474 L6.8184,34.8894 C6.805,34.4513 6.6078,34.0414 6.2811,33.7492 C2.3896,30.2691 0,25.2307 0,19.4 C0,8.2528 8.7334,0 20,0 Z M7.99009,25.07344 C7.42629,25.96794 8.52579,26.97594 9.36809,26.33674 L15.67879,21.54734 C16.10569,21.22334 16.69559,21.22164 17.12429,21.54314 L21.79709,25.04774 C23.19919,26.09944 25.20039,25.73014 26.13499,24.24744 L32.00999,14.92654 C32.57369,14.03204 31.47419,13.02404 30.63189,13.66324 L24.32119,18.45264 C23.89429,18.77664 23.30439,18.77834 22.87569,18.45674 L18.20299,14.95224 C16.80079,13.90064 14.79959,14.26984 13.86509,15.75264 L7.99009,25.07344 Z"></path></g></g></svg></g></g></svg></svg>
					<span class="box-text">TƯ VẤN QUA MESSENGER</span>
				</a>
			</div>
		
		</div>
	</div>
</div>


<style>

.actionToolbar_mobile.toolbar_style_2 {
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
}

@media (max-width: 991px)
.actionToolbar_mobile {
    display: block;
}
.actionToolbar_mobile {
    position: fixed;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    background: #fff;
    display: none;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-wrapper {
    margin: 0 -2px;
    padding: 5px;
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-item {
    padding: 0 1px;
    -webkit-flex: 1 1;
    flex: 1 1;
    max-width: 96%;
}

.actionToolbar_mobile.toolbar_style_2 .toolbar-wrapper {
    margin: 0 -2px;
    padding: 5px;
}

.justify-content-around {
    -ms-flex-pack: distribute!important;
    justify-content: space-around!important;
}

.actionToolbar_mobile.toolbar_style_2 .toolbar-item {
    padding: 0 1px;
    -webkit-flex: 1 1;
    flex: 1 1;
    max-width: 96%%;
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-item-zalo .toolbar-item--boxlink {
    background: #1272e8;
}

.actionToolbar_mobile.toolbar_style_2 .toolbar-item--boxlink {
    border-radius: 20px;
    padding: 2px;
    display: -webkit-flex;
    display: -moz-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: var(--shop-color-main);
    color: #ffffff;
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-item--boxlink svg {
    display: block;
    border-radius: 50%;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 30px;
    height: 30px;
    border: 1px solid #ffffff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.11);
}

.actionToolbar_mobil svg {
    overflow: hidden;
    vertical-align: middle;
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-item--boxlink .box-text {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: calc(100% - 30px);
    padding: 2px 6px 2px 4px;
    line-height: 1.3;
    font-size: 10px;
    font-weight: 600;
    text-align: center;
    white-space: initial;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    display: -webkit-box;
}
.actionToolbar_mobile.toolbar_style_2 .toolbar-item--boxlink {
    border-radius: 20px;
    padding: 2px;
    display: -webkit-flex;
    display: -moz-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: var(--shop-color-main);
    color: #ffffff;
    background: #1272e8;
}
#socialBLock a:hover {
 opacity: 0.7;
 color: #ffffff;
}
</style>