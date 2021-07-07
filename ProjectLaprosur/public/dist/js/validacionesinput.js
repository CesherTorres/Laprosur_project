function sololetras(e){
    key=e.keyCode || e.which;

    teclado=String.fromCharCode(key).toLowerCase();

    letras="abcdefghijklmnñopqrstuvwxyz";

    especiales= "8-37-38-46-164";

    teclado_especial=false;

    for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
    }

    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
        return false;
    }
}

function solonumeros(e){
    key=e.keyCode || e.which;

    teclado=String.fromCharCode(key);

    letras="0123456789";

    especiales= "8-37-38-46";

    teclado_especial=false;

    for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
    }

    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
        return false;
    }
}

function sololetrasespace(e){
    key=e.keyCode || e.which;

    teclado=String.fromCharCode(key).toLowerCase();

    letras=" abcdefghijklmnñopqrstuvwxyz";

    especiales= "8-37-38-46-164";

    teclado_especial=false;

    for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
    }

    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
        return false;
    }
}

function sololetrasespacepunto(e){
    key=e.keyCode || e.which;

    teclado=String.fromCharCode(key).toLowerCase();

    letras=" abcdefghijklmnñopqrstuvwxyz.";

    especiales= "8-37-38-46-164";

    teclado_especial=false;

    for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
    }

    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
        return false;
    }
}


function solonumerospunto(e){
    key=e.keyCode || e.which;

    teclado=String.fromCharCode(key);

    letras="0123456789.";

    especiales= "8-37-38-46";

    teclado_especial=false;

    for(var i in especiales){
        if (key==especiales[i]) {
            teclado_especial=true;break;
        }
    }

    if (letras.indexOf(teclado)==-1 && !teclado_especial) {
        return false;
    }
}