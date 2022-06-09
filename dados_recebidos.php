<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro realizado</title>
    </head>
    <body>

        <div id='corpo'>
            <main>
                <h1> Dados informados</h1>
                
                <?php

                    $nome = $_POST['nome'];
                    $data = $_POST['data'];
                    $sexo = $_POST['sexo'];
                    $email = $_POST['email'];

                    echo "Nome: " . $nome . "<br>";
                    echo "Data de nascimento: " . $data . "<br>";
                    echo "Sexo: " . $sexo . "<br>";
                    echo "E-mail: " . $email . "<br>";

                    $contato = array ("Nome" => $nome, "Data" => $data, "Sexo" => $sexo, "E-mail" => $email);
            
                    echo "<hr> Vetor criado: <br>";
                    print_r($contato);

                    if(file_exists("dados.json")){
                        $string = file_get_contents("dados.json");
                        $json = json_decode($string, true);

                    }

                    $json["contatos"][] = $contato;

                    $fp = fopen('dados.json', 'w');
                    if($fp == false) {
                        print(error_get_last());
                    }

                    fwrite($fp, json_encode($json));
                    fclose($fp);
                ?>

                    <h3 style = 'text-align:center;'> Cadastro feito com sucesso! <br> Aguarde alguns instantes que será encaminhado para o e-mail cadastrado o cupom de 50% de desconto. </h3>
                </main>
                </div>

            </main>
        </div> 




    </body>
</html>