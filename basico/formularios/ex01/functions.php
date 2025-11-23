<?php

function exibir_erro($erro) {
    if (!empty($erro) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;
    } else {
        return false;
    }
}