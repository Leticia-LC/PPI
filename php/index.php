<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página</h1>
    <?php
        $minhavar = " Mundão perdido";
        echo "Hello $minhavar";
        echo "Hello \$minhavar";
        echo 'Hello $minhavar'."<br>";
        echo gettype($minhavar);
        $minhavar = 2;
        echo " $minhavar".gettype($minhavar)."<br>";
        $minhavar = 2.0;
        echo " $minhavar".gettype($minhavar)."<br>";

        class Pessoa{
            public $nome;
            public function __construct($n){
                $this->nome=$n;

            }
            public function alteranome($n){
                $this->nome=$n;

            }
            public function get_nome(){
                return $this->nome;

            }
            public function retornanome(){
                return strlen($this->nome);
            }

        }

        $p1 = new Pessoa("Arthur");
        $p2 = new Pessoa("Maria");
        $p3 = new Pessoa("Gabi");

        echo "p1.nome=".$p1->get_nome()." <br>".
             "p2.nome=".$p2->get_nome()." <br>".
             "p3.nome=".$p3->get_nome()." <br>";

            $pessoas=array($p1, $p2, $p3);
            foreach($pessoas as $pessoa){
                echo "Nome:".$pessoa->get_nome()."<br>";
                

            }



        $p1->alteranome("Letícia");
        echo $p1->get_nome();


    ?>
        
    
</body>
</html>