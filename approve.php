
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Approve Bot - Add Bot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50; /* Set background color based on the theme */
            color: #ecf0f1; /* Set text color based on the theme */
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column; /* Align items vertically */
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            background-color: #34495e; /* Set form background color based on the theme */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ecf0f1; /* Set label text color based on the theme */
        }

        input {
            width: calc(100% - 16px); /* Adjusted width with some spacing on each side */
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #bdc3c7; /* Set input border color based on the theme */
            border-radius: 4px;
            background-color: #ecf0f1; /* Set input background color based on the theme */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        button {
            background-color: #3498db; /* Set button background color based on the theme */
            color: #ecf0f1; /* Set button text color based on the theme */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9; /* Set button hover background color based on the theme */
        }
    </style>
</head>
<body>
    <h1>Auto Approve Bot</h1>
    <form action="aablinkKar.php" method="post">
        <label for="botToken">Bot Token:</label>
        <input type="text" name="botToken" required><br>

        <button type="submit">Add Bot</button>
    </form>
<script>(function(){var js = "window['__CF$cv$params']={r:'8373c137ac9e4b7a',t:'MTcwMjg2NDIyNC4xMzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
</html>
