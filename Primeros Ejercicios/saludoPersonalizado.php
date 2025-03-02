<?php 

function saludoPersonalizado($hora = 15){

    if ($hora == null) {
        return "Hola";
    }else if($hora <=12){   
        return "Buenos dias";
    }else if($hora <= 18){
        return "Buenas tardes";
    }else{
        return "Buenas noches";
    }
}

echo saludoPersonalizado();