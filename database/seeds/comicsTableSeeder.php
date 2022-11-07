<?php

use Illuminate\Database\Seeder;

use App\comic;


class comicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsData = config('data.comics');
        foreach ($comicsData as $comicData) {
            $comic = new comic();
            $comic->title = $comicData->title;
            $comic->description = $comicData->description;
            $comic->thumb = $comicData->thumb;
            $comic->price = $comicData->price;
            $comic->series = $comicData->series;
            $comic->sale_date = $comicData->sale_date;
            $comic->type = $comicData->type;
            $comic->save();
        }
    }
}
