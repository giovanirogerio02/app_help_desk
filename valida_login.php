<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

</head>

<body>

    <?php

    $opções_autenticator=false;


        $opções_app=array(
        array(
                'email' => 'Geovannijornalista30@outlook.com',
                'senha' => '4321'

        ),

        array(
            'email' => 'Geovannijornalista30@outlook.com',
            'senha' => '54321'

    )

    );

    foreach ($opções_app as $user) {
        if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
            $opção_autenticator=true;

        }
    }

    if($opções_autenticator) {
    echo "Opção Autenticado";
    }
    else {
        echo "Opção não encontrado";

    }

    ?>
</body>

</html>



