<body>
  <?php
    print "サーバーのドメイン名は\"".$_SERVER["HTTP_HOST"]."\"です。<br>\n";
    print "スクリプトの相対パスは\"".$_SERVER["SCRIPT_NAME"]."\"です。<br>\n";
   ?>
   <form action ="super2.php" method="POST">
     <p>私の名前は<input type="text" name="myname">
     <input type="submit" value="確認"></p>
  </body>
