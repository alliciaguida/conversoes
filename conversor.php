<?php

//echo'Digite 1 para converter um número romano para arábico e 2 para converter um número arábico para romano';
$tipoConversao = readline('Digite 1 para converter um número romano para arábico e 2 para converter um número arábico para romano: ');
        switch ($tipoConversao) {
            case '1':
                $numeroConversao = readline('Digite o numero romano para conversão: ');        
                RomanoParaArabico($numeroConversao);        
                break;
            
                case '2':
                $numeroConversao = readline('Digite o numero arabico para conversão: ');
                ArabicoParaRomano(intval($numeroConversao));
                break;

            default:
            echo'Erro, informar apenas 1 ou 2';
                break;
        }



        function RomanoParaArabico($romano) {
            $romano = strtoupper($romano);
            $romanos = array(
                'M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1,
            );
            
            $resultado = 0;
            
            foreach ($romanos as $key => $valor) {
                while (strpos($romano, $key) === 0) {
                    $resultado += $valor;
                    $romano = substr($romano, strlen($key));
                }
            }
            echo $resultado;
        }

        function ArabicoParaRomano($numeros) {
            $n = intval($numeros); 
            $res = ''; 


            $numeroRomano = array( 
                'M'  => 1000, 
                'CM' => 900, 
                'D'  => 500, 
                'CD' => 400, 
                'C'  => 100, 
                'XC' => 90, 
                'L'  => 50, 
                'XL' => 40, 
                'X'  => 10, 
                'IX' => 9, 
                'V'  => 5, 
                'IV' => 4, 
                'I'  => 1); 

            foreach ($numeroRomano as $romano => $numero){ 
                $check = intval($n / $numero); 
                $res .= str_repeat($romano, $check); 
                $n = $n % $numero; 
            } 

            // return the result
            echo ($res); 
        }
        ?>

