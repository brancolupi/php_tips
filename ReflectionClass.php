<?php
  
  $class = new ReflectionClass($gateway);
  $methods = $class->getMethods();
  
  foreach ($methods as $method) {
      echo $method->name . '<br>';
  }

  // Ottieni la classe del gateway
  $reflection = new ReflectionClass($gateway);

  // Ottieni il metodo payment_fields
  $method = $reflection->getMethod('payment_fields');

  // Recupera il file e la posizione dove è definito il metodo
  $fileName = $method->getFileName();
  $startLine = $method->getStartLine();
  $endLine = $method->getEndLine();

  echo $fileName;

  // Stampa il codice del metodo
  $code = file($fileName);
  $methodCode = array_slice($code, $startLine - 1, $endLine - $startLine + 1);
  echo implode("", $methodCode);

?>
