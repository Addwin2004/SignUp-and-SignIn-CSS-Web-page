<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5aca3b7b17.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
     <div class="form-box">
        <h1 id="title">Signup</h1>
        <form>
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <p>Lost password <a href="#">Click Here</a></p>
            </div>

            <div class="btn-field">
                <button type="button" id="signupbtn">SignUp</button>
                <button type="button" id="signinbtn" class="disable">SignIn</button>
            </div>
        </form>
     </div>
    </div>    

    <script>
        let signupbtn=document.getElementById("signupbtn")
        let signinbtn=document.getElementById("signinbtn")
        let namefield=document.getElementById("namefield")
        let title=document.getElementById("title")

        signinbtn.onclick =function(){
            namefield.style.maxHeight = "0";
            title.innerHTML="SignIn";
            signupbtn.classList.add("disable")
            signinbtn.classList.remove("disable")
        }
        signupbtn.onclick =function(){
            namefield.style.maxHeight = "60px";
            title.innerHTML="SignUp";
            signupbtn.classList.remove("disable")
            signinbtn.classList.add("disable")
        }
    </script>
    
</body>
</html>