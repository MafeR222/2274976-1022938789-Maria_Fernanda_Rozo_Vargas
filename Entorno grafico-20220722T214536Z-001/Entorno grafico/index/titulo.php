<div class="principal1">
    <div class="encabezado1">
    
<body background-image="imagenn.png">
    <table width="100%" border="0" cellpadding="10" cellspacing="0">
            <tr> <td><center><font size="8" color="red" face="comic sans ms">OpenClass </font></center></td>
        <td> <img src="imagenes\imagenn.png" width="100" height="50"></td></tr><table><p><p>
        </div>
        <html>
   
  
<form name="Tick" id="Tick">
        <p align="center">
            <input type="text" size="11" name="Clock" />
</p>
</form>
<script>
function show() {    
    var Digital = new Date()
    var hours = Digital.getHours()
    var minutes = Digital.getMinutes()
    var seconds = Digital.getSeconds()
    var dn = "AM"
    if (hours > 12) {
        dn = "PM"
        hours = hours - 12
    } 
    if (hours ==0)
        hours = 12    
    if (minutes <= 9)
        minutes = "0" + minutes
    if (seconds <=9)
       seconds = "0" + seconds    
    document.Tick.Clock.value = hours +":" + minutes + ":" + seconds + "" + dn
    setTimeout("show()",1000)
}
show();
</script>
