<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <?php
        // require  "../../hed/sandls.php";
      ?>
    <style>

        #cont{
            height: 20vh;
            width: 50%;
            margin: auto;
        }

        #hed{
            text-align: center;
            padding-top: 10px;
            font-size: 25px;
            font-style: italic;
            font-display: fallback;
            font-family: fantasy;
        }
        #ass{
            text-align: center;
            padding-top: 20px;

            font-size: 25px;
            ?font-style: italic;
            font-display: fallback;
/*            font-family: Times-Roman;*/
        }
        #reg{
           text-align: center;
           color: darkblue; 
        }
        #logo{
            width: 100%;
        }
        #mainDiv{
            margin: auto;
            width:96%; 
            height: 60vh; 
            /* background-color: rgba(0, 20, 240, 0.7); */
            background-color: #3C6DBA;
            padding-top: 6vh;
        }

        .imgOpts{
            width: 90%;
            display: block;
            margin: auto;
            cursor: pointer;
        }

        #optDiv2{
            margin-top:8vh;"
        }
        @media only screen and (min-width: 600px) {
            .imgOpts{
            width: 50%;
        }
        #logo{
            width: 50%;
        }
        #mainDiv{
            height: 63vh; 
           
        }
        #optDiv2{
            margin-top:6vh;"
        }
         #hed{
            padding-top: 15px;
            font-size: 45px;
        }

    }
    </style>
</head>

<body>

    <div id="cont" class="container-fluid">
        <div class="row">
            <div class="col-2">
                <img id="logo" src="img/clogo.png">
            </div>
            <div class="col-10">
                <h3 id="hed">DEEPER LIFE BIBLE CHURCH </h3>
            </div>
            
        </div>
        
        
        <h2 id="reg"></h2>
        <h2 id="ass">ASSET MANAGEMENT SYSTEM</h2>

        <div id="mainDiv">
            <div id="optDiv1" class="row">
                <div class="col-4">
                    <a href="Landb.php">
                        <img class="imgOpts" src="img/Landb.png">
                    </a>
                </div>
                <div class="col-4">
                    <a href="ass01.php">
                        <img class="imgOpts" src="img/Music.png" >
                    </a>
                </div>
                <div class="col-4">
                    <a href="ass01.php">
                        <img class="imgOpts" src="img/Fur.png">
                    </a>
                </div>
            </div>

            <div id="optDiv2" class="row">
                <div class="col-4">
                    <a href="ass01.php">
                        <img class="imgOpts" src="img/ICT.png" style="width:45%" >
                    </a>
                </div>
                <div class="col-4">
                    <a href="ass01.php">
                        <img class="imgOpts" src="img/EandE.png" >
                    </a>
                </div>
                <div class="col-4">
                    <a href="ass01.php">
                        <img class="imgOpts" src="img/Veh.png">
                    </a>
                </div>
            </div>
            
            
        </div>
        <!-- <label id="landb" class="opts" onclick="useroption('landb')">Lands/Buildings</label>

         <label id="music" class="opts" onclick="useroption('music')">Musical Instrument</label>

         <label id="fur" class="opts" onclick="useroption('fur')">Furnitures</label>

         <label id="ict" class="opts" onclick="useroption('ict')">ICT</label>

         <label id="eande" class="opts" onclick="useroption('eande')">Electrical/Electronits</label>

         <label id="veh" class="opts" onclick="useroption('veh')">Vehicles</label>
    </div> -->
    <script>
        const region = sessionStorage.region + " REGION";
        document.getElementById('reg').innerHTML = region;

        function proceed(){
           location.href = "ass01.<?php ?>";
           // location.href = history.back();
        }

        function useroption(opt){
            alert('Yes');
            if (opt == 'landb'){
                location.href = "asset.php";
            }

        }


    </script>

</body>

</html>