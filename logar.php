<?php
    session_start ();
    
    if (isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['ip'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $url = 'http://'.$_POST['ip'].':8080/IntegratedWS/Login';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array("usuario"=>$usuario,"senha"=>$senha)));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        if ($response == "200") {
            $_SESSION['usuario'] = $usuario;
        }

        echo $response;
    }

    