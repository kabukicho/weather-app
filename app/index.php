<DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1" />
    <!-- jqueary, jqueary Mobile -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
    <script type="text/javascript"></script>
    <!-- jqueary Mobile -->


    <script type="text/javascript" src="./js/lwws.js"></script>
    <!--他のファイルから　javascript　コードを読み込む -->
    <script type="text/javascript" src="./js/app.js"></script> 
  <head>
    <body>
      <div data-role="page" id="index">
        <div data-role="header" data-theme="b">
          <h1>My WebApp</h1>
        </div>  
        <div data-role="content">
          <form>
            <select id="city">
            <!-- x: valye o:value -->
              <option value='110010'>さいたま</option>
              <option value='120010'>千葉    </option>
              <option value='130010'>東京　　</option>
              <option value='140010'>横浜　　</option>
            </select>
            <a href="#" id="excute" data-role="button" data-inline="true">実行</a>
            <h2>実行結果</h2>
            <div>
              <span id="result"></span>
            </div>
          <form>
          <?php phpinfo(); ?>
        </div><!--data-role="content" -->
        <div data-role="footer" data-theme="b">
          <h2>Wether TAIKI</h2>
        </div>    
      </div><!--data-role="page" id="index" -->
    </body>
</html>


     

