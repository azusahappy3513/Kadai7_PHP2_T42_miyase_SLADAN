<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自信を持てるか立ち直れなくなるアンケート</title>
</head>
<body>



<form action="" method="POST">
<?php
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen("question1.csv","r");

$question_count = 1;
// fget関数で1000行目まで繰り返し読み込む
// while($line = fgetcsv($fp, 1000))　　　
while ($line = fgetcsv($fp)) 
{
    // 最初の質問から1個づつ行を増やして表示
    echo "<p>質問{$question_count}: {$line[0]}</p>";
    // ラジオボタンを１つずつ追加
    for ($i=1; $i < count($line) - 1; $i++) {
        echo "<input type='radio' name='question{$question_count}' value={$i}>{$line[$i]}<br>";
        // 福島先生のアドバイスで修正↑　以下は残骸
        // for($i=1; $i<count($line); $i++) {
    //     echo "<input type='radio' name='question{$question_count}' value={$i}>{$line[$i]}<br>";
    }
$question_count++;
}
?>
<p> 名前: <input type="text" name="your_name" value=""></p>
<p> <E-mail>E-mail</E-mail>: <input type="text" name="your_E-mail" value=""></p>
<input type="submit">
</form>
 <?php
    
    $test = filter_input(INPUT_POST, 'question{$question_count}');
    if (isset($test)) {
    // 入力値を表示
    echo $test;
    // テキストとしてファイルに書き出す
    $fp = fopen("ans.csv","w+");//ファイルOPEN
    fputcsv($fp, $test);
    fclose( $file ); //ファイル閉じる
    // file_put_contents('ans.csv', $test);
    }
    ?>












<!-- <?php
// $fp = fopen("ans.csv","w+");//ファイルOPEN
// fwrite( $file, “” ); //書込みです
// fclose( $file ); //ファイル閉じる
// ?> -->

<!-- $question = filter_input(INPUT_POST, 'question');
if (isset($question)) {
// 入力値を表示
echo $question;
// テキストとしてファイルに書き出す
file_put_contents('ans.csv', $question);
}



?> -->


<!-- <form action="/php01_haifu/ans.csv" method="post" >

 <input type="submit" > -->



</body>
</html>