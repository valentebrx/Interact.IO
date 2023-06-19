
<?php

    function buscarQuantidadenotas($CNPJ){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT COUNT(CNPJ) FROM notas WHERE CNPJ = '{$CNPJ}'";        
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $qtdnotas = $row[0];

            return $qtdnotas;             
            
        }

    }


    function somarValoresnotas($CNPJ){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT  sum(valor) FROM notas WHERE CNPJ = '{$CNPJ}'";   
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $somarvalornotas = $row[0];

            return $somarvalornotas;             
            
        }

    }

    function tempoAtraso($CNPJ){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * from notas  WHERE CNPJ = '{$CNPJ}' ORDER by DATA_VENCIMENTO DESC LIMIT 1";   
        $res = $conn->query($sql);
        
        foreach ($res as $row){


            $primeira_data_vencimento = $row[4];
            
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('y-m-d');

            $origin = new DateTimeImmutable($date);
            $target = new DateTimeImmutable($primeira_data_vencimento);
            $dias_atrasos = $target->diff($origin);

            return  $dias_atrasos ;             
            
        }

    }


    function buscarPortador($CNPJ){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * from notas  WHERE CNPJ = '{$CNPJ}' ORDER by DATA_VENCIMENTO DESC LIMIT 1";        
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $notas = $row;

            return $notas;             
            
        }

    }

    function buscarTodasNotas($CNPJ){
    
        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * from notas  WHERE CNPJ = '{$CNPJ}' ORDER by DATA_VENCIMENTO";        
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $portador = $row[3];

            return $portador;             
            
        }

    }   


