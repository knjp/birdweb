<!DOCTYPE html>
<html>
<head>
    <title>Python Script Result 2025</title>
</head>
<body>
    <!--
        <pre>{{ $result }}</pre>
    -->
    <div align="center" id="videoregion" style="padding: 2em;">
        <video controls autoplay id="mainVideo" style=" width: 65%; ">
            <source src="storage/yolo/upload/bird_file.mp4" id="mainVideoSource" />
        </video>
    </div>
    <div align="center" id="videoregion" style="padding: 2em;">
        <img src="storage/yolo/figs/resultsSuper000.jpg" id="resultsSuper" />
    </div>
    <div align="center" id="videoregion" style="padding: 2em;">
        <img src="storage/yolo/figs/resultsFigTime.png" id="resultsTime" />
    </div>
    <div align="center">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="location.href='{{url('/') }}' ">
            <p style="">Top に戻る</p></button>
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="location.href='{{url('/downloadcsv') }}' ">
            <p style="">ダウンロード</p></button>
    </div>
</body>
</html>
