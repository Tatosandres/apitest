<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
  
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Gustavo",
            "email" => "andinoc0285@gmail.com",
            "password" => Hash::make("Andino01."),
            "is_active" => 1
        ]);
  
        User::create([
            "name" => "Two",
            "email" => "two@gmail.com",
            "password" => Hash::make("123456"),
            "is_active" => 0
        ]);
    }
}