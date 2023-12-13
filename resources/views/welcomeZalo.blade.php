@php
    $dataSeo = "Soida liền tay";
    $dataLikn =  session('TuVanData', null);
         $zaloLink =  $dataLikn->zaloLink;
         $messengerLink = $dataLikn->messengerLink;
    
     
    if (isset($globalData)) 
    {
        $dataSeo = $globalData->seoInfo;
    }
    else 
    {
        $dataSeo = new stdClass();
        $dataSeo->title ="Soi Da Online .Ngay tại nhà, Kiểm tra, tuổi da & hơn 40 thông số về da khác. Một lần quét, nói với bạn mọi điều .#soidaonline";
        $dataSeo->imageShare ="/images/tikitech_icon.png";
    }
    if($slug =="ngocdung")
    {
    
        $dataSeo-> title ="TMV Ngoc Dung Soi Da Online";
    }
    else if($slug =="zasaly")
    {
        $dataSeo-> title ="Zasaly Spa Soi da Online";
    }
    else if($slug =="zema")
    {
        $dataSeo-> title ="Zema Beauty Soi Da Online";
    }
    else 
    {
        $dataSeo-> title ="Soi da online";
    }
  
    $dataSeo->description ="Soi Da Online .Ngay tại nhà, Kiểm tra, tuổi da & hơn 40 thông số về da khác. Một lần quét, nói với bạn mọi điều .#soidaonline";
@endphp
@extends('layoutZalo')

@section('header')
    <meta charset="UTF-8">
    <meta name="theme-color" content="#d47690">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no" />

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/global/index.css">
    <link rel="stylesheet" href="./styles/global/global_responsive.css">
    <link rel ="stylesheet" href ="/css/welcomNew.css">
    <link rel ="stylesheet" href ="/css/campaign.css">
    <!-- ASSETS CDN SLICK -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            @if (isset($dataSeo->title))
                 <title>{{$dataSeo->title}} </title>
            @else
                <title>soida nhận ngay yêu thương</title>
            @endif

        @if (isset($dataSeo->description))
        <meta name="description" content="{{$dataSeo->description}}">
        @else

        @endif
        @if (isset($dataSeo->imageShareSeo))
        <link rel="icon" type="image/png" href="{{$dataSeo->imageShareSeo}}" />
        @else

     @endif
    
       @if (isset($dataSeo->imageShare))
       <meta property="og:image"  content="{{$dataSeo->imageShare}}">
        @else
        <meta property="og:image"  content="/images/tikitech_icon.png">
       @endif
   
@endsection
@section('contentpage')

<a  id ="messenger" style ="display:none"  href="https://m.me/106007668343244?ref=mess" target="_blank"><div style="position:fixed;bottom:170px;right:30px; z-index:1000" class="messenger"><noscript>
    <img style="height:58px;" src="/tikiFacebook.png"/></noscript>
    <img class=" lazyloaded" style="height:58px;" src="/tikiFacebook.png" data-src="/tikiFacebook.png"></div>
</a>

<a  id ="zaloMessage" style ="display:none"  href="http://zalo.me/769304971095062899?src=qr" target="_blank"><div style="position:fixed;bottom:70px;right:30px; z-index:1000" class="messenger"><noscript>
    <img style="height:58px;" src="/zalo96.png"/></noscript>
    <img class=" lazyloaded" style="height:58px;" src="/zalo96.png" data-src="/zalo96.png"></div>
</a>

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
	
