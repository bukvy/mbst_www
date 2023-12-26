<?php
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;
   
return [
 
    'bits'=>[
     0 => 'Блокировка',   
     1 => 'Программатор',
     2 => 'Просмотр сайта ',
     3 =>'Пограмматор + просмотр сайта',      
     4 => 'Редактирование сайта ',
     7 => 'Программатор + редактирование сайта',      
     1048576 => 'Разрешено все',
    ],

    'combine_array'=>[
        'Блокировка',
        'Только программатор',
        'Только просмотр сайта' ,      
        'Пограмматор + просмотр сайта',      
        'Только редактирование сайта' ,      
        'Программатор + редактирование сайта',      
        'Разрешено все' ,      
    ],

    'combine'=>[
        'Блокировка' => 0,
        'Только программатор' => 1,      
        'Только просмотр сайта' => 2,      
        'Пограмматор + просмотр сайта' => 3,      
        'Только редактирование сайта' => 4,      
        'Программатор + редактирование сайта' => 7,      
        'Разрешено все' => 1048576,      
    ]


];  