
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
    <title>Uncomfortable VR - New, cool, innovative WebVR sites</title>
  </head>
  <body>


    <!-- a-frame uncomfortablevr logo embed -->
    <section id="content">

    <div id=topwrapper>
      <a-scene Embedded vr-mode-ui="enabled: false">

      <a-assets>
    <a-asset-item id="obj-1" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Flogo3d.obj"></a-asset-item>
    <a-asset-item id="mtl-1" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Flogo3d.mtl"></a-asset-item>
    <a-asset-item id="obj-2" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fword3d.obj"></a-asset-item>
    <a-asset-item id="mtl-2" src="https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fword3d.mtl"></a-asset-item>
    </a-assets>

      <a-entity id="wholeFace"
                scale = ".11 .11 .11"
                position="0 1.75 -2.0"
                material="metalness: 1">

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                rotation="45 0 0"
                position="0 0 .5">

                <a-animation attribute="rotation"
                         dur="1000000"
                         fill="forwards"
                         to="-36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="-20 0 15"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="1000000"
                         fill="forwards"
                         to="36000 3600 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="20 0 15"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="500000"
                         fill="forwards"
                         to="36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>


      <a-entity id="logo"
                obj-model="obj: #obj-1; mtl: #mtl-1"
                position="0 0 40"
                rotation="0 60 0">


                <a-animation attribute="rotation"
                         dur="500000"
                         fill="forwards"
                         to="36000 1080 0"
                         easing="linear"
                         repeat="indefinite">
                </a-animation>

      </a-entity>

      <!-- <a-entity id="word"
                obj-model="obj: #obj-2; mtl: #mtl-2"
                scale = "1 1 1"
                position="0 -2.15 -10"
      ></a-entity> -->

      </a-entity>




      <a-entity geometry="primitive:plane;height:10000;width:10000"
                material="shader:flat;transparent:true;repeat:10000 10000; src:https://cdn.glitch.com/fe14367e-2a8c-4a88-aff6-3def57e5cf29%2Fgrid.png;metalness:0.6;roughness:0.4;"
                rotation="-90 90 0"
                position="-11 0 0"></a-entity>



      <a-sky color="#00FC00"></a-sky>
    </a-scene>
    </div>



    <div id=bottomwrapper>

      <div id="bottomcontent">

        <div id=header>

            <div id=logo>
              <!-- <img id=logomark src="imgs\uncomfortablevr_logo.svg" alt="Uncomfortable V R Logo"> -->
              <h1 id=logotype>UncomfortableVR</h1>
            </div>

            <h3>Innovative WebVR-sites.</h3>
            <h3><a href="sumbit.com">Submit</a></h3>

      </div>

      <div id="allexp">

        <div id=exp>
          <a href="https://moyashipan.github.io/zuumo/" target="_blank" >
          <img border="0" alt="Zuumo" src="imgs\zuumo.jpg"></a>
        </div>
        <p>
          Zuumo
        </p>

<!-- SENSE OF PROMISE -->
      <div id=exp>
        <a href="http://senseofpromise.com/" target="_blank">
        <img border="0" alt="Sense of Promise" src="imgs\senseofpromise.jpg"></a>
    </div>
      <p>
        Sense of Promise
      </p>

<!-- THE CAGE CAGE -->
      <div id=exp>
        <a href="http://www.thecagecage.com/" target="_blank">
        <img border="0" alt="The Cage Cage" src="imgs\thecagecage.jpg"></a>
    </div>
      <p>
        The Cage Cage
      </p>

<!-- EYEXPO -->
      <div id=exp>
        <a href="http://eyexpo.com/vr/shoppingdemo1/index.html" target="_blank">
        <img border="0" alt="Eyexpo" src="imgs\eyexpo.jpg"></a>
    </div>
      <p>
        Eyexpo
      </p>

    </div>

  </div>

</div>

    </section>




  </body>
</html>
