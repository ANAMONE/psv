<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="main.css">
        <title>내 IP 찾기 - SEOB 섭</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <style>
@font-face {
    font-family: 'TmoneyRoundWindRegular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindRegular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'TmoneyRoundWindExtraBold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindExtraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

body {
    font-family: 'TmoneyRoundWindRegular';
}
   </style>
    <script type="text/javascript" src="ip.js"></script>

    </head>
    <body>
    <div class="div1">
        <span style="font-family: 'TmoneyRoundWindExtraBold'; font-size: 40px;">내 IP 찾기</span>
        <br>
        <span style="font-family: 'TmoneyRoundWindRegular';">손쉽게 나의 IP를 찾아보세요!</span>
    </div>
    <div class="container">
        <br>
        <div class="card">
  <div class="card-body">
  <b><h4 id="myInput"><?php
echo $_SERVER['REMOTE_ADDR'];
?>
</b>
</h4><br>
<button type="button" class="btn btn-primary" onclick="copy_to_clipboard()">복사하기</button>
  </div>
</div>
<br>

<div class="card">
  <div class="card-body">
      <h4>접속환경</h4>
  <b><p><?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
</b>
</p>
  </div>
</div>

 <!-- 
해당소스는 윈섭에서 운영중이며, 이 주석을 지울시 문제가 생길수있습니다.
깃허브 다운로드 : https://github.com/ChangMun00/WinSub-IP
-->
<br>
</div>
<div class="footer">
    <div class="container">
        © 2020. SEOB All rights reserved.
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>