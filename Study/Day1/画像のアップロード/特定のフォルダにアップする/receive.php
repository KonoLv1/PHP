<body>
  <?php
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],"file/".$_FILES['upfile']['name']) == FALSE){
      print "[ERROR]アップロードに失敗しました";
    }else{
      print "[Success]".($_FILES['upfile']['name'])."をアップロードしました。";
    }
  ?>
  <!-- index.htmlに戻るリンク -->
  <p><a href="index.html">アップロード画面に戻る</a></p>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->
