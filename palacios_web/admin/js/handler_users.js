var IdUsuario = -1;
var consultaGeneral = new FormData()
const crud_usuarios = 'query/crud_usuarios.php'

window.onload = function(){
    consultaGeneral.append('query', 'rUser')
    consultaGeneral.append('tipo', 'USER')
    consultaGeneral.append('ajax', 2)
    consulta(consultaGeneral, fillGridUsuarios)
}

function fillGridUsuarios(responseText)
{    
    document.getElementById('gridUsers').innerHTML = responseText;
}

function searchUser()
{
    let searchCad = document.querySelector('#search')
    let datos = new FormData(searchCad) 
    datos.append('query', 'rUser')
    datos.append('tipo', 'USER')
    datos.append('ajax', 2)

    consulta(datos, fillGridUsuarios)
}

function createUser()
{
    let altaCad = document.querySelector('#AltaUser')
    let datos = new FormData(altaCad)        
    
    if( document.getElementById("imagenAdd").files.length != 0 ){
        let file = document.getElementById('imagenAdd').files[0]
        datos.append('imagenAdd', file)
    }

    datos.append('query', 'cUser')
    datos.append('tipo', 'USER')
    datos.append('ajax', 2)

    consulta(datos, function(responseText){        
        consulta(consultaGeneral, fillGridUsuarios)
        $('#addModal').modal('hide')
    })
}


function setUpdateUser(IdUsuario){
    this.IdUsuario = IdUsuario
    var datos = new FormData()
    datos.append("IdUsuario", IdUsuario)
    datos.append('query', 'uModal')
    datos.append('ajax', 2)
    
    consulta(datos, function(responseText){
        document.getElementById('updateModal').innerHTML = responseText
        $('#updateModal').modal('show')
    })
}

function updateUser(){
    let upCad = document.querySelector('#UpdateUser')
    let datos = new FormData(upCad)  
    
    if( document.getElementById("imagenUpdate").files.length != 0 ){
        let file = document.getElementById('imagenUpdate').files[0]
        datos.append('imagenUpdate', file)
    }

    datos.append("IdUsuario", IdUsuario)      
    datos.append('query', 'uUser')
    datos.append('ajax', 2)

    consulta(datos, function(responseText){
        console.log(responseText)
        consulta(consultaGeneral, fillGridUsuarios)
        $('#updateModal').modal('hide')
    })
}

function setDeleteUser(IdUsuario, Username){
    this.IdUsuario = IdUsuario
    document.getElementById('deleteModalTitle').innerText = "Eliminar usuario "+Username
    $('#deleteModal').modal('show')
}

function deleteUser(){
    let datos = new FormData()
    datos.append('query', 'dUser')
    datos.append("IdUsuario", IdUsuario) 

    consulta(datos, function(){
        consulta(consultaGeneral, fillGridUsuarios)
        $('#deleteModal').modal('hide')
    })
}

function consulta(datos, callback){
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200 ){
            callback(this.responseText)
        }
    }
    xhttp.open('POST', crud_usuarios, true)
    xhttp.send(datos)
}