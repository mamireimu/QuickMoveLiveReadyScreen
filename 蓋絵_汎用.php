<?php
  // [ user.php ]
  if(isset($_GET['name'])) {
      $name = $_GET['name'];
  }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <video id="neon-road" data-z="1.00" data-bright="0.6" class="glitch" src="16182318_MotionElements_cyber-sun-landscape-loop-hd.mp4" muted loop autoplay></video>
        <video id="smoke_blue" data-z="1.60" data-bright="0.2" class="blend-screen flip-x hue-rotate-72" src="16698175_MotionElements_smoke-fire-design-hd.mp4" muted loop autoplay></video>
        <video id="smoke_rainbow" data-z="1.30" data-bright="0.0" class="blend-screen" src="13650498_MotionElements_smoke-fog-rainbow-color-hd.mp4" muted loop autoplay></video>
        <video id="digital" data-z="0.50" data-bright="0" class="blend-overlay glitch" src="16643262_MotionElements_digital-data-dark-hd.mp4" muted loop autoplay></video>

        <!-- <img id="moyou_blue" data-z="0.20" data-bright="0.0" src="ロケリロゴ_中央上.png"> -->
        <img id="moyou_white" data-z="0.15" data-bright="0.0" src="模様_下_白.png">
        <img id="moyou_blue" data-z="0.10" data-bright="0.0" src="模様_両サイド_紺色.png">
        <!-- <img id="moyou_blue" data-z="0.80" data-bright="0.0" src="京都eスポーツ文化祭_中央.png"> -->
        <p id="title_text" class="title_text kyoto_stadium" data-z="0.80"<?php print("$name");?></p>

        <script src="script.js"></script>
        <script src="glitch/glitch.js"></script>
        <script> window.addEventListener('load', _=>{
            dataset = Array.from(document.querySelectorAll('[data-z]')).map(v=>[v.id, v.getAttribute('data-z'), v.getAttribute('data-bright')]);
            setGlitchHTML();
            dataset.map(v=>{
                let elem = document.getElementById(v[0]);
                elem.setAttribute('data-z', v[1]);
                elem.setAttribute('data-bright', v[2]);
                Array.from(elem.querySelectorAll('video')).map((v, i) => {
                    v.muted = true;
                    v.autoplay = true;
                    v.loop = true;
                });
            });
            anim.setIntv(_=>{
                setTextStroke(title_text, 'purple', 0.13, 'em', 16);
            });

        });</script>
    </body>
</html>
