<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['name' => 'Dr Nalini Mahajan', 'specialty' => 'Massage Therapist', 'image' => 'doc-1.jpg'],
            ['name' => 'Dr. Shree Kumar', 'specialty' => 'Physical Therapist', 'image' => 'doc-2.jpg'],
            ['name' => 'Dr Uday Devgan', 'specialty' => 'Acupuncturist', 'image' => 'doc-3.jpg'],
            ['name' => 'Dr Vijay Kumar', 'specialty' => 'Holistic Therapist', 'image' => 'doc-4.jpg'],
            ['name' => 'Dr. Suresh Isawe', 'specialty' => 'Chiropractor', 'image' => 'doc-5.jpg'],
            ['name' => 'Dr Mukul Varma', 'specialty' => 'Neurologist', 'image' => 'doc-6.jpg'],
            ['name' => 'Dr Zahid Rahi', 'specialty' => 'Mental Health Therapist', 'image' => 'doctor4.avif'],
            ['name' => 'Dr Alia Varma', 'specialty' => 'Art Therapist', 'image' => 'doctor3.avif'],
            ['name' => 'Dr Raj Kumar', 'specialty' => 'Psychiatrist', 'image' => 'doctor2.avif'],
            ['name' => 'Dr Zarah Khan', 'specialty' => 'Family Therapist', 'image' => 'doctor1.avif'],
        ]);
    }
}
