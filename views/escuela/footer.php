    <div id="pie">
        <p>Copyright ©2021 Ryukyu. All Rights Reserved - <span id="DMR">Omar Emmanuel Miranda Fernandez</span></p>
        <a href="https://www.google.com/" target="blank">About</a>
        <a href="https://www.google.com/" target="blank">Blog</a>
        <a href="https://www.google.com/" target="blank">Privacy Policy</a>
        <br>
        <a href="#cabecera"><span id="azul">Volver al principio</span></a><br>
        <p class="textopie"><span class="textopie">Tiempo transcurrido:</span></p>
        <input class="timepage" size="5" id="timespent" name="timespent"><br>
        <script>
            startday=new Date();
            clockStart=startday.getTime();
            function initStopwatch(){
                var myTime=new Date();
                return((myTime.getTime()-clockStart)/1000);
            }
            function getSecs(){
                var tSecs=Math.round(initStopwatch());
                var iSecs=tSecs%60;var iMins=Math.round((tSecs-30)/60);
                var sSecs=""+((iSecs>9)?iSecs:"0"+iSecs);
                var sMins=""+((iMins>9)?iMins:"0"+iMins);
                document.getElementById('timespent').value=sMins+":"+sSecs;
                window.setTimeout('getSecs()',1000);
            }
            window.onload = function(){
                window.setTimeout('getSecs()',1);
            }
        </script>
    </div>