</style>

    <script>
        var slugGlobal = {!! json_encode($slug) !!};
    </script>
    <div id="b-placeholder">


        <div class="ai-skin__container">

            <div class="ai-skin__skin">


                <div style="display:none" class="sctn-block h-20 a-cm sctn-action">
                    <div class="action-cta action-cta-take">

                        <input id="cameraopen" type="button" onclick="opencamera()" class="upload-file">
                        <div class="icn"><img src="./assets/photo-selfie.25ed5a17 (1).svg" alt="" class="selfie">
                        </div>
                        <div class="txt">Chụp ảnh</div>
                    </div>



                    <div class="action-cta action-cta-take">

                        <input type="button" onclick="choseImage()" class="upload-file">
                        <div class="icn"><img src="./assets/choseImage.svg" alt="" class="selfie"></div>
                        <div class="txt">Chọn ảnh</div>
                    </div>

                </div>


                <div class="ai-skin__skin-top" style="display: none;">


                    <button id="takeFile" type="button" class="ai-skin__skin-option ai-skin__skin-top__use-camera"
                        onclick="skinModule.openCamera()">
                        <span>Chụp ảnh
                            <img data-src="contain/img/icons/camera.svg" src="/img/icons/camera.svg">
                            <input type="file" name="file" id="nativeCameraInput" accept="image/*" capture="user"
                                hidden="">
                        </span>
                    </button>
                    <button id="choseImageFile" type="button" class="ai-skin__skin-option ai-skin__skin-top__choose-image"
                        onclick="skinModule.chooseImage()">
                        <span>
                            Chọn ảnh
                            <img data-src="contain/img/icons/photo.svg" src="/img/icons/photo.svg">
                            <input type="file" name="file" id="localImageInput" accept="image/*" hidden="">
                        </span>
                    </button>

                </div>

                <div class="ai-skin-skin-body">
                    <div class="ai-skin__skin-image ai-skin__skin-image--inactive" id="skinImage">
                        <img class="ai-skin__skin-image__background" data-src="/images/imageTakeCamera.png"
                            src="/images/imageTakeCamera.png">
                        <div class="ai-skin__skin-video-player" id="videoPlayer">
                            <video id="video" autoplay="" muted="" playsinline="">
                                No video available
                            </video>
                            <canvas id="canvas" hidden=""></canvas>
                        </div>
                        <div class="ai-skin__skin-image-show ai-skin__image--cropped">
                            <img id="imageShow">
                        </div>
                        <div class="ai-skin__skin-focus">
                            {{-- <img data-src="contain/img/placeholders/corner-top-left.svg" class="ai-skin__skin-focus__tl"
                            src="/img/placeholders/corner-top-left.svg">
                        <img data-src="contain/img/placeholders/corner-top-right.svg"
                            class="ai-skin__skin-focus__tr" src="/img/placeholders/corner-top-right.svg">
                        <img data-src="contain/img/placeholders/corner-bottom-left.svg"
                            class="ai-skin__skin-focus__bl" src="/img/placeholders/corner-bottom-left.svg">
                        <img data-src="contain/img/placeholders/corner-bottom-right.svg"
                            class="ai-skin__skin-focus__br"
                            src="/img/placeholders/corner-bottom-right.svg"> --}}
                        </div>
                        <img id="output" hidden="">
                    </div>

                    <div class="
            ai-skin__button
            ai-skin__button--disabled
            ai-skin__skin-body__button
          "
                        id="uploadBtn" >
                        {{-- <button type="button" onclick="skinModule.uploadImage()">
                            Tải ảnh lên và phân tích
                        </button> --}}
                    </div>

                    <div class="
            ai-skin__button
            ai-skin__button--hidden
            ai-skin__skin-body__button
          "
                        id="uploadingBtn">
                        <button type="button" style="font-size: 1rem;" disabled="">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Tải lên ...

                        </button>
                    </div>

                    <div class="
            ai-skin__button
            ai-skin__button--hidden
            ai-skin__skin-body__button
          "
                        id="captureBtn">
                        <button type="button">Chụp ảnh</button>
                    </div>

                    {{-- <div  class="nav-button" id = "captureBtnStart">

                    <a href="/start1.html"> <img src="/images/arrow.png"> BẮT ĐẦU </a>
    
                </div> --}}
                </div>
            </div>

            @if($gameJoinTo == true )
            
                @php
                 $gameData  =  session('dataGame', null);
                
                 $dataImage = $gameData->des;
                @endphp 
                        
                <div id="tips" class="ai-skin__tips" style="displa">
                    <div class="ai-skin__tips__content" style= "width:400px">
                    <img src  = "{{$dataImage}}"/> 

                            <div class="ai-skin__button ai-skin__tips__button">
                                    <button type="button" onclick="hideTips()">Soi Da online ngay</button>
                                </div>
                      </div>
                    </div>
                </div>
            @elseif ($slug == "gametuoida")
                    <div id="tips" class="ai-skin__tips" style="display:none">
                            <div class="ai-skin__tips__content" style= "width:400px">
                            <img src  = "/gametuoida.png"/> 

                                    <div class="ai-skin__button ai-skin__tips__button">
                                            <button type="button" onclick="hideTips()">Soi Da online ngay</button>
                                        </div>
                            </div>
                            </div>
                     </div>       
            @else 
                <div id="tips" class="ai-skin__tips" style="display:none">
                    <div class="ai-skin__tips__content">
                        <span class="ai-skin__tips__content-header">
                            Ứng dụng sẽ chụp gương mặt của bạn. Sau đây là một số
                            hướng dẫn để có những bức ảnh chuẩn xác nhất
                        </span>
                        <ol class="ai-skin__tips__content-body">
                            <li>Giữ chặt đIện thoạI trong khi chụp</li>
                            <li>Tẩy trang &amp; làm sạch da trước khi sử dụng ứng dụng</li>
                            <li>Cột/búI tóc lên cao và cởI mắt kính (nếu có)</li>
                            <li>
                                Kiểm tra ánh sáng của phòng sử dụng camera trước để phân tích làn da bạn
                            </li>
                        </ol>
                        <div class="ai-skin__button ai-skin__tips__button">
                            <button type="button" onclick="hideTips()">TÔI ĐÃ HIỂU</button>
                        </div>
                    </div>
                </div>

            @endif
           



            
            {{-- <div class="nav-menu"> --}}

                {{-- <div class="uploadButton uploadImage">

                    <div class="nav-avatar" onclick="choseImage()">
                        <img src="/images/photos.png">

                    </div>
                    <div class="text"><a href="javascript:void(0)" onclick="choseImage()"> Tải ảnh lên </a></div>
                </div> --}}
                {{-- <div class="uploadButton cameraNow" style="width: 130px">

                    <div class="nav-avatar" onclick="haldleOpenCamera()">
                        <img src="/images/cameraImage.png">

                    </div>
                    <div class="text"><a href="javascript:void(0)" onclick="haldleOpenCamera()">Chụp ảnh ngay </a>
                    </div>
                </div> --}}


            {{-- </div> --}}


            <div class="nav-menu" id ="cammeraButton" style ="display:none">


                <div class="uploadButton cameraNow">

                    <div class="nav-avatar nav-avatar__camera" onclick="haldleOpenCamera()">
                        
                        <svg class="nav-menu-svg nav-svg-camera" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="52px" height="52px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                            <g>
                                <path d="M26,20c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S30.4,20,26,20z"></path>
                                <path d="M46,14h-5.2c-1.4,0-2.6-0.7-3.4-1.8l-2.3-3.5C34.4,7,32.7,6,30.9,6h-9.8c-1.8,0-3.5,1-4.3,2.7l-2.3,3.5   c-0.7,1.1-2,1.8-3.4,1.8H6c-2.2,0-4,1.8-4,4v24c0,2.2,1.8,4,4,4h40c2.2,0,4-1.8,4-4V18C50,15.8,48.2,14,46,14z M26,40   c-6.6,0-12-5.4-12-12s5.4-12,12-12s12,5.4,12,12S32.6,40,26,40z"></path>
                            </g>
                        </svg>


                    </div>
                    <div class="text">
                                                <a href="javascript:void(0)" onclick="haldleOpenCamera()">Chụp ảnh ngay
                        </a>
                                            </div>
                </div>
                

            </div>
            <div class=" startPage-boldTitle" style="margin-top: 90px">
                {{-- HÌNH ẢNH CỦA BẠN SẼ ĐƯỢC XOÁ NGAY SAU KHI HẾT PHÂN TÍCH --}}
            </div>
            <div class="description-text">
                <p>Ảnh tự chụp của bạn sẽ được phân tích và so sánh với hơn 10 000 bức ảnh đã được phân loại bằng một thuật
                    toán trí tuệ nhân tạo</p>
                <p>Để có kết quả nhất quán theo thời gian, chúng tôi khuyên bạn nên chụp ảnh tự sướng bằng điện thoại thông
                    minh thế hệ cuối cùng. Chúng tôi khuyến khích bạn sử dụng cùng một máy ảnh và các điều kiện ánh sáng
                    tương tự. Vui lòng tham khảo hướng dẫn chụp ảnh tự sướng để biết các điều kiện phân tích tối ưu.</p>
            </div>





        </div>


       

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>


