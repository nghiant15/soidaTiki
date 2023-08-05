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

                <div class="resultNote">

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
                ĐĂNG NHẬP
                </span>
                <span style ="text-indent: 3px;">  ĐỂ NHẬN QUÀ XINH</span>

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


            <div id ="ConcludeItemArea" class ="blurdiv" >
        
            </div>
        


                <div class="title-overview blurdiv" id ="tvtq_area"  >
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
                <div id="idtuvantongquan" class="blurdiv"  style="
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

    

            var resultCheck = sessionStorage.getItem("_t");
            if (resultCheck == null) {

                window.location.href = "/";

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
//    setTimeout(() => {
//     if(!isLogin)
//     {  
//          if(turnOnGame == false)
//          {
//             ToggleDisplayLogin('.status-modal-account',true,'Để xem lịch sử soi da online');
//          }
       
          
        
       
       
//     }
     
//    }, 4000);



    setTimeout(() => {
        refreshIntervalId = setInterval(myTimer, 1000);
    }, 4000);

setTimeout(() => {
    
    if(isLogin )
    {   
        $("#subscribleId").hide();

       $(".blurdiv").removeClass( "blurdiv" );

       var  popupRequest = sessionStorage.getItem("popupReward");
       if(popupRequest)
       {
        setTimeout(() => {
      
            
        }, 2000);
       }
    }
    else
    {
       
    }
}, 3000);

function myTimer() {

        
    if(isOnScreen($('#ketluachitiet'))) { 
             
            if(!isLogin )
            { 
                setTimeout(() => {
                        // ExapandForm(); 
                        $("#foolterBlu").hide();
                        $("#subscribleId").show();
                        // == openFormRegister();
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
// setTimeout(() => {
//     showPupupSuccess();       
// }, 10000);
</script>