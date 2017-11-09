<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/11/2017
 * Time: 16:58
 */
use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

if($_POST['message'] != null){
    $webhook = new Client('https://discordapp.com/api/webhooks/378226984112619522/TedSca02HrJy3BNJ7Ktaqz9BmhZ_YZ6ognWmxwpo2SKXcobD1ERubQ2mqer5zVAWsday');
    $webhook->username("test-site")->message($_POST['message'])->send();
}