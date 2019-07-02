<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->name = 'Blog ca nhan';
        $blog->content = 'Quang cao';
        $blog->dob = '2015-02-01';
        $blog->image = 'hinh anh';
        $blog->save();

        $blog = new Blog();
        $blog->name = 'Blog doanh nghiep';
        $blog->content = 'Nuoc gia khat';
        $blog->dob = '2015-02-01';
        $blog->image = 'hinh anh';
        $blog->save();
    }
}
