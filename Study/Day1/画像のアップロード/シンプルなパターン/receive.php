<body>
<?php
if(move_uploaded_file($_FILES['upfile']['tmp_name'],
"./".$_FILES['upfile']['name']
) == FALSE){
print "[ERROR]アップロードに失敗しました";
}else{
print "[Success]".($_FILES['upfile']['name'])."をアップロードしました。";
}
?>
</body>
