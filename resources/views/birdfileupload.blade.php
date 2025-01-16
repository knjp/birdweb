<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <center>
        <h1> オガサワラカワラヒワ </h1>
	<form method="POST" action="fileupload" enctype="multipart/form-data">
    @csrf
    アップロードする動画ファイルを選択してください。<br>
	<input type="file" id="file" name="file" class="form-control">

	<button type="submit">アップロード</button>

	</form>
</center>

</body>
</html>
