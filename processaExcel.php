<?php

// ini_set('max_execution_time', 0); 


// $arquivo = $_FILES['arquivo'];

// var_dump($arquivo);

// $dados_arquivo = fopen('$arquivo',"r");

// var_dump($dados_arquivo);

$handle = fopen($_FILES["UploadFileName"]["tmp_name"], 'r');

var_dump($handle);

// while ($row = fgetcsv($dados_arquivo, 1000, ";")){

//     $data_emissao = DateTime::createFromFormat('d/m/Y', $row[3])->format('y-m-d');
//     $data_vencimento = DateTime::createFromFormat('d/m/Y', $row[4])->format('y-m-d');
//     $data_vencimento_orig = DateTime::createFromFormat('d/m/Y', $row[5])->format('y-m-d');

//     $conn = new PDO('sqlite:banco/vend.db');  
//     $sql = "INSERT INTO notas('CNPJ','NF','PORTADOR','DATA_EMISSAO','DATA_VENCIMENTO','DATA_VENCIMENTO_ORIG', 'VALOR') VALUES('$row[0]','$row[1]','$row[2]', '{$data_emissao}','{$data_vencimento}','{$data_vencimento_orig}','$row[6]')";
//     $res = $conn->query($sql);


// };


