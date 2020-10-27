$(document).ready(function(){
    console.log('jq loaded successed.');
    login();
});

function login(){
//      login button clicked TODO 登录接口
    $(".submit").click(function(){
        location.href = "./Student-Dashboard.html";
    });

//      lecturer login clicked 临时跳转至学生界面 TODO 老师登录接口
    $(".fb-btn").click(function(){
        location.href = "http://localhost/smart_build/index.php/dashboard";
    });
}
