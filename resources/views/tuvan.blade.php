
<style>
    /* bannerTuVan.jpg */
    .form1{
       
    }
    .tuvanform1 {
     
        border-radius: 25px;

        width: 380px !important;
        background-image: url("/bannerTuVan.png");
        background-position: center;
    background-size: 100% 100%;

    }

    .title_nav-tuvan {
        text-align: center;
        


    }
    .bottom-button img {
        width: 30px;
    }
    .body-tu-van {

        margin-top: 50px;
    }
   
    .title_nav-tuvan  

    {
       
   }
   .title_nav-tuvan p {
    font-size: 29.9px;
    color:  rgb(252, 22, 35);


    -webkit-text-stroke: 0.7px  rgb(252, 22, 35);
    font-weight: bold;
   }
   .bottom-button {
    width: 100%;
    text-align: center;
    font-size: 13px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
   }
   .bottom-button a:hover {
    opacity: 0.7;
   }
   .bottom-button a {


    height: 30px;
    display: flex;
    background-color: #9946e8;
    border-radius: 10px;
    color: #ffffff;
    font-size: 13px;

   }
   .zalobac {
    background-color: #1272e8 !important;
   }
   .bottom-button a span {
     color: #ffffff;
     text-align: center;
     margin: auto;
   }
   .des-introduction{
    text-align: center;
    color:  rgb(2, 52, 157);
    -webkit-text-stroke: 0.01px  rgb(241, 163, 173);
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
   }
   .des-title{
    text-align: center;
    color:  rgb(2, 52, 157);
    -webkit-text-stroke: 0.6px   rgb(2, 52, 157);
    font-size:27px;
    font-weight: bold;
    
   }
   .des-price{
    text-align: center;
    color:  rgb(247, 27, 41);
    font-size:27px;
    font-weight: bold;
    -webkit-text-stroke: 0.4px   rgb(247, 27, 41);
    margin-bottom: 15px;
   }
   .des-register{
    margin: ạuto;
    background-color:  rgb(252, 0, 22);
    border-radius: 10px;
    width: 100%;
    text-align: center;
    color:  rgb(250,251,254);
    font-size:24px;
    font-weight: bold;
   }
   .des-register a {
    width: max-content;
   
    -webkit-text-stroke: 0.2px  rgb(250,251,254);
    margin: auto;

   }
   .des-register a {
    width: max-content;
   
    padding-left: 10px;
    padding-right: 10px;
    -webkit-text-stroke: 0.5px  rgb(250,251,254);
    margin: auto;


   }
   .des-register a:hover {
    text-decoration: none;
    color:  rgb(250,251,254 )!important;
    opacity: 0.7;

   }
</style>
<div class="status-modal-account tuvanform " >
    
    <div class="modal-information form1 ">
        <div class="form-information-user tuvanform1" id="formTuVan" style="
        padding: 8px !important;
    ">
            <div class="status-loader-22">
                <div class="border-loading-spin">
                    <svg class="loading-spin" viewBox="0 0 100 100">
                        <circle class="loading-draw" cx="50" cy="50" r="45"></circle>
                    </svg>
                </div>
            </div>
            <div class="position-close2" onclick="changeFormTuvan()">
                <svg viewBox="0 0 24 24" size="24" class="sc-11csm01-0 fivNSm">
                    <path
                        d="M14.8284 12L19.4142 16.5858C20.1953 17.3668 20.1953 18.6332 19.4142 19.4142
                            C18.6332 20.1953 17.3668 20.1953 16.5858 19.4142L12 14.8284L7.41421 19.4142
                            C6.63317 20.1953 5.36684 20.1953 4.58579 19.4142C3.80474 18.6332 3.80474 17.3668 4.58579 16.5858L9.17157 12
                            L4.58579 7.41421C3.80474 6.63317 3.80474 5.36684 4.58579 4.58579
                            C5.36684 3.80474 6.63317 3.80474 7.41421 4.58579L12 9.17157L16.5858 4.58579
                            C17.3668 3.80474 18.6332 3.80474 19.4142 4.58579C20.1953 5.36684 20.1953 6.63317 19.4142 7.41421L14.8284 12Z"
                        transform=""></path>
                </svg>
            </div>

            <div class="status__isLogin body-tu-van">
                <div class="">
                    <div class="title_nav-tuvan">
                        <p>Đăng ký </p>
                        <p>Nhận Miễn Phí Minisize Xịn</p>
                   </div>
                  
                    <div class ="des-introduction">
                            Số lượng có hạn, đăng ký khi bạn thật cần nhé!
                            (Không gồm ship & đóng gói)
                    </div>
                    <div class ="des-title">
                       La Roche-Posay Effaclar (50ml)
                     </div>
                     <div class ="des-price">
                        Giá niêm yết 210.000 đ
                      </div>

                     <div class="des-register">
                          <a onclick ="openRegister('minisize')"> Đăng ký nhận miễn  Minisize xịn</a>
                    </div>
                   {{-- <div class ="bottom-button">
                        <a class ="zalobac" onclick="OpenAction('zalo')" >
                             <img src = "/zaloClick.jpg">  
                             <span> Tư vấn chăm sóc da Zalo </span>   
                        </a>
                        
                    </div> --}}

                   

                   
                </div>
            </div>

        
        </div>
    </div>
</div>






<script>
    function changeFormTuvan(){
        $('.status-modal-account').hide();
    }
</script>