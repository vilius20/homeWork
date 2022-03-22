<?php
declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}


function exercise1()
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */
    $arra = [];

    foreach (getCities() as $item) {
        foreach ($item as $key => $value) {
            if ($key == 'population') {
                array_push($arra, $value);
            }
        }
    }
    $arra = array_sum($arra);
    var_dump($arra);

}

// exercise1();

function exercise2()
{
    $arra = [];

    foreach (getCities() as $item) {
        foreach ($item as $key => $value) {
            if ($key == 'population') {
                array_push($arra, $value);
            }
        }
    }
    $arra = array_sum($arra);
    var_dump($arra);
}
// exercise2();

function exercise3()
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */

    foreach (getCities() as $item) {
        foreach ($item as $key => $value) {
            if ($key == 'population') {
                var_dump($value);
            }
        }
    }
}
// exercise3();

function exercise4()
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */

    $arra = [];

    foreach (getCities() as $item) {
        foreach ($item as $key => $value) {
            if ($key == 'population' && $value > 25000000) {
                array_push($arra, $value);
            }
        }
    }

    $arra = array_sum($arra);
    var_dump($arra);
}
// exercise4();

function exercise5()
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas: 
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */

    $arra = [];

    foreach (getCities() as $item) {
        if ($item['population'] > 25000000) {
            # code...
            array_push($arra, $item['name']);
        }
         
    }

    var_dump($arra);
}
// exercise5();

function exercise6()
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    foreach ($orderItems as $items) {
        foreach ($lowPriceItems as $low) {
            if ($items['name'] == $low) {
                var_dump($items['priceLow']);
            } 
        }
    }

}

exercise6();