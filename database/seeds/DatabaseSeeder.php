<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\Heroine;
use App\Models\Logging;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heroine1 = Heroine::create([
            'name' => 'madoka kaito',
            'link_to_picture' => 'https://cdn.faptitans.com/s1/__3dc1/images/hero-all/tithero-05/x1/tithero-05-1.jpg',
            'discription' => 'katana scroolgirl ',
            'attack_type' => 'melee',
        ]);

        $heroine2 = Heroine::create([
            'name' => 'marika tosigawa',
            'link_to_picture' => 'https://cdn.faptitans.com/s1/__c45f/images/hero-all/tithero-134/x1/tithero-134-1.jpg',
            'discription' => 'winter girl with spear ',
            'attack_type' => 'ranged',
        ]);

        $heroine3 = Heroine::create([
            'name' => 'saeki chika',
            'link_to_picture' => 'https://cdn.faptitans.com/s1/__27b8/images/hero-all/tithero-142/x1/tithero-142-1.jpg',
            'discription' => 'orange haired girl druid glasses',
            'attack_type' => 'druid',
        ]);

        $heroine4 = Heroine::create([
            'name' => 'chiasa saike',
            'link_to_picture' => 'https://cdn.faptitans.com/s1/__cce7/images/hero-all/tithero-26/x1/tithero-26-1.jpg',
            'discription' => 'girl with scythe reaper hoodie black dress',
            'attack_type' => 'cleric',
        ]);


        Logging::create([
            'heroine_id' => $heroine1->getKey(),
            'promoted' => true,
            'new_level' => 666,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine2->getKey(),
            'promoted' => true,
            'new_level' => 12,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine1->getKey(),
            'promoted' => true,
            'new_level' => 701,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine1->getKey(),
            'promoted' => true,
            'new_level' => 707,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine4->getKey(),
            'promoted' => true,
            'new_level' => 21,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine3->getKey(),
            'promoted' => true,
            'new_level' => 1,
            'promotion_received' => Carbon::now(),
        ]);

        Logging::create([
            'heroine_id' => $heroine1->getKey(),
            'promoted' => true,
            'new_level' => 666,
            'promotion_received' => Carbon::now(),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
