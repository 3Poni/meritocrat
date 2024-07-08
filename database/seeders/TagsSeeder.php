<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tag::insert(
            [
                [
                    'title' => 'Бухгалтерия',
                ],
                [
                    'title' => 'Расчетный счет',
                ],
                [
                    'title' => 'Продажи и маркетинг',
                ],
                [
                    'title' => 'Телефония',
                ],
                [
                    'title' => 'Подбор персонала',
                ],
                [
                    'title' => 'Юриспруденция',
                ],
                [
                    'title' => 'CRM/ERP',
                ],
                [
                    'title' => 'Онлайн касса и эквайринг',
                ],
                [
                    'title' => 'Маркировка',
                ],
            ]
        );
    }
}
