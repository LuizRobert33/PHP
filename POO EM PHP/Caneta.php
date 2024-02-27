<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        // Lógica para rabiscar
    }

    function tampar() {
        // Lógica para tampar
        $this->tampada = true;
    }

    function destampar() {
        // Lógica para destampar
        $this->tampada = false;
    }
}
?>