<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*served routes:
		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'logincontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['categoria'] = 'categoriacontroller/index';
$route['categoria/salvar'] = 'categoriacontroller/salvar';
$route['categoria/novo'] = 'categoriacontroller/novo';
$route['categoria/editar/(:num)']= 'categoriacontroller/editar/$1';
$route['categoria/atualizar/(:num)'] = 'categoriacontroller/atualizar/$1';
$route['categoria/abrir/(:num)'] = 'categoriacontroller/abrir/$1';
$route['categoria/excluir/(:num)'] = 'categoriacontroller/excluir/$1';
$route['categoria/json'] = 'categoriacontroller/json';
$route['categoria/json2'] = 'categoriacontroller/json2';



$route['cardapio'] = 'cardapiocontroller/index';
$route['cardapio/salvar'] = 'cardapiocontroller/salvar';
$route['cardapio/novo'] = 'cardapiocontroller/novo';
$route['cardapio/editar/(:num)']= 'cardapiocontroller/editar/$1';
$route['cardapio/atualizar/(:num)'] = 'cardapiocontroller/atualizar/$1';
$route['cardapio/abrir/(:num)'] = 'cardapiocontroller/abrir/$1';
$route['cardapio/excluir/(:num)'] = 'cardapiocontroller/excluir/$1';
$route['cardapio/json'] = 'cardapiocontroller/json';
$route['cardapio/json2'] = 'cardapiocontroller/json2';
$route['cardapio/mobile'] = 'cardapiocontroller/mobile';


$route['mesa'] = 'mesacontroller/index';
$route['mesa/salvar'] = 'mesacontroller/salvar';
$route['mesa/novo'] = 'mesacontroller/novo';
$route['mesa/editar/(:num)']= 'mesacontroller/editar/$1';
$route['mesa/atualizar/(:num)'] = 'mesacontroller/atualizar/$1';
$route['mesa/abrir/(:num)'] = 'mesacontroller/abrir/$1';
$route['mesa/excluir/(:num)'] = 'mesacontroller/excluir/$1';
$route['mesa/json'] = 'mesacontroller/json';
$route['mesa/jsonteste'] = 'mesacontroller/jsonteste';
$route['mesa/jsonid/(:num)'] = 'mesacontroller/jsonid/$1';

$route['garcon'] = 'garconcontroller/index';
$route['garcon/salvar'] = 'garconcontroller/salvar';
$route['garcon/novo'] = 'garconcontroller/novo';
$route['garcon/editar/(:num)']= 'garconcontroller/editar/$1';
$route['garcon/atualizar/(:num)'] = 'garconcontroller/atualizar/$1';
$route['garcon/abrir/(:num)'] = 'garconcontroller/abrir/$1';
$route['garcon/excluir/(:num)'] = 'garconcontroller/excluir/$1';
$route['garcon/json'] = 'garconcontroller/json';
$route['garcon/jsonid/(:num)'] = 'garconcontroller/jsonid/$1';
$route['garcon/avaliacao'] = 'garconcontroller/avaliacao';





$route['login'] = 'logincontroller/index';
$route['login/verificar'] = 'logincontroller/verificar';
$route['login/logout'] = 'logincontroller/logout';

$route['abertura'] = 'aberturacontroller/index';
$route['abertura/salvar'] = 'aberturacontroller/salvar';
$route['abertura/novo'] = 'aberturacontroller/novo';
$route['abertura/periodo/(:num)'] = 'aberturacontroller/periodoabrir/$1';


$route['pedido'] = 'pedidocontroller/index';
$route['pedido/salvar'] = 'pedidocontroller/salvar';
$route['pedido/novo'] = 'pedidocontroller/novo';
$route['pedido/editar/(:num)']= 'pedidocontroller/editar/$1';
$route['pedido/atualizar/(:num)'] = 'pedidocontroller/atualizar/$1';
$route['pedido/abrir/(:num)'] = 'pedidocontroller/abrir/$1';
$route['pedido/excluir/(:num)'] = 'pedidocontroller/excluir/$1';
$route['pedido/json'] = 'pedidocontroller/json';


$route['arquivo'] = 'arquivocontroller/index';
$route['arquivo/salvar'] = 'arquivocontroller/salvar';
$route['arquivo/novo'] = 'arquivocontroller/novo';
$route['arquivo/editar/(:num)']= 'arquivocontroller/editar/$1';
$route['arquivo/atualizar/(:num)'] = 'arquivocontroller/atualizar/$1';
$route['arquivo/abrir/(:num)'] = 'arquivocontroller/abrir/$1';
$route['arquivo/excluir/(:num)'] = 'arquivocontroller/excluir/$1';
$route['arquivo/baixar/(:num)'] = 'arquivocontroller/baixar/$1';
$route['arquivo/json'] = 'arquivocontroller/json';
$route['arquivo/jsonteste'] = 'arquivocontroller/jsonteste';
$route['arquivo/jsonid/(:num)'] = 'arquivocontroller/jsonid/$1';