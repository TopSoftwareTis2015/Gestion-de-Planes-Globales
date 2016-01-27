  function validarSiNumero(numero){
  	
    if (!/^([0-9])*$/.test(numero))
      //echo "<div class="alert alert-warning">El valor"+numero+" no es un numero</div>";
      alert("El valor " + numero + " no es un número");
  }