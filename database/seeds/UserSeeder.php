<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'user_id' => "USR0001",
                'first_name' => "Alim",
                'last_name' => "Rafli",
                'email' => "alim@mail.com",
                'password' => bcrypt("P@ssw0rd"),
                'birth_date' => Carbon::parse("25-09-1998"),
                'birth_place' => "Jakarta",
                'gender' => "Male",
                'phone' => "081208120812",
                'address' => "Jalan Sesama",
                'university' => "Universitas Bina Nusantara",
                'major' => "Computer Science",
                'degree' => "S1",
                'role_id' => "ROLE001",
                'photo_url' => "",
            ], [
                  "user_id"=> "USR0002",
                  "first_name"=> "Enrico",
                  "last_name"=> "Bortol",
                  "email" => "Enrico@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("27-11-1990"),
                  "birth_place"=> "Erfurt",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Privredna Akademija (Business Academy)",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0003",
                  "first_name"=> "Chen",
                  "last_name"=> "Keightley",
                  "email" => "Chen@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("25-8-1998"),
                  "birth_place"=> "Ciheras",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "National Open University of Nigeria",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0004",
                  "first_name"=> "Arch",
                  "last_name"=> "Calyton",
                  "email" => "Arch@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("15-2-1996"),
                  "birth_place"=> "Chashnikovo",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Jarvis Christian College",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0005",
                  "first_name"=> "Melvin",
                  "last_name"=> "Rowlands",
                  "email" => "Melvin@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("28-10-1997"),
                  "birth_place"=> "Hvozdná",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Taj International College",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0006",
                  "first_name"=> "Giffie",
                  "last_name"=> "Cancellieri",
                  "email" => "Giffie@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("10-11-1992"),
                  "birth_place"=> "Boquira",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Polytechnic Institute of Milan",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0007",
                  "first_name"=> "Tess",
                  "last_name"=> "Dewer",
                  "email" => "Tess@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("29-3-1997"),
                  "birth_place"=> "Vári",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Kaduna State University",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0008",
                  "first_name"=> "Rockwell",
                  "last_name"=> "McCandless",
                  "email" => "Rockwell@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("3-8-1990"),
                  "birth_place"=> "Thio",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Royal School of Library and Information Science",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0009",
                  "first_name"=> "Ricca",
                  "last_name"=> "Linklet",
                  "email" => "Ricca@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=>Carbon::parse("25-4-1987"),
                  "birth_place"=> "Matsubase",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Milwaukee Institute of Art and Design",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0010",
                  "first_name"=> "Niko",
                  "last_name"=> "Lighten",
                  "email" => "Niko@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("18-9-1992"),
                  "birth_place"=> "Paokmotong Utara",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Dongseo University",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0011",
                  "first_name"=> "Jennifer",
                  "last_name"=> "Scollan",
                  "email" => "Jennifer@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("27-3-1999"),
                  "birth_place"=> "Besançon",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of the Cordilleras",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0012",
                  "first_name"=> "Danita",
                  "last_name"=> "Brickner",
                  "email" => "Danita@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("19-1-1993"),
                  "birth_place"=> "Dambulla",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Adiban Higher Education Institue",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0013",
                  "first_name"=> "Grannie",
                  "last_name"=> "Del Monte",
                  "email" => "Grannie@mail.com",
                  "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("2-9-1996"),
                  "birth_place"=> "Morden",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Bauchi State University, Gadau",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0014",
                  "first_name"=> "Brannon",
                  "last_name"=> "Aujean",
                  "email" => "Brannon@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("1-10-1993"),
                  "birth_place"=> "Driyorejo",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Universitas Katolik Indonesia Atma Jaya",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0015",
                  "first_name"=> "Arluene",
                  "last_name"=> "Gloster",
                  "email" => "Arluene@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("6-4-1992"),
                  "birth_place"=> "Bella Vista",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "College of Nursing and Allied Health Scinces",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0016",
                  "first_name"=> "Zolly",
                  "last_name"=> "Camsey",
                  "email" => "Zolly@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("20-10-1988"),
                  "birth_place"=> "Klapagada",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of Cape Town",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0017",
                  "first_name"=> "Heywood",
                  "last_name"=> "Suddards",
                  "email" => "Heywood@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("9-8-1997"),
                  "birth_place"=> "Chillia",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Mount Mary College",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0018",
                  "first_name"=> "Gabi",
                  "last_name"=> "Pranger",
                  "email" => "Gabi@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("7-5-1996"),
                  "birth_place"=> "Makueni",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Central College",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0019",
                  "first_name"=> "Sherie",
                  "last_name"=> "Ciepluch",
                  "email" => "Sherie@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("18-1-1995"),
                  "birth_place"=> "Emiliano Zapata",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "College of Charleston",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0020",
                  "first_name"=> "Vincenz",
                  "last_name"=> "McLane",
                  "email" => "Vincenz@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("11-4-1989"),
                  "birth_place"=> "Shirochanka",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of North Carolina at Greensboro",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0021",
                  "first_name"=> "Trish",
                  "last_name"=> "Lonie",
                  "email" => "Trish@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("11-4-1989"),
                  "birth_place"=> "Metsemotlhaba",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Ufa State Petroleum Technological University",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0022",
                  "first_name"=> "Quentin",
                  "last_name"=> "Sustin",
                  "email" => "Quentin@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("23-7-1997"),
                  "birth_place"=> "Preko",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of Luxemburg",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0023",
                  "first_name"=> "Jaine",
                  "last_name"=> "Weerdenburg",
                  "email" => "Jaine@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("6-3-1990"),
                  "birth_place"=> "Guyi",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of Nebraska (System)",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0024",
                  "first_name"=> "Remus",
                  "last_name"=> "Trethowan",
                  "email" => "Remus@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("27-12-1993"),
                  "birth_place"=> "Veghel",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Universidad Autónoma de Las Américas",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0025",
                  "first_name"=> "Arny",
                  "last_name"=> "McKaile",
                  "email" => "Arny@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("18-3-1998"),
                  "birth_place"=> "Daping",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Cornish College of the Arts",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0026",
                  "first_name"=> "Griselda",
                  "last_name"=> "Ludl",
                  "email" => "Griselda@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("22-2-1994"),
                  "birth_place"=> "Quintãs",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "San Joaquin College of Law",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0027",
                  "first_name"=> "Othello",
                  "last_name"=> "Tregale",
                  "email" => "Othello@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("17-1-1980"),
                  "birth_place"=> "Itapevi",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "University of Texas Southwestern Medical Center at Dallas",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0028",
                  "first_name"=> "Broddie",
                  "last_name"=> "Bone",
                  "email" => "Broddie@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("8-1-1991"),
                  "birth_place"=> "Kupavna",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Universidade Atlântica",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0029",
                  "first_name"=> "Caryn",
                  "last_name"=> "Kendal",
                  "email" => "Caryn@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("16-5-1992"),
                  "birth_place"=> "Al Hufūf",
                  "gender"=> "Female",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Northern University Bangladesh",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ], [
                  "user_id"=> "USR0030",
                  "first_name"=> "Griz",
                  "last_name"=> "Collist",
                  "email" => "Griz@mail.com",
                                    "password" =>bcrypt("P@ssw0rd"),
                  "birth_date"=> Carbon::parse("17-1-1984"),
                  "birth_place"=> "Dallas",
                  "gender"=> "Male",
                  "phone" => "083218903476",
                  "address"=>"",
                  "university"=> "Mississippi University for Women",
                  "major" => "",
                  "degree" => "",
                  "role_id" => "ROLE002",
                  "photo_url" => ""

                ]

        ]);
    }
}
