<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./jquery-3.3.1.js"></script>
    <title>ALBERNIへようこそ</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    *{
      margin: 0;
      padding: 0;
      border: 0;
    }
    body{
      background: green;
    }
    #container{
      width: 1000px;
      margin: 20px auto;
    }
    #navi{
      width: 300px;
      float: left;
    }
    #navi ul{
      height: 460px;
      list-style-type: none;
    }
    #navi ul li{
      list-style-type: none;
      width: 150px;
      float: left;
    }
    #navi ul li img{
      border: 3px solid white;
      width: 150px;
      height: 150px;
      margin-left: -150px;
    }
    #main{
      width:650px;
      float: right;
    }
    #main img{
      position: absolute;
      border: 3px solid white;
      margin-top: 10px;
      margin-left: 50px;
      width: 700px;
      height: 800px;
    }
    #main h1{
      margin-bottom: 10px;
    }
    .keyvisual ul li img{
      width: 500px;
      height: 500px;

    }
  </style>
  <script>
    $(function(){
      $("#navi a").click(function(){
        $("#main img").before("<img src='"+$(this).attr("href")+"' alt=''>");
        $("#main img:last").fadeOut("fast",function(){
          $(this).remove();
        });
        return false;
      });
    });
  </script>

  </head>
  <body>
  </div>
    <div class="wrapper">
      <!-- ヘッダー始まり -->
      <header class="header">
        <h1 class="logo"><a href="index.php"><img src="images/logo1.jpg" alt=""></a></h1>
        <nav class="nav">
          <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="greet.html" id="greet">店主</a></li>
            <li><a href="about.html" id="about">店舗案内</a></li>
            <li><a href="access.html" id="access">アクセス</a></li>
            <li><a href="menu.html" id="menu">メニュー</a></li>
            <li><a href="fuukei.html" id="fuukei">店舗周辺</a></li>
            <li><a href="contact.html" id="contact">お問い合わせ</a></li>
          </ul>
        </nav>
      </header>
      <!--　ヘッダー終了 -->
      <!-- メイン始まり　-->
      <div class="keyvisual">
        <img src="images/keyvisual.jpg" alt="">
      </div>
      <main>
        <h2 id="news">News</h2>
        <p class="news-item">2月は明治大学や、慶応大学にも出店いたします。　出店予定地や日程などは随時配信いたしますので、ご確認ください</p>
        <p class="news-item">2月20日は文化祭「<a href="http://www.sbcr.jp" target="_blank">PICNIC</a>」のライブを開催します。投げ銭方式です。お楽しみに！</p>
      </main>
      <!--　メイン終わり -->

      <!--　フッダー始まり -->
      <footer class="footer">
        <p>&copy;Copyright ALBERNI. All rights reserved.</p>
      </footer>
      <!--　フッダー終わり  -->
      <div class="container">
      <div id="navi">
        <ul>
          <li> <a href="images/hotdog.jpg"><img src="images/hotdog.jpg" alt=""></a></li>
          <li> <a href="images/hotdog2.jpg"><img src="images/hotdog2.jpg" alt=""></a></li>
          <li> <a href="images/hotdog3.jpg"><img src="images/hotdog3.jpg" alt=""></a></li>
          <li> <a href="images/hotdog4.jpg"><img src="images/hotdog4.jpg" alt=""></a></li>
          <li> <a href="images/hotdog5.jpg"><img src="images/hotdog5.jpg" alt=""></a></li>
          <li> <a href="images/hotdog6.jpg"><img src="images/hotdog6.jpg" alt=""></a></li>
          <li> <a href="images/hotdog7.jpg"><img src="images/hotdog7.jpg" alt=""></a></li>
          <li> <a href="images/poteto.jpg"><img src="images/poteto.jpg" alt=""></a></li>
          <li> <a href="images/poteto2.jpg"><img src="images/poteto2.jpg" alt=""></a></li>
        </ul>

      </div>
      <div id="main">
        <img src="images/hotdog.jpg" alt="">
      </div>
    </div>
  </body>
</html>
