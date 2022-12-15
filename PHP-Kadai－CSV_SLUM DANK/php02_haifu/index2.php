<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>SLUM DANK選手好きなセリフ名鑑 </title>
    <link href="css/slamdunk.css" rel="stylesheet">
    <style>
        div {
            padding: 12px;
            font-size: 18px;
        }
        
    </style>
</head>
<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select2.php">SLUM DANK選手名鑑</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <form method="post" action="insert2.php">
        <div class="jumbotron">
            <fieldset>
                <legend>好きな登場キャラとセリフ登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label>キャラ名：<input type="text" name="sensyu"></label><br>
                <label>キャラ高校名：<input type="text" name="school"></label><br>
                <label>好きなセリフ：<input type="text" name="word"></label><br>
                <label>その他コメント<textArea name="content" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>
</html>