<style>
    .bg-light img:hover {
        transform: scale(1.2);
    }
    .dropdown-content {
        width: max-content;
        line-height: 150%;
        color: #548135;
    }
</style>


        <script>
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
            
        
       
        </script>
        <script>
              function hideTips() {
                var tips = document.getElementById("tips");
                tips.style.display = "none";
                
                var audio = document.createElement("AUDIO")
                document.body.appendChild(audio);
                audio.src = "/hdsd.m4a";
                audio.autoplay  = true;
                audio.muted = true;
                audio.muted = false;
                audio.play();
                setTimeout(() => {
                    document.getElementById("cammeraButton").style.display ="grid";
                    document.getElementById("socialBLock").style.display = "block";

                    


                    
                }, 1000);
                
               
                audio.onended = function() {
                        setTimeout(() => {
                            var audio1     = document.createElement("AUDIO")
                            document.body.appendChild(audio1);
                            audio1.src = "/whileSkin.m4a";
                            audio1.autoplay  = true;
                            audio1.muted = true;
                            audio1.muted = false;
                            audio1.play(); 
                        }, 1000);
                        
                };
            }
        </script>
        <script>
               var zaloLink = '{!! $zaloLink !!}';
            var messengerLink = '{!! $messengerLink !!}';
            var skinModule = (function() {
                var width = 300; // We will scale the video width to this
                var height = 0; // This will be computed based on the input stream

                var streaming = false;
                var video = null;
                var canvas = null;
                var captureBtn = null;
                var imageShow = null;
                var imageProcess = null;
                var skinImage = null;
                var videoPlayer = null;
                var uploadBtn = null;
                var captureBtn = null;
                var localImageInput = null;
                var nativeCameraInput = null;
                var uploadingBtn = null;
                var uploading = false;

                startup();

                return {
                    openCamera: openCamera,
                    chooseImage: chooseImage,
                    uploadImage: uploadImage,
                };

                function startup() {
                    video = document.getElementById("video");
                    canvas = document.getElementById("canvas");
                    imageShow = document.getElementById("imageShow");
                    imageProcess = document.getElementById("output");
                    skinImage = document.getElementById("skinImage");
                    videoPlayer = document.getElementById("videoPlayer");
                    uploadBtn = document.getElementById("uploadBtn");
                    captureBtn = document.getElementById("captureBtn");
                    uploadingBtn = document.getElementById("uploadingBtn");
                    localImageInput = document.getElementById("localImageInput");
                    nativeCameraInput = document.getElementById("nativeCameraInput");

                    addEventListenerForCamera();
                    addEventListenerForChooseImage();
                }

                function isIOSMoble() {
                    return (
                        [
                            "iPad Simulator",
                            "iPhone Simulator",
                            "iPod Simulator",
                            "iPad",
                            "iPhone",
                            "iPod",
                        ].includes(navigator.platform) ||
                        // iPad on iOS 13 detection
                        (navigator.userAgent.includes("Mac") && "ontouchend" in document)
                    );
                }

                function openCamera() {
                  
                    // Do nothing when video is streaming or image are being uploaded to server
                    if (streaming || uploading) return;

                    clearImageFromPreviousSession();
                    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                    // Support for old browsers which do not support WebRTC
                    const supported = "mediaDevices" in navigator;
                    if (!supported || isMobile) {
                        // toggleVideoPlayer((show = false));
                        // toggleUploadBtn((show = true));
                        // enableUploadBtn();
                        toggleSkinImage((active = true));
                        toggleVideoPlayer((show = false));
                        toggleUploadBtn((show = true));
                        enableUploadBtn();
                        nativeCameraInput.click();

                        return;
                    }

                    navigator.mediaDevices
                        .getUserMedia({
                            video: true,
                            audio: false,
                        })
                        .then(function(stream) {
                            toggleSkinImage((active = true));
                            toggleCaptureBtn((show = true));
                            toggleVideoPlayer((show = true));
                            toggleUploadBtn((show = false));
                            video.srcObject = stream;
                            video.play();
                        })
                        .catch(function(err) {
                            //if there's no compatible camera connected, or the user denied access
                            console.error(err);
                            alert("Không thể kết nối camera");
                        });
                }

                function chooseImage() {
                    // Do nothing when video is streaming or image are being uploaded to server
                    if (streaming || uploading) return;
                    clearImageFromPreviousSession();
                    toggleSkinImage((active = true));
                    toggleVideoPlayer((show = false));
                    toggleUploadBtn((show = true));
                    enableUploadBtn();
                    $(".nav-menu").hide();
                    localImageInput.click();

                }

                function uploadImage() {

            
                    var slugOutput = null;
                    var saleIdOutput = null;
                    var saleId = window.location.pathname.split("/")[2];
                    var slug = window.location.pathname.split("/")[1];
                    if (slug && slug !== "") {
                        slugOutput = slug;
                    };
                    if (saleId && saleId !== "" && saleId !== "soida") {
                        saleIdOutput = saleId;
                    };


                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                    });

                    $(".nav-menu").hide();
                    openPoupupLoading();

                    uploading = true;
                    toggleUploadBtn((show = false));
                    toggleUploadingBtn((show = true));


                    $.ajax({
                        url: api.serve.baser_urlServer + "/" + api.serve.get_api_soida,
                        type: "POST",
                        data: {
                            saleId: saleIdOutput,
                            slug: slugOutput,
                            "isDesktop": "1",
                            "bas64Request": imageProcess.src.replace('data:image/png;base64,', ''),
                        },
                        success: function(secondResponse) {
                            if (secondResponse.is_success) {
                                openPoupupLoading(false);
                                openPopupSuccess();

                                

                                 
                                sessionStorage.setItem("_t", JSON.stringify(secondResponse.data));
                             
                                saveHistory(true, secondResponse.data.data);
                                
                            } else {

                                $(".nav-menu").show();
                                // console.error(err);
                                openPopupSuccess(false);
                                openPoupupLoading(false);

                                alert("Xin vui lòng thử lại");

                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            $(".nav-menu").show();
                            // console.error(err);
                            openPopupSuccess(false);
                            openPoupupLoading(false);

                            alert("Xin vui lòng thử lại");
                        },
                        complete: function() {
                            openPoupupLoading(false);
                            openPopupSuccess(false);
                            uploading = false;
                            toggleUploadBtn((show = true));
                            toggleUploadingBtn((show = false));
                        },
                        timeout: 30000
                    });

                    return;
                    getConfigSkinAI()
                        .then(function(firstResponse) {
                            var config = JSON.parse(firstResponse.responseText);
                            return postImageToSkinAI(config);
                        })
                        .then(function(secondResponse) {
                            openPoupupLoading(false);
                            openPopupSuccess();


                            // Store response before navigating to result page.
                            const encodedData = JSON.stringify(
                                JSON.parse(secondResponse.responseText)
                            );

                            var typeLevel = JSON.parse(secondResponse.responseText);
                            // drawProduction(typeLevel.data.facedata.hintResult);
                            saveHistory(encodedData);
                            sessionStorage.setItem("_t", encodedData);

                        })
                        .catch(function(err) {
                            $(".nav-menu").show();
                            // console.error(err);
                            openPopupSuccess(false);
                            openPoupupLoading(false);

                            alert("Xin vui lòng thử lại");
                        })
                        .finally(function() {
                            openPoupupLoading(false);
                            openPopupSuccess(false);
                            uploading = false;
                            toggleUploadBtn((show = true));
                            toggleUploadingBtn((show = false));

                        });
                }


                function uploadImageNew() {

                    const dataInput = imageProcess.src;

                    imageShow.src = dataInput;
                    return;
                    var jdata = {

                        image_base64: dataInput.substr(dataInput.indexOf("base64,") + 7) + "",
                    };
                    imgCurrentEdit = jdata.image_base64
                    uploading = true;

                    toggleUploadBtn((show = true));
                    toggleUploadingBtn((show = true));
                    var slugOutput = null;
                    var saleIdOutput = null;
                    var saleId = window.location.pathname.split("/")[2];
                    var slug = window.location.pathname.split("/")[1];
                    if (slug && slug !== "") {
                        slugOutput = slug;
                    };
                    if (saleId && saleId !== "" && saleId !== "soida") {
                        saleIdOutput = saleId;
                    };
                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                    });

                    $.ajax({
                        url: api.serve.baser_urlServer + "/" + api.serve.get_api_soida,
                        type: "POST",
                        data: {
                            saleId: saleIdOutput,
                            slug: slugOutput,
                            "isDesktop": "1",
                            "bas64Request": imageProcess.src.replace('data:image/png;base64,', ''),
                        },
                        success: async function(secondResponse) {


                            if (secondResponse.is_success) {

                                disabledUpload = false;
                                


                                ToggleAlert(true, "Soi da thành công", true);

                                setTimeout(() => {

                                    ToggleAlert(false, "", false);

                                }, 1500)
                                sessionStorage.setItem("_t", JSON.stringify(secondResponse.data.data));
                                document.querySelector(".animation_photo").style.display = "none";
                                document.querySelector(".bg_upload_photo").style.display = "none";


                                await saveHistory(true, secondResponse.data.data);
                            } else {
                                disabledUpload = false;



                                $(".btn_loading_uploadImg").hide();
                                $(".nav-menu").show();
                                let statusmodaluploadImgErr = document.querySelector(
                                    ".status-modal-uploadImgErr");
                                if (statusmodaluploadImgErr) {
                                    statusmodaluploadImgErr.style.display = "block";
                                };
                                let btn_error_uploadImg = document.querySelector(
                                    ".btn_error_uploadImg");
                                if (btn_error_uploadImg) {
                                    // btn_error_uploadImg.style.display = "block";
                                };
                                let bg_loading = document.querySelector(
                                    ".bg_upload_photo");
                                if (bg_loading) {
                                    bg_loading.style.display = "none";
                                };
                                let icon_loading = document.querySelector(
                                    ".animation_photo");
                                if (icon_loading) {
                                    icon_loading.style.display = "none";
                                };
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            disabledUpload = false;
                            $(".btn_loading_uploadImg").hide();
                            $(".nav-menu").show();
                            let statusmodaluploadImgErr = document.querySelector(
                                ".status-modal-uploadImgErr");
                            if (statusmodaluploadImgErr) {
                                statusmodaluploadImgErr.style.display = "block";
                            };
                            let btn_error_uploadImg = document.querySelector(
                                ".btn_error_uploadImg");
                            if (btn_error_uploadImg) {
                                // btn_error_uploadImg.style.display = "block";
                            };
                            let bg_loading = document.querySelector(
                                ".bg_upload_photo");
                            if (bg_loading) {
                                bg_loading.style.display = "none";
                            };
                            let icon_loading = document.querySelector(
                                ".animation_photo");
                            if (icon_loading) {
                                icon_loading.style.display = "none";
                            };
                        },
                        timeout: 30000
                    });

                };





                function drawProduction(dataRequest) {


                    if (sessionStorage.getItem("dataCompany") === null) {

                        return;
                    }
                    var company = JSON.parse(sessionStorage.getItem("dataCompany"));

                    var companyId = "";
                    if (company == null) {

                    } else {
                        companyId = company._id;
                    }

                    var bodyRequest = {

                        "company_id": companyId,
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

                function drawSuggessProduct(dataDraw) {

                    var htmlTemplate = "";
                    var dataAll = dataDraw.data;
                    for (let i = 0; i < dataAll.length; i++) {
                        var item = dataAll[i];
                        var itemValue = Object.keys(item);
                        var nameKey = "";
                        if (itemValue.length > 0) {
                            nameKey = itemValue[0];
                        } else {
                            continue;
                        }
                        var valueItem = item[nameKey];
                        htmlTemplate += '<div class="row mx-0 justify-content-center mb-3">\
                    <div class="titleProductRecomend">' + valueItem.title + '\
                    </div>\
                    </div>';
                        htmlTemplate += '<div class="ai-skin__container" style="    padding-left: 10px;\
                      padding-right: 10px;">\
                    <div class="slick-carousel mb-3">';
                        var listProduct = valueItem.list_product;
                        for (let i = 0; i < listProduct.length; i++) {
                            var imagelink = "https://i.postimg.cc/W3WBCxvs/KEM-D-NG-BAN-M-Q10.jpg";
                            var itemProduct = listProduct[i];

                            if (itemProduct.image_link.length > 0) {
                                imagelink = "https://api-soida.applamdep.com/public/image_plugin/" + itemProduct
                                    .image_link;
                            } else {
                                imagelink = itemProduct.image;
                            }


                            htmlTemplate += '<div class="card mr-2">\
                        <img src="' + imagelink + '" alt="">\
                        <a href= "' + itemProduct.linkdetail + '">\
                        <div class="product-title">\
                            <div>\
                                ' + itemProduct.title + ' \
                            </div>\
                        </div>\
                        </a>\
                         </div>';
                        }
                        htmlTemplate += '</div> </div>';

                    }

                    sessionStorage.setItem("htmlTemplate", htmlTemplate)
       

                    // navigateTo("/result");
                    window.location.href = "/result.html";

                }

                function addEventListenerForChooseImage() {
                    function handler(e) {

                        const files = e.target.files;


                        if (files.length) {
                            const reader = new FileReader();

                            reader.onloadend = function() {
                                imageShow.src = reader.result;
                                // imageShow.className = isIOSMoble() ? "rotation-class" : "";
                            };

                            reader.readAsDataURL(files[0]);
                            processLocalImage(files[0]);
                        }
                    }

                    localImageInput.addEventListener("change", handler, false);
                    nativeCameraInput.addEventListener("change", handler, false);
                }

                function addEventListenerForCamera() {
                    video.addEventListener(
                        "canplay",
                        function(ev) {
                            if (!streaming) {
                                height = video.videoHeight / (video.videoWidth / width);

                                if (isNaN(height)) {
                                    height = width / (4 / 3);
                                }
                                video.setAttribute("width", width);
                                video.setAttribute("height", height);
                                canvas.setAttribute("width", width);
                                canvas.setAttribute("height", height);
                                streaming = true;
                            }
                        },
                        false
                    );

                    captureBtn.addEventListener(
                        "click",
                        function(ev) {
                            takePicture();
                            ev.preventDefault();
                        },
                        false
                    );
                }

                function takePicture() {


                    const context = canvas.getContext("2d");

                    if (width && height) {

                        canvas.width = video.width;
                        canvas.height = video.height;
                        context.translate(width, 0);
                        context.scale(-1, 1);
                        context.drawImage(video, 0, 0, width, height);
                        const imgUrl = canvas.toDataURL("image/png");
                        imageShow.setAttribute("src", imgUrl);


                        processCaptureImage(imgUrl);
                    }

                    toggleCaptureBtn((show = false));
                    toggleVideoPlayer((show = false));
                    toggleUploadBtn((show = true));
                    enableUploadBtn();

                    // Attempt to fix not response on Chrome Android after capture photo
                    setTimeout(function() {
                        stopVideo();
                    }, 1000);
                }

                function stopVideo() {
                    const mediaStream = video.srcObject;
                    const tracks = mediaStream.getTracks();

                    streaming = false;
                    tracks.forEach(function(track) {
                        track.stop();
                    });
                }

                function processCaptureImage(imgUrl) {
                    

                 
                       squareCropAndResizeImage(imgUrl, 300)
                        .then(function(outputUrl) {
                            imageProcess.setAttribute("src", outputUrl);

                            setTimeout(() => {
                                        
                                        skinModule.uploadImage();

                             }, 500);
                        })
                        .catch(function(err) {
                            console.error("Error ocurred when cropping image: ", err);
                        });
                }

                function processLocalImage(file) {
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            squareCropAndResizeImage(e.target.result, 300)
                                .then(function(outputUrl) {
                                    imageProcess.setAttribute("src", outputUrl);

                                    setTimeout(() => {
                                        
                                        skinModule.uploadImage();

                                    }, 500);
                                })
                                .catch(function(err) {
                                    console.error("Error ocurred when cropping image: ", err);
                                });
                        };
                        reader.readAsDataURL(file);
                    }
                }

                function clearImageFromPreviousSession() {
                    imageShow.removeAttribute("src");
                    imageProcess.removeAttribute("src");
                }

                function toggleSkinImage() {
                    if (active) {
                        skinImage.classList.remove("ai-skin__skin-image--inactive");
                        skinImage.classList.add("ai-skin__skin-image--active");
                    } else {
                        skinImage.classList.remove("ai-skin__skin-image--active");
                        skinImage.classList.add("ai-skin__skin-image--inactive");
                    }
                }

                function toggleCaptureBtn(show) {
                    if (show) {
                        captureBtn.classList.remove("ai-skin__button--hidden");
                        $(".nav-menu").hide();


                    } else {
                        captureBtn.classList.add("ai-skin__button--hidden");



                    }
                }

                function toggleVideoPlayer(show) {
                    if (show) {
                        videoPlayer.style.display = "block";
                    } else {
                        videoPlayer.style.display = "none";
                    }
                }

                function enableUploadBtn() {
                  
                    uploadBtn.classList.remove("ai-skin__button--disabled");
                  
                  
                   
                }

                function toggleUploadBtn(show) {

                
                    if (show) {
                        uploadBtn.style.display = "block";
                       
                    } else {
                        uploadBtn.style.display = "none";
                    }
                }

                function toggleUploadingBtn(show) {
                    if (show) {
                        $("#displayLoading").show();
                        uploadingBtn.classList.remove("ai-skin__button--hidden");
                    } else {
                        $("#displayLoading").hide();
                        uploadingBtn.classList.add("ai-skin__button--hidden");
                    }
                }

                //==============================================================//
                // Utils
                //==============================================================//
                function makeRequest(url, method, headers, data) {
                    var request = new XMLHttpRequest();

                    return new Promise(function(resolve, reject) {
                        request.onreadystatechange = function() {
                            // Only run when request is completed
                            if (request.readyState != 4) return;

                            if (request.status >= 200 && request.status < 300) {
                                resolve(request);
                            } else {
                                reject({
                                    status: request.status,
                                    statusText: request.statusText,
                                });
                            }
                        };

                        request.onerror = function(error) {
                            reject(error);
                        };

                        request.open(method || "GET", url, true);

                        if (headers) {
                            for (var key in headers) {
                                request.setRequestHeader(key, headers[key]);
                            }
                        }

                        if (data) {
                            request.send(data);
                        } else {
                            request.send();
                        }
                    });
                }

                function squareCropAndResizeImage(url, targetSize = 500) {

                    return squareCenterCropImageV2(url, targetSize)
                }

                function squareCenterCropImageV2(url, width) {
                    return new Promise(function(resolve) {
                        const img = new Image();

                        img.onload = function() {
                            var canvas = document.createElement('canvas'),
                                ctx = canvas.getContext("2d"),
                                oc = document.createElement('canvas'),
                                octx = oc.getContext('2d');

                            canvas.width = width; // destination canvas size
                            canvas.height = canvas.width * img.height / img.width;

                            var cur = {
                                width: Math.floor(img.width * 0.5),
                                height: Math.floor(img.height * 0.5)
                            }

                            oc.width = cur.width;
                            oc.height = cur.height;

                            octx.drawImage(img, 0, 0, cur.width, cur.height);

                            while (cur.width * 0.5 > width) {
                                cur = {
                                    width: Math.floor(cur.width * 0.5),
                                    height: Math.floor(cur.height * 0.5)
                                };
                                octx.drawImage(oc, 0, 0, cur.width * 2, cur.height * 2, 0, 0, cur.width, cur
                                    .height);
                            }

                            ctx.drawImage(oc, 0, 0, cur.width, cur.height, 0, 0, canvas.width, canvas
                                .height);
                            var outputImage = canvas.toDataURL('image/png');
                
                            resolve(outputImage);

                        }
                        img.src = url;



                    });
                }

                function squareCenterCropImage(url) {
                    return new Promise(function(resolve) {
                        const inputImage = new Image();
                        inputImage.onload = function() {
                            const inputWidth = inputImage.naturalWidth;
                            const inputHeight = inputImage.naturalHeight;

                            let croppedWidth = inputWidth;
                            let croppedHeight = inputHeight;

                            const croppedX = (croppedWidth - inputWidth) * 0.5;
                            const croppedY = (croppedHeight - inputHeight) * 0.5;

                            // create a canvas that will present the output image
                            const canvas = document.createElement("canvas");
                            canvas.width = croppedWidth;
                            canvas.height = croppedHeight;

                            // draw our image at position 0, 0 on the canvas
                            const context = canvas.getContext("2d");

                            // context.drawImage(inputImage, croppedX, croppedY);
                            context.drawImage(inputImage, 0, 0);
                            resolve(canvas.toDataURL("image/png"));
                        };

                        inputImage.src = url;
                    });
                }

                function resizeImage(url, targetSize = 500) {
                    return new Promise(function(resolve) {
                        const inputImage = new Image();
                        inputImage.onload = function() {
                            var canvas = document.createElement("canvas");
                            canvas.width = targetSize;
                            canvas.height = targetSize;
                            var context = canvas.getContext("2d");

                            if (isIOSMoble()) {
                                context.save();
                                context.scale(-1, 1);
                                context.drawImage(
                                    inputImage, -targetSize,
                                    0,
                                    targetSize,
                                    targetSize
                                );
                                context.restore();
                            } else {
                                context.drawImage(inputImage, 0, 0, targetSize, targetSize);
                            }

                            resolve(canvas.toDataURL("image/png"));
                        };

                        inputImage.src = url;
                    });
                }
            })();
        </script>

    </div>
    <script>
        var dataCompany = null;
    </script>
    <script>
        function getBaseUrl() {
            // return "https://ungdungsoida.netlify.app/";
            return "./";
        }
    </script>
    <script>
        function resolveImageSource() {
            var baseUrl = getBaseUrl();
            var images = document.querySelectorAll("img[data-src]");
            for (var i = 0; i < images.length; i++) {
                var img = images[i];
                img.src = baseUrl + img.getAttribute("data-src");
            }
        }
    </script>
    <script>
        function pathToRegex(path) {
            return new RegExp(
                "^" +
                path
                .replace(new RegExp("\/", "g"), "\\/")
                .replace(new RegExp(":\w+", "g"), "(.+)") +
                "$"
            );
        }

        function router() {
            const routes = [
                //     {
                //     path: "/",
                //     url: "contain/skin.html",
                // }, {
                //     path: "/welcome",
                //     url: "contain/welcome.html",
                // }, {
                //     path: "/skin",
                //     url: "contain/skin.html",
                // }, {
                //     path: "/result",
                //     url: "contain/result.html",
                // },
            ];


            const potentialMatches = routes.map((route) => {
                return {
                    route,
                    result: location.pathname.match(pathToRegex(route.path)),
                };
            });

            var match = potentialMatches.find((p) => p.result !== null);

            if (!match) {
                match = {
                    route: routes[0],
                    result: [location.pathname],
                };
            } else {

            }

            $(function() {
                $("#b-placeholder").load(getBaseUrl() + match.route.url, function() {
                    resolveImageSource();
                });
            });
        }



        window.addEventListener("popstate", router);

        document.addEventListener("DOMContentLoaded", function() {
            //     
            //     sessionStorage.setItem('dataCompany', JSON.stringify(dataCompany));
            //
        });
    </script>

    <script>
        function opencamera() {

            $("#takeFile").click();

        }

        function choseImage() {
          
            setTimeout(() => {
                $("#choseImageFile").click();
            }, 1000);

          


        }

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

        function haldleOpenCamera() {
            opencamera();
            return;
            // hideTips();
            setTimeout(() => {
                opencamera();
            }, 1000);
     
        }

       

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
    <script type="text/javascript" src="/js/contant.js"></script>
    <script type="text/javascript" src="/js/form.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/templateForm.js"></script>

    <script type="text/javascript" src="/js/login.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div><iframe
        id="nr-ext-rsicon"
        style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe>
