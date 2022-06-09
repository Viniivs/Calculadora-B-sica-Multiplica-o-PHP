
<html>
  
<head>Multiplicação</head>
<br>
<br>
  
<body>
  <form>
    Valor 1: <input type="text" id="primeironumero" />
    <br>
    Valor 2: <input type="text" id="segundonumero" />
    <br>
    <br>
    <input type="button" onClick="multiplyBy()" Value="Calcular" />
    <br>
  </form>
  
   <p>O Resultado é: <br>
   <span id = "result"></span>
  </p>
  
  
  <script>
    function multiplyBy()
    {
      num1 = document.getElementById("primeironumero").value;
      num2 = document.getElementById("segundonumero").value;
      document.getElementById("result").innerHTML = num1 * num2;
    }
  </script>
</body>
  
</html>