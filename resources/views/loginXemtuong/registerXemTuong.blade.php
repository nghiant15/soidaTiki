
<style>
    .content-text {
        text-align: justify;
        font-size: 1rem;
    }
    .content-text .info{
        margin-left: 15px;
    }
    .content-text .bold1{
       font-weight: bold;
    }
</style>

<div class="status-modal-account">
    
    <div class="modal-information">
        <div class="form-information-user" id="formAccountReq">
            <div class="status-loader-22">
                <div class="border-loading-spin">
                    <svg class="loading-spin" viewBox="0 0 100 100">
                        <circle class="loading-draw" cx="50" cy="50" r="45"></circle>
                    </svg>
                </div>
            </div>
            <div class="position-close2" onclick="changeFormLogin()">
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

            <div class="status__isLogin">
                <div class="">
                    <div class="flex-a-center">
                        <div class="title_nav">
                            <h6 id ="titleLogin1">
                                Đăng ký Xem tướng online
                                <br>
                                gói cơ bản là 99.000 đồng
                            </h6>
                        </div>
                    </div>

                    <form class="formReward" id="formLogin" style="overflow: hidden">
                        <div class="form-group">
                            <input name="fullName" type="text" class="my-form-control fullName" id="nameLogin"
                                placeholder="Tên của bạn" />

                            <div class="errorMesssage" id="fullNameerrorMesssage">
                                Không dược bỏ trống
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="toggleNumber">
                                <input name="phoneNumber" type="text" class="my-form-control userName" id="phoneNumber"
                                    placeholder="Số điện thoại của bạn " />
                                <div class="errorMesssage" id="phoneNumbererrorMesssage">
                                    Không dược bỏ trống
                                </div>
                            </div>
                        </div>

                        <div class ="content-text">
                            <p style="line-height: 1.3; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size: 13pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">Ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ trong v&ograve;ng 24h kể từ khi bạn&nbsp; đăng k&yacute; &amp; thanh to&aacute;n:</span></p>
                            <p style="line-height: 1.3; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size: 13pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">Qua t&agrave;i khoản&nbsp;ng&acirc;n h&agrave;ng:&nbsp;&nbsp;</span></p>
                            <ul>
                            <li style="line-height: 1.2; text-align: justify;"><span style="font-size: 13pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">0071000881282</span></li>
                            <li style="line-height: 1.2; text-align: justify;"><span style="font-size: 13pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">Vietcombank&nbsp;</span></li>
                            <li style="line-height: 1.2; text-align: justify;"><span style="font-size: 13pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0);">L&ecirc; Thị Tin</span></li>
                            </ul>
                            <p><span style="color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 13pt;"> Qua tài khoản Momo: 0906606986</span></p>
                            <p style="line-height: 1.3; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size: 13pt;"><span style="font-family: Arial, sans-serif; color: rgb(0, 0, 0);">Nội dung chuyển khoản: <strong>[ t&ecirc;n ] [ số dien thoại] đăng k&yacute; xem tướng online</strong></span></span></p>
                            <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;">&nbsp;</p>
                            <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: justify;"><span style="font-size: 13pt;"><strong><span style="font-family: Arial, sans-serif; color: rgb(0, 0, 0);">Ghi ch&uacute;: nội dung xem tướng online chỉ mang t&iacute;nh chất giải tr&iacute;</span></strong></span></p>
                            <p style="text-align: justify;">&nbsp;</p>
                        </div>
                       
                       
                        <div class="mt-4">
                            <button type="button" id="roleUserButton" onclick="login()" class="btn_form btn-shadow">
                                <p>
                                    Đăng nhập/Đăng ký
                                <p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="status__isRegister">
                <div class="flex-a-center">
                    <div class="title_nav">
                        <h6>Đăng ký</h6>
                        <div class="position-close" onclick="changeFormLogin()">
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
                    </div>
                </div>

                <div class="form-login-account">
                    <div class="form-input" style="overflow: hidden">
                        <form id="formRegister" class="formReward" style="overflow: hidden">
                            <div class="form-group">
                                <input type="text" class="my-form-control userName" id="fullNameRegister"
                                    placeholder="Tên của bạn" name="name" />
                                <div id="fullNameRegisterError" class="errorReward">
                                    Tên không hợp lệ
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="my-form-control phoneNumber" id="phoneNumberRegister"
                                    placeholder="Số điện thoại của bạn" required />

                                <div id="phoneNumberRegisterError" class="errorReward">
                                    Số điện thoại không được bỏ trống.
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="button" class="btn_form btn-shadow" onclick="register()">
                                    <p>Đăng ký tài khoản</p>
                                </button>
                            </div>

                            <hr class="" />

                            <div class="flex-center mt-2">
                                <div class="not-account">
                                    <div class="flex">
                                        <p>Bạn đã có tài khoản?&nbsp;</p>
                                        <span id="active__form-login">Đăng nhập</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    function changeFormLogin(){
        $('.status-modal-account').hide();
    }

 
</script>