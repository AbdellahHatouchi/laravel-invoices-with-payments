<?php

return [
    'date' => [
        /**
         * Carbon date format
         */
        'format'         => 'Y-m-d',
        /**
         * Due date for payment since invoice's date.
         */
        'pay_until_days' => 7,
    ],

    'serial_number' => [
        'series'           => 'AA',
        'sequence'         => 1,
        'sequence_padding' => 5,
        'delimiter'        => '.',
        /**
         * Supported tags {SERIES}, {DELIMITER}, {SEQUENCE}
         */
        'format'           => '{SERIES}{DELIMITER}{SEQUENCE}',
    ],

    'currency' => [
        'code'                => 'eur',
        'fraction'            => 'ct.',
        'symbol'              => '€',
        'decimals'            => 2,
        'decimal_point'       => '.',
        'thousands_separator' => '',
        /**
         * Supported tags {VALUE}, {SYMBOL}, {CODE}
         */
        'format'              => '{VALUE} {SYMBOL}',
    ],

    'paper' => [
        // A4 =  210 mm x  297 mm =  595 pt x  842 pt
        'size'        => 'a4',
        'orientation' => 'portrait',
    ],

    'seller' => [
        /**
         * Class used in templates via $invoice->seller
         *
         * Must implement LaravelDaily\Invoices\Contracts\PartyContract
         *      or extend LaravelDaily\Invoices\Classes\Party
         */
        'class' => \LaravelDaily\Invoices\Classes\Seller::class,

        /**
         * Default attributes for Seller::class
         */
        'attributes' => [
            'name'          => 'Towne, Smith and Ebert',
            'address'       => '89982 Pfeffer Falls Damianstad, CO 66972-8160',
            'code'          => '41-1985581',
            'vat'           => '123456789',
            'phone'         => '760-355-3930',
            'custom_fields' => [
                /**
                 * Custom attributes for Seller::class
                 *
                 * Used to display additional info on Seller section in invoice
                 * attribute => value
                 */
                'SWIFT' => 'BANK101',
            ],
        ],
    ],
];