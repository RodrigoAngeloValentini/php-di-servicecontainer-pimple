<?php

$container['cliente'] = $container->factory(function($c) {
    return new \SON\Cliente($c['conexao']);
});

$container['conexao'] = $container->factory(function ($c) {
    return new \SON\Conexao($c['host'],$c['db'],$c['user'],$c['password']);
});
