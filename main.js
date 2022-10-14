var botao = document.querySelector('input');
botao.onclick = calcular();

function calcular()
{
   /* var varI = document.getElementById('num1').value;
    var varII = document.getElementById('num2').value;
    var varIII = document.getElementById('num3').value;
    var varIV = document.getElementById('num4').value; */
    var respuesta;

    var valorFinal = document.querySelector('div#resposta');

     if((document.getElementById('num1').value) == 'x')
    {
      respuesta = (varII * varIII / varIV);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varII == 'x')
    {
      respuesta = (varII * varIII / varIV);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varIII == 'x')
    {
      respuesta.value = (varI * varIV / varII);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varIV == 'x')
    {
      respuesta.value = (varII * varIII / varI);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else{valorFinal.innerHTML = `<p>Sem Resposta [NULL]</p>`;}
}

/*
function calcular()
{
    var varI = document.getElementById('num1').value;
    var varII = document.getElementById('num2').value;
    var varIII = document.getElementById('num3').value;
    var varIV = document.getElementById('num4').value;
    var respuesta;

    var valorFinal = document.querySelector('div#resposta');

     if(varI == 'x')
    {
      respuesta = (varII * varIII / varIV);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varII == 'x')
    {
      respuesta = (varII * varIII / varIV);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varIII == 'x')
    {
      respuesta.value = (varI * varIV / varII);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else if (varIV == 'x')
    {
      respuesta.value = (varII * varIII / varI);
      valorFinal.innerHTML = `<p>X é igual a <strong>${respuesta}</strong></p>`;
    }else{valorFinal.innerHTML = `<p>Sem Resposta [NULL]</p>`;}
}
*/