<?php
$count = isset($_REQUEST["count"]) ? $_REQUEST["count"] : 0;
$buf = "";
$moji = array("１","２","３","４","５","６","７","８","９","０");
$moji = array("あ","い","う","え","お","か","き","く","け","こ");
$c = 0;
function getNext(){
    global $c,$moji;
    $m =  $moji[$c];
    $c = ($c + 1) % 10;
    return $m;
}

for($i=0;$i<$count;$i++){
    $buf .= getNext();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>全角文字列生成サービス</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
    <body>
    <h1>全角文字列生成サービス</h1>
    <form method="post">
    　<label for="count">生成したい文字数</label>
      <input type="text" value="<?php echo $count ?>" name="count"/>
      <input type="submit" value="生成する">
    </form>
    <h2>結果</h2>
    <div style="width:100%;">
      <?php echo $buf ?>
    </div>
    </body>
</html>