@endsection

@if (1==2)
   

        @if ($agent->isMobile() )
        <div class="bg-light" style="position: fixed;bottom: 0;width: 100%;z-index: 100;">
            <div class="container text-center">
                
                <p style ="color:#ffffff !important; font-weight: bold !important;" class="text-muted mb-0 py-2">
                    <a href= "javascript:void(0)"  onclick="openFormRegister()" ><img style= "height: 50px" src ="/phoneNew2.png"> </a></p>
            </div>
        </div>
        @else
        <div class="bg-light" style="position: fixed;bottom: 0;width: 100%;z-index: 100;">
            <div class="container text-center">
                
                <p style ="color:#ffffff !important; font-weight: bold !important;" class="text-muted mb-0 py-2">
                    <a href="javascript:void(0)"  onclick="openFormRegister()" ><img style= "height: 50px" src ="/desktopNew2.png"> </a></p>
            </div>
        </div>
        @endif


@endif


<script>

function openFormRegister() {
    ToggleDisplayFormFollow('.status-modal-follow',true);
    
}



const timeoutDisplayMessage = setTimeout(ShowZalo, 5000);

function ShowZalo() {
    
    return;
    document.getElementById("messenger").style.display = "block";
  document.getElementById("zaloMessage").style.display = "block";
}

</script>

<script>
    var timeGet = new Date().getTime();
function OpenAction ( connectionType)
{   
    addClickZalo2(connectionType);
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
