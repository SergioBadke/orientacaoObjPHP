<?php

require_once("modelos/Pedido.php");
require_once("modelos/Prato.php");


function listarPedidos($pedidos) {
    if(count($pedidos) > 0) {
        foreach($pedidos as $i => $pedido)
            printf($pedidos);
    } else 
        echo "Nenhum prato.\n";
}


function retornaPrato($prato, $numero) {
    foreach($prato as $p) {
        if($numero == $p->getNumero())
            return $p;
    }
}
$menu = array();

$camaraoMil = new Prato();
$camaraoMil->setNome("CAMARÃO À MILANESA");
$camaraoMil->setNumero(1);
$camaraoMil->setValor(110);

array_push($menu, $camaraoMil);

$pizzaMarg = new Prato();
$pizzaMarg->setNome("PIZZA MARGHERITA");
$pizzaMarg->setNumero(2);
$pizzaMarg->setValor(80.00);

array_push($menu, $pizzaMarg);

$macarraoCarb = new Prato();
$macarraoCarb->setNome("MACARRÃO Á CARBONARA");
$macarraoCarb->setNumero(3);
$macarraoCarb->setValor(60.00);

array_push($menu, $macarraoCarb);

$bifeParm = new Prato();
$bifeParm->setNome("BIFE Á PARMEGIANA");
$bifeParm->setNumero(4);
$bifeParm->setValor(75.00);

array_push($menu, $bifeParm);

$risotoFun = new Prato();
$risotoFun->setNome("RISOTO AO FUNGHI");
$risotoFun->setNumero(5);
$risotoFun->setValor(70.00);

array_push($menu, $risotoFun);


$escolha;

do {
    print("ESCOLHA\n");
    print("1-CADASTRAR\n");
    print("2-CANCELAR\n");
    print("3-LISTAR\n");
    print("4-TOTAL VENDAS\n");
    print("0-SAIR\n");

    $escolha = readline("Escolha: ");
    $pedidos=array();
    $valorTotal=0;

    switch ($escolha) {
        case 1:
            //Cadastrar
            for ($i = 0; $i < 5; $i++) {
                print "1-Camarao-110";
                print "1-Camarao-110";
                print "1-Camarao-110";
                print "1-Camarao-110";
                print "1-Camarao-110";
            }
            $pedido=new Pedido();
            $pedido->setNomeCliente(readline("Cliente: "));
            $pedido->setNomeGarcom(readline("Garçom: "));
            $prato = null;
            while($prato == null) {
                $Numero = readline("Numero do Prato: ");
                $prato = retornaPrato($prato, $numero);
            }
            $pedido->setPrato($p);

            array_push($carros, $c);
            $valorTotal=$valorTotal+$pedido->getPrato()->getValor();

            break;

        case 2:
            listarPedidos($pedidos);
            if(count($pedidos) > 0) {
                $idx = readline("Informe o índice do pedido para excluir: ");
                if($idx > 0 && $idx <= count($pedidos))
                    array_splice($pedidos, $idx-1, 1);
                else
                    echo "Índice inválido!\n";
            }

            break;

        case 3:
            listarPedidos($pedidos);
            break;

        case 4:
            //Valor total
            print $valorTotal;
            break;

        default:
        echo "Dado invalido.";
    }
} while ($escolha != 0);
