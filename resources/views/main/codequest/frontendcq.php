<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APD - Front End Challenge</title>
        <link rel = "stylesheet" href = "style.css">
        <link rel = "icon" href = "apdicon.png">
        <script src="https://kit.fontawesome.com/b3459fa126.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home" style = "color: white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/codequest" style = "color: white;">Challenges</a>
                </li>
            </ul>
            <a class="navbar-brand" href="#">
                <img src="apdlogo.png" alt="APD logo" width="400" height="70" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/news" style = "color: white;">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style = "color: white;">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class = "row">
        <div class = "col left">
            <label><i class="fa-brands fa-html5"></i>HTML</label>
            <textarea id = "html" onkeyup = "run()"></textarea>

            <label><i class="fa-brands fa-css3-alt"></i>CSS</label>
            <textarea id = "css" onkeyup = "run()"></textarea>

            <label><i class="fa-brands fa-square-js"></i>JavaScript</label>
            <textarea id = "js" onkeyup = "run()"></textarea>
        </div>

        <div class = "col right">
            <label><i class="fa-solid fa-code"></i>Output</label>
            <iframe id = "output"></iframe>
        </div>
    </div>

    <script>
        function run() {
            let htmlCode = document.getElementById("html").value;
            let cssCode = document.getElementById("css").value;
            let jsCode = document.getElementById("js").value;
            let output = document.getElementById("output");

            output.contentDocument.body.innerHTML = htmlCode + "<style>" + cssCode + "</style>";
            output.contentWindow.eval(jsCode);
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>