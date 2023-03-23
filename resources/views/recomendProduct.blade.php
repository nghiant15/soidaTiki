@extends('layout')

@section('header')
<title>Soi da </title>
      <meta name="theme-color" content="#d47690">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no" />
      <link rel="stylesheet" href="/css/soidanew.css">
      <link rel="stylesheet" href="/css/reponsive.css">
      <link rel="stylesheet" href="/css/sanphamgoiy.css">
      <link rel="stylesheet" href="/css/reward.css">
      <script src="/js/form.js"></script>
      <script src="/js/contant.js"></script>
      <script src="/js/main.js"></script>
      <script src="/js/result.js"></script>
      <script src="/js/login.js"></script>
      <script src="/js/templateForm.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <!-- ASSETS CDN SLICK -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
@section('contentpage')
<script> 
    
  var slugGlobal = {!! json_encode($slug) !!};

  var companyId = {!! json_encode($companyId) !!};

</script>
<div class="recomend-title-box"> 

<div class="centerText"> 
<p>GỢI Ý TỪ CHUYÊN GIA</p>
<img src="/images/start-direct.png"> 

</div>
<div  class="title-strong"> 
<p> GỢI Ý CHĂM SÓC DA CHO BẠN ĐƯỢC CHUYÊN GIA DA LIỄU ĐỀ XUẤT</p>
</div>
</div>

{{-- <div class="box-analysis"> 
<img src="/images/33.png"> 
<img src="/images/33.png">
<div class="title-box"> 
Báo cáo phân tích da của bạn 
</div>
<strong> CẤP ĐỘ LÀN DA   </strong>
<div class="line-break"></div>
<a class="level"> Cấp độ 2</a>
<p> Các vết mụn không viêm, các vùng sẩn, là những mụn đỏ rắn, nhỏ trên bề mặt da.</p>

<div class="bold-text-report"> Các yếu tố ảnh hưởng </div>
<div class="line-break"></div>
<div class="btn-row"> 
<span class="btn-impact"> Mụn đậu đen </span>
<span class="btn-impact"> Mụn viên </span>
</div>
<p class="report-text">
  Các chuyên gia của chúng tôi khuyên bạn nên tập trung vào hai dấu hiệu lão hóa da chính của bạn.

</p>
<div class="bottom-popup"> 

  <div class="column-1">
      <span>LOẠI DA </span>
      <span class="line"> </span>
      <span>Da đầu </span>
  </div>


  <div class="column-1 right-text">
    <span>TUỔI DA </span>
    <span class="line"> </span>
    <span>24 </span>
</div>
</div>

</div> --}}
{{-- <div class="box-recommed-center" style="height:77px">
<p>Với thói quen chăm sóc da phù hợp và thói quen lành mạnh, <br> 
  bạn có thể giúp làn da của mình khoẻ mạnh hơn </p>
</div> --}}
{{-- <div class="title-section-recomend">
LỊCH TRÌNH BUỔI SÁNG CỦA BẠN1
</div> --}}
<div id = "list-product">
{{-- <div class="title-category"> 
   
  <span> Hỗ trợ Giảm Lão Hóa Da </span>

</div>
<div class="product-list">
  <div class="product-item1">

      <div class="image-avatar"> 
        <img src="/images/18.png"> 
      </div>
      <div class="content-product">
          <div class="brand">NORMADERM </div>
          <div class="brand-description">Phytosolution - Gel làm sạch chuyên sâu </div>
      </div>
   
 </div>
 
</div> --}}



</div>

  




{{-- <div class="nav-bar-product-item">
<div class="button-control">
      <img src ="/images/arrowback.png" > 
</div> 

<div class="nav-button-slide">
    <span class="active"> </span>
    <span class="active"> </span>
    <span > </span> 
    <span > </span>
</div> 
<div class="button-control right-text">
<img src ="/images/arrorwnext.png" > 
</div>

</div>   --}}






<div class="box-class-center" style ="height:77px">
<p>Hãy nhớ đặt lịch thăm khám thường xuyên với bác sĩ da liễu của bạn 
  để được kiểm tra da toàn diện
   </p>
</div>







@if( $slug != 'bibabo' )
<div class="nav-button-reward">

<a href="javasript:void(0)" > <img src="/images/arrow.png"> THAM GIA ĐIỀN FORM NHẬN QUÀ HẤP DẤN </a> 
</div>

<div class="form-input">
           
  <form id="formReward">
    <div class="form-row">
            <div class="col">

              <div class="form-group">
                <label for="exampleFormControlInput1">Họ và tên  <span>(*)</span></label>
                <input type="text" class="form-control" id="idFullName" placeholder="Nhập họ và tên">
                <div id ="fullNameError" class="errorReward">
                 Họ và tên không được bỏ trống?.
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1">Số điện thoại <span>(*)</span> </label>
                <input type="text" class="form-control" id="idphoneNumber" placeholder="Nhập số điện liên lạc">

                <div id = "phoneError" class="errorReward">
                  Số điện thoại không được bỏ trống.
                </div>
              </div>
            </div>
    </div>

    <div class="form-group">
       <label>Địa chỉ email</label>
       <input type="email" class="form-control" id ="email"  placeholder="Địa chỉ email">

     </div>


  <div class="submit-form">
    <a id ="btnRewardClick" href="javascript:void(0)" onclick="submitreward()"> <img src="/images/arrow.png" > Nhận quà </a> 

    <a id="btnrewardLoading"  type="button" disabled="">
      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
       Đang gửi yêu cầu
    </a>
  </div>

  
    

  </form>


</div>

<div class="form-result-success"> 
    <h2> CHÚNG TÔI VỪA GHI NHẬN THÔNG TIN CỦA BẠN</h2>
    <p>Sẽ liên hệ lại với bạn trong thời gian sớm nhất </p>

</div>
@endif








{{-- <div class="button-nav-page-container">

  <div class="button-nav-page">
    <button> Quay lại </button>


  <button> Trang chủ </button>
  </div>
  
</div> --}}

{{-- <div class="nav-button-row btnRecomend">
<a href="javascript:void(0)"> <img src="/images/arrow.png"> Lưu kết quả về máy </a> 
<a href="javascript:void(0)"> <img src="/images/arrow.png"> Liên hệ tư vấn </a> 
</div> --}}

<script> 

var companyIdGlobal = {!! json_encode($companyId) !!};
$(document).ready(function(){ 


  var resultCheck = sessionStorage.getItem("_t");
            if(resultCheck ==null)
            {
                
                window.location.href ="/";

            }
            else 
            {
                 objectReponse = JSON.parse(resultCheck);
            }
            
        
            
        

            drawProduction(objectReponse.data.facedata.hintResult);

            

}) 

</script>
@endsection