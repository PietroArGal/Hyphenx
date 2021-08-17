<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Hyphen X</title>
  <style>
    body {
      overflow: hidden;
      padding: 0;
      margin: 0;
    }

    p,
    a {
      text-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
      font-family: Courier, monospace;
      font-smoothing: antialiased;
      margin: 0.8em 0;
      font-size: 18px;
      color: #23e7ac;
    }

    .ghost,
    .glitch {
      opacity: 0.25;
    }

    #message {
      margin-left: -300px;
      margin-top: -130px;
      position: absolute;
      height: 260px;
      width: 600px;
      left: 50%;
      top: 50%;
    }

    #animate {
      text-shadow: 0 0 8px rgba(209, 194, 165, 0.1);
      position: absolute;
      color: #139104;
      bottom: 0;
    }

    #container {
      background: -webkit-radial-gradient(50% 50%, ellipse, #20202D 0%, #101018 75%, #060612 100%);
      background: -moz-radial-gradient(50% 50%, ellipse, #20202D 0%, #101018 75%, #060612 100%);
      position: absolute;
      height: 100%;
      width: 100%;
      left: 0;
      top: 0;
    }

    #container:before {
      pointer-events: none;
      position: absolute;
      height: 100%;
      width: 100%;
      content: "";
      left: 0;
      top: 0;
    }
  </style>
</head>

<body>
  <div id="container">
    <div id="message">
      <a id="animate" href="#"></a>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>

</html>
