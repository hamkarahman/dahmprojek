<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SMKN 8 BUTON</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/sekolahimg.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<style>
        /* animasi */
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
  background color: linear #20809d rgb(4, 3,7);
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
/* .logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
} */

.inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}


.baris2{
    position: absolute;
width: 782px;
height: 64px;
left: 718px;
top: 61px;
background: blue;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.garis{
    position: absolute;
width: 1465px;
height: 113px;
left: 40px;
top: -25px;
background: #003366;
}
.login-box{
    background-color: blue;
    color: aliceblue;
    position: absolute;
    left: 50%;
    right: 50%; 
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    border-radius: 20px;
    box-shadow: inset;
}
.kiri{
    font-family: sans-serif;
    color: white;
    top: 50%;
    left: 80%;
    right: 20%;

}
a{
    font-family: sans-serif;
    color: black;
    text-decoration: none;
}
.daftar{
    font-family: sans-serif;
    font-style: italic;
    font-size: 10px;
    color: aliceblue;
    
}
.kanan{
    margin-left : 80%;
    margin-top: 200px;
}
.logo{
  position: absolute;
    width: 100px;
    height: 110px;
    left: 14px;
    top: 70px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}
}
</style>
</head>
<body>
</div>
    <div class="kanan">
      <div class="login-box">
        <h2>Login</h2>
            <div class="user-box">
                <input type="text" nama="" required="">
                <label >User name</label>
            </div>
            <br>
            <div>
                <input type="Passsword">
                <label>Passsword</label><br><br>
            </div>
            <button>
                <a href="index.php"> 
                Login</a>
            </button>
            <br>
            <a href="">
                <div class="daftar">Lupa kata sandi</div>
            </a>
        </div>
    </div>   
</body>
</html>