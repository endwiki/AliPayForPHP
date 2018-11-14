<?php

require_once 'src\AopClient.php';
require_once 'src\request\AlipayTradeAppPayRequest.php';

$aop = new JinZhiSu\AliPay\AopClient ();
$aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';
$aop->appId = '2016091900548592';
$aop->rsaPrivateKey = 'MIIEogIBAAKCAQEA4Usa83BQL/htBvtYNJuo5V5yccS3qHvEPGUMR0EoQAaN4PR0tJI1oDYv0+PPJvjddT82SzWm1ME18o46xA14gHd5Ycc6NigiF9kGv/5Wx2evTvobOFpUWSLyY7Her/gr8eK7M66PGDqv1yQ0CVGWiaEdT/K4XnXUCyDuwiag4NJjewPH4i1RExxLEJOqfQ5ClMgrLob+9uP9k+hdLvWlxJqyyWDg4OO3aI2on23xN1JgBv6BWI1JKwFxiM5MqEmg1ICcKDZgRFSZ+Szs0AGYkBwC+PdmrrI3PU8GtumQaUpvxTqwP96SRn3QLqTq0p+mj3995fjLPRQIqx7OQoZ0XwIDAQABAoIBAHkPcpv9bhlY1L07sloSit81sSmRG19dokURx1dCm+5Ll1GaClw9dLNyaqDheR7n+5hVL0eavNr2N5bu9oUC+A2QJZl1BMK1LhzCce4ZLWhZPsqhep79avW64aTQn2jPYk3IF+/djOboIjTpL00SmmG6QZYERy37AsY4HBQXzbsAT/vBVviLVqhq/Gn6Mc2QHm74PBb4iS6IHGI79rVZdjO0JBDVyTNqINBM+K4AiU0KNdHwIiSiH0MZeECY0ZxBG5GFDIPO6d7acfB6dcpNlwsqIHCJjxBBL5GR7f77DnCbgR6T4gVzIZwHdjpypYENGDYI63v4T2bWXdJRXk/RIYECgYEA/47iRzHfYQu0Cg0GRenVZuHpK0zVcEpOJ1VzwfN7kXHVRHgt427jnWNKsNN9IRZmrMc2YXS5+9AYQfWmBeW3k8hmLO0FbbD1D6RF4v1m6DacrCU1lle0JUzLcbZ3ZIipzagGPDkOE1eRsLAOMbQxe1buH5Eg7IsGXjjv7iSUFf0CgYEA4a7TUnEDvLVlbWiUDaJx4SwEuFs0Z+QsJbmvKXiJ7hPjYfO64mTzC0oiOCcteWDduNwtK0D1leUkEqgV4h1F7UZ8nXVhO8Bapkh7wRgEZ9MInioacg6HbzNhvR9Rn4WZpF30IQd5j3SdIbDFP25RI97iT0qyVc3PShPcaBNd1IsCgYAK2idzvINu3I9dqeXtTBu6zbcYFqAtr4oYE4Hh55QEvh+/U5cnREs4IMJINgLnR8s+ZQtDIjDPp6uQCX1uXK3qAaWNHNeRK+WML36kP/yBuef3S3E2HC1TNCqjfosdYsxLJmp1XjrhyWMvbJp9s9gyE6PzBTevs8umbqaJp1X+hQKBgExD6y/p9yxXVI5Tj+zHn5pLaNDwKVaOegjJphLqpBnraKTaW6ZUHPoMtGGrg6eH/4WQCkearSNZiwYu/S4rXE0hy8zeNNyfVULqLcAEIMEBROFGMyemF0iR4Y6qvcedu10bTvu2bfL3on4XIaEc45iuomXPRVLPuSQ8b/hPyx6fAoGAYl9jh3QBbs8dDSgdOmklG2+maIbnBSSoJWd8wKbwRJr+UQGAnMptB4aGXvBz9/dEUbkdVgkZHnHoeBT1sBVwsXMx9QezxtKPtB/6aiNE5X8tMT5lOPYZx3HTajz7G+D30rc0okPPw4lnyfqLsRztptuBIXo1W3VB/5i8DEToKPk=';
$aop->alipayrsaPublicKey= 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4KuDWMRwvlj1FyZAVMEB/0Mdro1FXKQB9pf43FkFh4h3jwmBcMvr9QdsucOZoNzi0Sl4/9jHnj/By1cHOgGBwDzx8v18aWY8obocEX8FBlIA4CM5P/ajJVywZUfyJjBuQXphsJGikLcZqIwyR5QWAcjjrN/A03kfBZhNyi5/bthr4YyBAvoPNF+M5P7MrN+FHp8az/hOV+ixBmUt+aXsGkKQMdTaC1MpP1shEtUouv/dNyKssZ7+wvwHzX9bxVAkqWuzwNWBb0MMrcwcG5EzEega+giGV9SXGcTlqDVozLg3QH2M6p3tzGgLflX9IvFw1fUW20HtNPU7hGga4h7AFwIDAQAB';
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset='UTF-8';
$aop->format='json';
$request = new JinZhiSu\AliPay\request\AlipayTradeAppPayRequest();
$request->setBizContent(json_encode([
    'out_trade_no' => date('YmdHis') . mt_rand(10000,99999),
    'body' => '商城商品',
    'subject' => '猎米商城',
    'goods_type' => 0,
]));
$result = $aop->sdkExecute($request);

var_dump($result);die();
