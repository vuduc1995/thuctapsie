<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mini Facebook</title>
        <link rel="stylesheet" href="css_js/style.css" type="text/css" />
        <script  src="js/login.js"></script>
        <script type="text/javascript" src="js/html5.js"></script>
        <style type="text/css">
            #register{
                width: 500px;
                margin: 0 auto;
            }
            #register h1{
                font-size: 2em; 
                padding: 20px 0; color: #0B3B7F;
            }
            form{font: 1.2em/1.5em tahoma, verdana, arial, sans-serif;}
            form p{min-height: 30px;}
            form label{
                width: 150px;
                display: block; float: left;
            }
            form input{
                width: 200px;
                height: 22px;
                border: 1px solid #999; background: none;
            }
            form input[type=submit]{
                width: 70px;
                height: 30px;
                cursor: pointer
            }
            form input[type=submit]:hover{background: #9CD8C0;}
            form #bottom{text-indent: -9999px;}
            form span{
                display: block;
                color: red;
                font-size: 0.7em;
                padding-left: 150px;
            }
        </style>
    </head>
    <script type="text/javascript">
        window.onload = function () {
            var inputs = document.forms['register'].getElementsByTagName('input');
            var run_onchange = false;
            function valid() {
                var errors = false;
                var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
                for (var i = 0; i < inputs.length; i++) {
                    var value = inputs[i].value;
                    var id = inputs[i].getAttribute('id');

                    // Tạo phần tử span lưu thông tin lỗi
                    var span = document.createElement('span');
                    // Nếu span đã tồn tại thì remove
                    var p = inputs[i].parentNode;
                    if (p.lastChild.nodeName == 'SPAN') {
                        p.removeChild(p.lastChild);
                    }

                    // Kiểm tra rỗng
                    if (value == '') {
                        span.innerHTML = 'Thông tin được yêu cầu';
                    } else {
                        // Kiểm tra các trường hợp khác
                        if (id == 'emailR') {
                            if (reg_mail.test(value) == false) {
                                span.innerHTML = 'Email không hợp lệ (ví dụ: abc@gmail.com)';
                            }
                            var email = value;
                        }
                        if (id == 'confirm_emailR' && value != email) {
                            span.innerHTML = 'Email nhập lại chưa đúng';
                        }
                        // Kiểm tra password
                        if (id == 'passwordR') {
                            if (value.length < 6) {
                                span.innerHTML = 'Password phải từ 6 ký tự';
                            }
                            var pass = value;
                        }
                        // Kiểm tra password nhập lại
                        if (id == 'confirm_passR' && value != pass) {
                            span.innerHTML = 'Password nhập lại chưa đúng';
                        }
                    }

                    // Nếu có lỗi thì span vào hồ sơ, chạy onchange, submit return false, highlight border
                    if (span.innerHTML != '') {
                        inputs[i].parentNode.appendChild(span);
                        errors = true;
                        run_onchange = true;
                        inputs[i].style.border = '1px solid #c6807b';
                        inputs[i].style.background = '#fffcf9';
                    }
                }// end for

                if (errors == false) {
                    //alert('Đăng ký thành công');
//                    alert(1);
                    //var ajaxRequest1 = ajaxRequest;
                    var url = "UserRegister?";
                    var email = document.getElementById("emailR").value;
                    var pass = document.getElementById("passwordR").value;
                    var firstname = document.getElementById("usernameR1").value;
                    var lastname = document.getElementById("usernameR2").value;
                    var fullname = firstname + " " + lastname;
                    url += "email=" + email + "&pass=" + pass + "&fullname=" + fullname;
                    ajaxRequest.onreadystatechange = function () {
                        if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
                            var text = ajaxRequest.responseText.trim();
                            //alert(text);
                            if (text == "home.html") {
                                location.replace("http://localhost:8080/Facebook/home.html");
                            } else {
                                alert("Email already exist");
                            }
                        } else{
                            location.replace("http://localhost:8080/Facebook/home.html");
                        }

                    };


                    ajaxRequest.open("POST", url, false);
                    ajaxRequest.send(null);



                }
                return !errors;
            }// end valid()

            // Chay ham kiem tra
            var register = document.getElementById('submit');
            register.onclick = function () {
                return valid();
            };

            // Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()
            for (var i = 0; i < inputs.length; i++) {
                var id = inputs[i].getAttribute('id');
                inputs[i].onchange = function () {
                    if (run_onchange == true) {
                        this.style.border = '1px solid #999';
                        this.style.background = '#fff';
                        valid();
                    }
                };
            }// end for
        }// end onload
    </script>
    <body class="login">
        <!-- header starts here -->
        <div id="facebook-Bar">
            <div id="facebook-Frame">
                <div id="logo"> <a href="/">MiniFacebook</a> </div> 


                <div id="header-main-right">
                    <div id="header-main-right-nav">
                        <form method="post" action="" id="login_form" name="login_form">
                            <table border="0" style="border:none">
                                <tr>
                                    <td ><input type="text" tabindex="1"  id="email" placeholder="Email or Phone" name="email" class="inputtext radius1" value=""></td>
                                    <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td>
                                    <td ><input type="submit" class="fbbutton" name="login" value="Login" onclick="Log()" /></td>
                                </tr>
                                <tr>
                                    <td><label><input id="persist_box" type="checkbox" name="persistent" value="1" checked="1" style="margin-left: -67px;"/>
                                            <span style="margin-top: -22px;margin-left: -99px;color:#ccc;font-size: 10px;">Keep me logged in</span></label>
                                    </td>
                                    <td><label><a href="" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- header ends here -->

        <div class="loginbox radius">
            <h2 style="color:#141823; text-align:center;">Welcome to Facebook</h2>
            <div class="loginboxinner radius">
                <div class="loginheader">
                    <h4 class="title">Connect with friends and the world around you.</h4>
                </div><!--loginheader-->

                <div class="loginform">

                    <form method="post" action="#" name="register">
                        <p>
                            <input type="text" id="usernameR1" name="username" placeholder="First Name" value="" class="radius mini" /> 
                            <input type="text" id="usernameR2" name="username" placeholder="Last Name" value="" class="radius mini" />
                        </p>
                        <p>
                            <input type="text" id="emailR" name="username" placeholder="Your Email" value="" class="radius" />
                        </p>
                        <p>
                            <input type="text" id="confirm_emailR" name="password" placeholder="Re-enter Email" class="radius" />
                        </p>
                        <p>
                            <input type="password" id="passwordR" name="password" placeholder="New Password" class="radius" />
                        </p>
                        <p>
                            <input type="password" id="confirm_passR" name="password" placeholder="Re-enter Password" class="radius" />
                        </p>
                        <p>
                            <button class="radius title" name="client_login" id="submit">Sign Up for Facebook</button>
                        </p>
                    </form>
                </div><!--loginform-->
            </div><!--loginboxinner-->
        </div><!--loginbox-->


    </body>

</html>
