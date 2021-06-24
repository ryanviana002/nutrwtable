function imccalc(){

    var massa;
    var altura;
    var imc;

    massa = document.getElementById('massa').value;
    altura = document.getElementById('altura').value;
    imc = (massa / (altura * altura));

    return imc;

}

function status(){
    
    var userimc = imaccalc();
    var sexo;
    var status;

    sexo = document.getElementById('sexo').value;

    switch(sexo){
        
        case 'M':
            if(userimc < 20){
                situacao = 'Abaixo do peso';
            }
            else if(userimc <= 24.9){
                situacao = 'Peso normal';
            }
            else if(userimc <= 29.9){
                situacao = 'Obesidade leve';
            }
            else if(userimc <= 39.9){
                situacao = 'Obesidade moderada';
            }
            else
            {
                situacao = 'Obesidade morbida';
            }
        break;
        case 'F':
            if(userimc < 19){
                situacao = 'Abaixo do peso';
            }
            else if(userimc <= 23.9){
                situacao = 'Peso normal';
            }
            else if(userimc <= 28.9){
                situacao = 'Obesidade leve';
            }
            else if(userimc <= 38.9){
                situacao = 'Obesidade moderada';
            }
            else
            {
                situacao = 'Obesidade morbida';
            }
        break;
    }

    document.getElementById('imc').value = userimc;
    document.getElementById('situacao').value = situacao;
    hoje();

}

