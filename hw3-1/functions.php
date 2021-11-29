<?php
const NAMES = [
    'Ророноа Зоро', 'Нами', 'Нико Робин', 'Монки Д. Луффи', 'Усопп'
];

function createUser()
{
    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}