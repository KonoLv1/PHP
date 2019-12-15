<body>
  <?php
    // 第２パスには保存先のパスを指定している。正しくてエラーが帰ってくる場合は大体フォルダの権限（パーミッション）設定が７７７になっていないゾ
    // フォルダは事前に作っておくように、フォルダ名を「images」以外にする場合は下記のimagesをフォルダ名と同じものに変更することゾ
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],'./images/'.$_FILES['upfile']['name']) == FALSE){
      print "[ERROR]アップロードに失敗しました";
    }else{
      print "[Success]".($_FILES['upfile']['name'])."をアップロードしました。";
    }
  ?>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->
