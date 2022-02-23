#!/usr/bin/php

<?php
  echo "Selamat Datang!\n";

  //for($i=1; $i<=10; $i++) {
  //  echo "urutan ke-$i\n";
  //}

  //shell_exec('touch index.html');
  //shell_exec('echo "<h1>Hai, apa kabar</h1>" > index.html');

  //$output = shell_exec('ls -lart');
  //echo "$output";

  $nama = readline('Nama Anda : ');
  echo "Hai, apa kabar $nama\n";

  $arg1 = $argv[1];
  $arg0 = $argv[0];
  echo "$arg1, berkasmu bernama $arg0\n\n";
?>
