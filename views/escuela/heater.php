    <script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
	    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
    </script>
    <div id="cabecera">
        <div id="redes">
            <a href="https://www.facebook.com/groups/1936731153241580" target="blank"><img src="imagenes/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/escuela_karate_zurita/?hl=es-la" target="blank"><img src="imagenes/instagram.png" alt=""></a>
            <a href="https://twitter.com/escuelashotokan" target="blank"><img src="imagenes/twitter.png" alt=""></a>
            <div id="Fecha">
                <script type="text/javascript">
                    var d=new Date();
                    var dia=new Array(7);
                    dia[0]="Domingo";
                    dia[1]="Lunes";
                    dia[2]="Martes";
                    dia[3]="Miercoles";
                    dia[4]="Jueves";
                    dia[5]="Viernes";
                    dia[6]="Sabado";
                    document.write("Hoy es: " + dia[d.getDay()]);
                </script>
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getDate());
                </script>
                <script type="text/javascript">
                    var mm=new Date();
                    var m2 = mm.getMonth() + 1;
                    var mesok = (m2 < 10) ? '0' + m2 : m2;
                    var mesok=new Array(12);
                    mesok[0]="Enero";
                    mesok[1]="Febrero";
                    mesok[2]="Marzo";
                    mesok[3]="Abril";
                    mesok[4]="Mayo";
                    mesok[5]="Junio";
                    mesok[6]="Julio";
                    mesok[7]="Agosto";
                    mesok[8]="Septiembre";
                    mesok[9]="Octubre";
                    mesok[10]="Noviembre";
                    mesok[11]="Diciembre";
                    document.write("de " + mesok[mm.getMonth()]);
                </script>
                <script>
                    showTime();
                    function showTime(){
                    myDate = new Date();
                    hours = myDate.getHours();
                    minutes = myDate.getMinutes();
                    seconds = myDate.getSeconds();
                    if (hours < 10) hours = 0 + hours;

                    if (minutes < 10) minutes = "0" + minutes;

                    if (seconds < 10) seconds = "0" + seconds;

                    $("#HoraActual").text(hours+ ":" +minutes+ ":" +seconds);
                    setTimeout("showTime()", 1000);
                    }
                </script>
            </div>
            <h1 id="HoraActual"> </h1>
        </div>
        <div id="acceso">
            <a href="index.php?c=Admin"><p>administrador</p></a>   
        </div>
        <div id="logo">
            <img src="imagenes/logo.png" alt="">
            <p id="textocabecera1">DOJO <br>RYUKYU</p>
        </div>
        <div>
            <a href="index.php?c=Profesores" class="textocabecera3">NUESTRO DOJO</a>
            <a href="index.php?c=Consultas&a=karate" class="textocabecera3">EL ARTE MARCIAL</a>
            <a href="index.php" id="textocabecera4">INICIO</a>
            <a href="index.php?c=Clases&a=inscripcion" class="textocabecera3">VUELVETE KARATECA</a>
            <a href="index.php?c=Consultas&a=contactanos" class="textocabecera3">CONTACTANOS</a>

        </div>
    </div>