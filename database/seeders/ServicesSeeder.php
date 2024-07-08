<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::insert(
            [
                [
                    'title' => 'Бухгалтерский учет',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Бухгалтерский учет',
                    'img' => '/img/icons/buhg.svg',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Налогооблажение',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Налогооблажение',
                    'img' => '/img/taxes.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Юридический консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Юридический консалтинг',
                    'img' => '/img/consalting.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Стратегический консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Стратегический консалтинг',
                    'img' => '/img/seo.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Операционный консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Операционный консалтинг',
                    'img' => '/img/pencil.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Инвестиционный консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Инвестиционный консалтинг',
                    'img' => '/img/graph.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Финансовый консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Финансовый консалтинг',
                    'img' => '/img/money.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Кадровый консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Кадровый консалтинг',
                    'img' => '/img/hr.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Внешние связи и GR',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Внешние связи и GR',
                    'img' => '/img/share.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Маркетинг и реклама',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Маркетинг и реклама',
                    'img' => '/img/media.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Digital-услуги',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Digital-услуги',
                    'img' => '/img/digital.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Политический консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.admin',
                    'header' => 'Политический консалтинг',
                    'img' => '/img/castle.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Международный консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.',
                    'header' => 'Международный консалтинг',
                    'img' => '/img/community.png',
                    'url' => 'admin',
                ],
                [
                    'title' => 'Лингвистический консалтинг',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dignissimos dolores excepturi facere fuga ipsum iste numquam odit quod totam? Doloremque eaque magnam maiores minima molestiae quia quos ratione repellat.',
                    'header' => 'Лингвистический консалтинг',
                    'img' => '/img/language.png',
                    'url' => 'admin',
                ],
            ]
        );
    }
}
