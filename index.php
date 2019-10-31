<?php

//Есть сервис для отправки уведомлений
interface Notification
{
    public static function send($param, $text);
}
class Email implements Notification
{
    public static function send($param, $text)
    {
        // TODO: Implement send() method.
    }
}
class Sms implements Notification
{
    public static function send($param, $text)
    {
        // TODO: Implement send() method.
    }
}
class WebPush implements Notification
{
    public static function send($param, $text)
    {
        // TODO: Implement send() method.
    }
}


//Этот сервис сконфигурирован и отдан в клиентский код для выполнения рассылки
$text = 'Какой-то текст';
foreach ($users as $user) {
    Email::send($user->email, $text);
    Sms::send($user->phone, $text);
    WebPush::send('localhost', $text);
}
