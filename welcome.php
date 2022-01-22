<?php
session_start();
if(!isset($_SESSION['uid'])){
    header("location:index.php");
}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="1.jpg" type="image/x-icon">

  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="menu">
          <h3 class="logo">KAKASHI</span></h3>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">
          <header>
            <div class="overlay">
              <div class="inner">
              
              <div class="input">

            <form action="" onsubmit="return Validate(this);">
            <input type="text" class="form-control"placeholder="Enter Your Phone Number" pattern="\d{10}" title="Please enter exactly 10 digits" style="margin:20%;" id="phone" name="phone" onkeypress="phoneno()" maxlength="10">
            <input type="file"  name="my file">
            <input type="text" id="txtNumeric"    placeholder="only text here"/>
           
        <input type="submit"    value="Submit">
        
        </form>
        </div>         
              </div>
            </div>
          </header>
        </div>

        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>

      <div class="links">
        <ul>
          <li>
            <a href="#" style="--i: 0.05s;">Home</a>
          </li>
          <li>
            <a href="#" style="--i: 0.1s;">Services</a>
          </li>
          <li>
            <a href="#" style="--i: 0.15s;">Portfolio</a>
          </li>
          <li>
            <a href="logout.php" style="--i: 0.2s;">Logout</a>
          </li>
          <li>
            <a href="#" style="--i: 0.25s;">About</a>
          </li>
          <li>
            <a href="#" style="--i: 0.3s;">Contact</a>
          </li>
        </ul>
      </div>
    </div>


    <!-- Phone Number validation here-->
    

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script>        
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }

// photos validation here


        var _validFileExtensions = [".jpg", ".jpeg",".png"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry" +" is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}
// text validation
$(function() {

$('#txtNumeric').keydown(function (e) {

  if (e.shiftKey || e.ctrlKey || e.altKey) {
  
    e.preventDefault();
    
  } else {
  
    var key = e.keyCode;
    
    if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
    
      e.preventDefault();
      
    }

  }
  
});

});

       </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="app.js"></script>
    <script src="extra.j"></script>
  </body>
</html>
