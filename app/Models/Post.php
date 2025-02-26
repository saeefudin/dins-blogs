<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
        public static function all() {
            return [
                [
                    'id' => '1',
                    'slug' => 'aplikasi-photobox-indonesia-boothable',
                    'title' => 'Aplikasi Photobox Indonesia - BOOTHABLE ',
                    'author' => 'Edins',
                    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, est facilis maxime, eum iusto, repellat minima quidem dignissimos error harum nisi animi laborum quod beatae omnis culpa ut veritatis reiciendis?'
                ],
                [
                    'id' => '2',
                    'slug' => 'cara-setting-photostrip-printer-rx1',
                    'title' => 'Cara Setting Photostrip Printer RX1 ',
                    'author' => 'Edins',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nostrum molestias cupiditate voluptate doloribus, quia nulla obcaecati beatae cum tempora! Vel illum velit nesciunt eveniet, aliquam quisquam sit voluptatum vitae?'
                ]
        
                ];
        }
        
        public static function find($slug) :array 
        {
                $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

                if(! $post ) {
                        abort(404);
                }
                return $post;
        }
    }