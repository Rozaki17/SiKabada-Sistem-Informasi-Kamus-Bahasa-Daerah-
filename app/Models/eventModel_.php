<?php

namespace App\Models;

class eventModel
{
    private static $eventsPost = [
    [
        'title' => 'Judul Event 1',
        'slug' => 'judul-event-1',
        'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, nesciunt dicta. Veniam qui fugit consectetur quidem magni doloremque corrupti, accusantium tenetur vitae earum esse hic quas est beatae, provident quisquam odio error in, dolorum quis. Praesentium, non! Quod, adipisci illo consequuntur ea, accusantium magni repellat veniam ex repellendus, cupiditate tempora."
    ],
    [
        'title' => 'Judul Event 2',
        'slug' => 'judul-event-2',
        'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut quaerat recusandae sint quam aut voluptate nesciunt in! Aut, magnam? Consequatur accusamus corporis id fugiat, libero provident eum quaerat modi optio amet porro eos harum sunt aperiam, aliquam aliquid asperiores ullam. Doloribus optio atque porro eos modi eius cum vel. Odio beatae expedita natus, vitae provident rem nam non voluptatum placeat mollitia consequatur, nobis esse similique dolorem eligendi illum necessitatibus. Quasi, nulla autem nesciunt illo optio ullam, rerum mollitia corporis quibusdam maiores corrupti et veniam quidem labore vitae voluptatum fuga amet provident. Amet eos soluta quaerat ipsam odit sed officia ipsum?"
    ],
    [
        'title' => 'Judul Event 3',
        'slug' => 'judul-event-3',
        'body' => "Lorem ipsum dolor sit, amet consecteturrro eos harum sunt aperiam, aliquam aliquid asperiores ullam. Doloribus optio atquam non voluptatum placeat mollitia consequatur, nobis esse similique dolorem eligendio optio ullam, rerum mollitia corporis quibusdam maiores corrupti et veniam quidem labore vitae voluptatum fuga amet provident. Amet eos soluta quaerat ipsam odit sed officia ipsum?"
    ]
    ];

    public static function all () {
        return collect(self::$eventsPost);
    }

    public static function find ($slug) {
        $events = static::all();
        return $events->firstWhere('slug', $slug);
    }
}
