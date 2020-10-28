<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="stylecss1.css">

    <script src="http://kit.fontawesome.com/b99e675b6e.js"></script>
    <script href="script"></script>

    <title>student Login</title>
</head>
<body>
        <style>
            h2 {text-align: center;
             
            }
            
                body {font-family: Arial, Helvetica, sans-serif;
                    text-align: center;
}
                * {box-sizing: border-box;}
                
                /* Full-width input fields */
                input[type=text], input[type=password] {
                  width: 100%;
                  padding: 15px;
                  margin: 5px 0 22px 0;
                  display: inline-block;
                  border: none;
                  background: #f1f1f1;
                  text-align: center;

                }
                
                /* Add a background color when the inputs get focus */
                input[type=text]:focus, input[type=password]:focus {
                  background-color: #ddd;
                  outline: none;
                  text-align: center;

                }
                
                /* Set a style for all buttons */
                button {
                  background-color:purple;
                  color: white;
                  padding: 14px 20px;
                  margin: 8px 0;
                  border: none;
                  cursor: pointer;
                  width: 100%;
                  opacity: 0.9;
                  text-align: center;

                }
                
                button:hover {
                  opacity:1;
                }
                
                /* Extra styles for the cancel button */
                .cancelbtn {
                  padding: 14px 20px;
                  background-color: #a74a8b;
                }
                
                /* Float cancel and signup buttons and add an equal width */
                .cancelbtn, .signupbtn {
                  float: left;
                  width: 50%;
                }
                
                /* Add padding to container elements */
                .container {
                  padding: 16px;
                }
                
                /* The Modal (background) */
                .modal {
                  display: block; /* Hidden by default */
                  position: fixed; /* Stay in place */
                  z-index: 1; /* Sit on top */
                  left: 0;
                  top: 0;
                  width: 100%; /* Full width */
                  height: 100%; /* Full height */
                  overflow: auto; /* Enable scroll if needed */
                  background-color: #474e5d;
                  padding-top: 50px;
                }
                
                /* Modal Content/Box */
                .modal-content {
                  background-color: #fefefe;
                  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                  border: 1px solid rgb(205, 142, 207);
                  width: 80%; /* Could be more or less, depending on screen size */
                }
                
                /* Style the horizontal ruler */
                hr {
                  border: 1px solid #f1f1f1;
                  margin-bottom: 25px;
                }
                 
                /* The Close Button (x) */
                .close {
                  position: absolute;
                  right: 35px;
                  top: 15px;
                  font-size: 40px;
                  font-weight: bold;
                  color: #f1f1f1;
                }
                
                .close:hover,
                .close:focus {
                  color: lightgray;
                  cursor: pointer;
                }
                
                /* Clear floats */
                .clearfix::after {
                  content: "";
                  clear: both;
                  display: table;
                }
                
                /* Change styles for cancel button and signup button on extra small screens */
                @media screen and (max-width: 300px) {
                  .cancelbtn, .signupbtn {
                     width: 100%;
                  }
                }
                </style>

        <!-- <h2>Online Learning Platform| User Student Login Form</h2>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login In</button> -->
        
        <div id="id01" class="modal">
          <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
          <form class="modal-content" method="post" action="<?php echo base_url().'smart_build/index.php/login'?>">
            <div class="container">
              <h1>Login In</h1>
              <hr>
              <label for="email"><b>Email</b></label>
              <input type="text" name="email" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>" required>
        
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" 
              value="<?php
                if(isset($_COOKIE["psw"])){
                  echo $_COOKIE["psw"];
                }

                ?>"
              required>
        
             
              
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
        
        
              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Login</button>
              </div>
            </div>
          </form>
        </div>
        
                
                </body>
</body>
</html>
