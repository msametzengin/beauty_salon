<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Traitment;
use App\Models\Patient;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'doctor', 'guard_name' => 'web']);


        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123456'
        ])->assignRole('admin');

        Admin::create([
            'name' => 'Emirhan',
            'email' => 'karabulut@gmail.com',
            'password' => '123456'
        ])->assignRole('admin');

        Doctor::create([
            'name' => 'Mehmet Kaya',
            'email' => 'mehmet@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');

        Doctor::create([
            'name' => 'Ayşe Yılmaz',
            'email' => 'ayse@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');

        Doctor::create([
            'name' => 'Zeynep Demir',
            'email' => 'zeynep@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');

        Doctor::create([
            'name' => 'Samet Zengin',
            'email' => 'msamet@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');

        Doctor::create([
            'name' => 'Aleyna Çakır',
            'email' => 'aleyna@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');

        Doctor::create([
            'name' => 'Ezgi Çiçek',
            'email' => 'ezgi@gmail.com',
            'password' => '123456'
        ])->assignRole('doctor');



        $traitments = [
            'Cilt Bakımı',
            'Saç Bakımı',
            'Makyaj',
            'Vücut Bakımı - Bölgesel İncelme',
            'Vücut Bakımı - Selülit Tedavisi',
            'Vücut Bakımı - Lenf Drenaj Masajı',
            'Tırnak Bakımı',
            'Lazer Epilasyon',
        ];

        foreach ($traitments as $trait) {
            Traitment::create([
                'name' => $trait,
            ]);
        }
   
        $this->call([
        PatientSeeder::class,
        ]);


        $doctors = User::role('doctor')->pluck('id')->toArray();
        $patients = Patient::pluck('id')->toArray();
        $traitments = Traitment::pluck('id')->toArray();

        if (!empty($doctors) && !empty($patients) && !empty($traitments)) {
            foreach (range(1, 20) as $i) {
                Appointment::create([
                    'patient_id' => $patients[array_rand($patients)],
                    'doctor_id' => $doctors[array_rand($doctors)],
                    'traitment_id' => $traitments[array_rand($traitments)],
                    'date' => Carbon::now()->addDays(rand(1, 30))->setTime(rand(9, 17), [0, 30][rand(0, 1)]),
                    'status' => collect(['waiting', 'accepted', 'denied'])->random(),
                ]);
            }
        }

    
    }
}
