function comprobar(){
 if(document.getElementById('ip').value == "" || document.getElementById('ip').value.length == 0){
  alert("Introduce IP/HOSTNAME/URL.");
  document.getElementById('ip').focus;
 }else{ http_ping() }
}
function http_ping() {
 
var fqdn = document.getElementById('ip').value;
var NB_ITERATIONS = 4; // numero de loops
var MAX_ITERATIONS = 5; // XMLHttpRequest esta limitado según el navegador
var TIME_PERIOD = 1000; // 1000 ms entre cada ping
var i = 0;
var over_flag = 0;
var time_cumul = 0;
var REQUEST_TIMEOUT = 9000;
var TIMEOUT_ERROR = 0;
 
document.getElementById('result').innerHTML = " Haciendo ping a " + fqdn + " con 32 bytes de datos:";
 
var ping_loop = setInterval(function() {
 
 
        // para evitar URLs inexistentes
        url = "http://" + fqdn + "/a30Fkezt_77" + Math.random().toString(36).substring(7);
 
        if (i < MAX_ITERATIONS) {
 
            var ping = new XMLHttpRequest();
 
            i++;
            ping.seq = i;
            over_flag++;
 
            ping.date1 = Date.now();
 
            ping.timeout = REQUEST_TIMEOUT; 
 
            ping.onreadystatechange = function() { 
 
                if (ping.readyState == 4 && TIMEOUT_ERROR == 0) {
 
                    over_flag--;
  
                    if (ping.seq > 1) {
                        delta_time = Date.now() - ping.date1;
                        time_cumul += delta_time;
                        document.getElementById('result').innerHTML += " Respuesta desde " + fqdn + "  bytes=32 secuencia_http=" + (ping.seq-1) + " tiempo=" + delta_time + " ms";
                    }
                }
            }
 
 
            ping.ontimeout = function() {
                TIMEOUT_ERROR = 1;
            }
 
            ping.open("GET", url, true);
            ping.send();
 
        }
 
        if ((i > NB_ITERATIONS) && (over_flag < 1)) { 
 
            clearInterval(ping_loop);
            var avg_time = Math.round(time_cumul / (i - 1));
      
            document.getElementById('result').innerHTML +="Estadísticas de ping para"+fqdn+":Paquetes:enviados="+(i-1)+",recibidos="+(i-1)+",perdidos=0 Tiempo aproximado de ida y vuelta en milisegundos:"+avg_time+"ms";
     alert(tiempoTotal);
 
        }
 
        if (TIMEOUT_ERROR == 1) { 
 
            clearInterval(ping_loop);
            document.getElementById('result').innerHTML +="Respuesta desde"+fqdn+":Host de destino inaccesible.";
            return;
 
        }
 
    }, TIME_PERIOD);
}