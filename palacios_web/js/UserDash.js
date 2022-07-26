window.onload = function(){
    cambiarPanel(0)
}

function cambiarPanel(panel){
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200 ){
            document.getElementById("mainContent").innerHTML = this.responseText
        }
    }
    xhttp.open('GET', "query/panelesUser.php?opt="+panel, true)
    xhttp.send()
}