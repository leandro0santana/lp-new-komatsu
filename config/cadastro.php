<?php
$data = array("idConnect" => "213", "token" => "ROT2VC86RT3LVZQE9B2OV6KDIQ4XW95ASZDY71BF6GI0SRLXES", "user" => "leandroc", "empresa" => "Komatsu", "contato" => $_POST['nome'], "telefone" => $_POST['telefone'], "email" => $_POST['email'], "assunto" => "Teste Komatsu", "mensagem" => "Teste Komatsu");
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://api.engbox.com.br/dbm-contactus/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);                                                                                                                   
 
$result = curl_exec($ch);

if($result) {
  header("Location: ../sucesso.html");
}