<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Muscle;

use function PHPSTORM_META\map;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Muscle::create([
        'muscle'=>'back',
       'image'=>'/images/muscles/back.jpeg',
       'link'=>'back',
       ]);
       Muscle::create([
        'muscle'=>'chest',
       'image'=>'/images/muscles/chest.jpeg',
       'link'=>'chest',
       ]);
       Muscle::create([
        'muscle'=>'upper arms',
       'image'=>'/images/muscles/upperarms.jpeg',
       'link'=>'upper%20arms',
       ]);

       Muscle::create([
        'muscle'=>'lower arms',
       'image'=>'/images/muscles/lowerarms.jpeg',
       'link'=>'lower%20arms',
       ]);
       Muscle::create([
        'muscle'=>'upper legs',
       'image'=>'/images/muscles/upperlegs.jpeg',
       'link'=>'upper%20legs',
       ]);
        Muscle::create([
        'muscle'=>'lower legs',
       'image'=>'/images/muscles/lowerlegs.jpeg',
       'link'=>'lower%20legs',
       ]); Muscle::create([
        'muscle'=>'cardio',
       'image'=>'/images/muscles/cardio.jpeg',
       'link'=>'cardio',
       ]);
       Muscle::create([
        'muscle'=>'shoulders',
        'image'=>'/images/muscles/shoulders.jpeg',
        'link' =>'shoulders'
       ]);
       Muscle::create([
        'muscle'=>'abs',
        'image'=>'https://c4.wallpaperflare.com/wallpaper/707/502/498/power-muscles-pose-abs-hd-wallpaper-preview.jpg',
        'link'=>'waist',
    ]);

    
        //
    }
}
