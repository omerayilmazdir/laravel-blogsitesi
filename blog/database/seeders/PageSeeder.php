<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\String\s;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach ($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>str_slug($page),
                'image'=>'https://btm.istanbul/storage/uploads/news/2111/conversions/B2B-nedir-3-large.jpg',
                'content'=>'There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some form,
                by injected humour, or randomised words which dont
                look even slightly believable. If you are going to use a
                passage of Lorem Ipsum, you need to be sure there isnt anything
                embarrassing hidden in the middle of text. All the Lorem Ipsum
                generators on the Internet tend to repeat predefined chunks as necessary,
                making this the first true generator on the Internet. It uses a dictionary
                of over 200 Latin words, combined with a handful of model sentence structures,
                to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                therefore always free from repetition,
                injected humour, or non-characteristic words etc.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
