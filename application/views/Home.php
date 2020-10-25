<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-wc.css">

    <title>UQ SmartEd</title>
</head>

<body>
<div class="content">

    <!--This is the content for start page-->

    <div class="form sign-in">
        <h2>UQ SmartEd Analysis</h2>
        <div class="intro">
            <div class="MenuPanel Wel">
                <div class="MenuTitle">Welcome</div>
                <div class="MenuContent">
                    <p class="hide-content">

                        <!--ToDo add more content-->
                        asdasdasdasdasdasdasdasdasd
                        asdasdasdadasdasdkjandkjasdn
                        asdasdasdasdasd
                        asdasdasdasdasdansdbajksdnas
                        asdjknajkxnzkjcnkalsd
                        <br>
                        asdasjdasjkdkasdjsaldkasdlk
                        akjzxnckjzncklzxnclkzxcmnzklxc

                    </p>
                </div>
            </div>
            <div class="MenuPanel">
                <div class="MenuTitle">What's SmartEd</div>
                <div class="MenuContent">
                    <p class="hide-content">

                        ToDo: add more content

                    </p>

                </div>
            </div>
            <div class="MenuPanel">
                <div class="MenuTitle">What's the benefit it brings?</div>
                <div class="MenuContent">
                    <p class="hide-content">

                        ToDo: add more content

                    </p>

                </div>
            </div>
            <div class="MenuPanel">
                <div class="MenuTitle">About us</div>
                <div class="MenuContent">
                    <p class="hide-content">

                        ToDo: add more content

                    </p>

                </div>
            </div>
        </div>
    </div>

    <!--This is login bar-->

    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h2>Sign in here</h2>
                <p>press the button below</p>
            </div>
            <div class="img__text m--in">
                <h2>Home</h2>
                <p>press the button below to go back</p>
            </div>
            <div class="img__btn">
                <span class="m--up"><</span>
                <span class="m--in">></span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Welcome back!</h2>
            <label>
                <span>Username</span>
                <input type="text" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgot-pass"><a href="javascript:">forget password?</a></p>
            <button type="button" class="submit">Login</button>
            <button type="button" class="fb-btn">Login as <span>Lecturer</span></button>
        </div>
    </div>
</div>
<script>

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>

<script type="text/javascript">
    document.querySelector('.img__btn').addEventListener('click', function() {
    document.querySelector('.content').classList.toggle('s--signup')
    })

    $(document).ready(function(){
        $(".MenuPanel").each(function(){
            $(this).children(".MenuContent").hide();
        });

        $(".Wel").children(".MenuContent").show();

        $(".MenuTitle").each(function(){
            $(this).click(function(){

                if($(this).parents(".MenuPanel").children(".MenuContent").css("display") != "none"){
                    $(this).parents(".MenuPanel").children(".MenuContent").slideUp();
                }else{
                    $(this).parents(".MenuPanel").children(".MenuContent").slideDown();
                }
            });

        });

    });
</script>
</body>

</html>