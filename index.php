
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kora's Dashboard</title>
    <link rel="icon" href="https://telegra.ph/file/0384b7a7ee044b7301d07.jpg">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #2c3e50; /* Set background color based on the theme */
            color: white;
        }

        header {
            background-color: #34495e;
        }

        .navbar-brand img {
            border-radius: 15px;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: white;
        }

        .navbar-nav .nav-link {
            color: #60EBF4;
        }

        .navbar-nav .nav-link:hover {
            color: #00D01B;
        }

        .help-icon {
            cursor: pointer;
        }

        #auto-bot-box,
        #auto-kicker-box {
            margin: 20px auto;
            width: 70%;
            border: 2px solid white; /* Black border */
            padding: 20px;
            text-align: center;
        }

        #auto-bot-name,
        #auto-kicker-name {
            font-weight: bold;
        }

        #create-btn,
        #create-kicker-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="https://telegra.ph/file/0384b7a7ee044b7301d07.jpg" width="31" height="31" class="d-inline-block align-top" alt="">
                <b>             Kora </b>
            </a>
            <div class="help-icon" onclick="window.location.href='https://t.me/ajinkyalink'">?</div>
        </nav>
    </header>

    <main role="main">
        <div id="auto-bot-box">
            <div id="auto-bot-name">Auto Approval Bot</div>
            <button id="create-btn" type="button" class="btn btn-primary" onclick="window.location.href='/approve.php'">Create</button>
        </div>

        <div id="auto-kicker-box">
            <div id="auto-kicker-name">Auto Kicker Bot</div>
            <button id="create-kicker-btn" type="button" class="btn btn-primary" onclick="window.location.href='./kick.php'">Create</button>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"><\/script>')
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'83739b905fdd49fc',t:'MTcwMjg2MjY4Mi4xOTMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

</html>
