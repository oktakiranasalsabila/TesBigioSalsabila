<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
          Guru::factory(5)->create();
          User::factory(5)->create();
          Siswa::factory(5)->create();
          \App\Models\Lokal::create([
            'lokal'=>'X IPA',
           ]);
           \App\Models\Lokal::create([
            'lokal'=>'XI IPA',
           ]);
           \App\Models\Lokal::create([
            'lokal'=>'XII IPA',
           ]);
           \App\Models\Lokal::create([
            'lokal'=>'X IPS',
           ]);
           \App\Models\Lokal::create([
            'lokal'=>'XI IPS',
           ]);
           \App\Models\Lokal::create([
            'lokal'=>'XII IPS',
           ]);
           \App\Models\Jenkel::create([
            'jenkel'=>'Laki-laki',
           ]);
           \App\Models\Jenkel::create([
            'jenkel'=>'Perempuan',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Bahasa Indonesia',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Bahasa Inggris',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Kepala Sekolah',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Wakil Kepala Sekolah',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Matematika',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Fisika',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Kimia',
           ]);
           \App\Models\Jabatan::create([
            'jabatan'=>'Guru Biologi',
           ]);
           \App\Models\Mapel::create([
            'mapel'=>'Biologi',
           ]);
           \App\Models\Mapel::create([
            'mapel'=>'kimia',
           ]);
           \App\Models\Mapel::create([
            'mapel'=>'Fisika',
           ]);
           \App\Models\Mapel::create([
            'mapel'=>'Matematika',
           ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
