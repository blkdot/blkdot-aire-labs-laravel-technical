<?php

namespace Database\Seeders;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{

    public $members = [
        ["name" => "Brittan Wheeler",
        "position" => "Consultant",
        "rate"=> 4,
        "message" => "\"You made it so simple.\"",
        "avatar" => "images/Brittan_Wheeler"
    ],
    ["name" => "Alexa Popen",
        "position" => "CEO",
        "rate"=> 3,
        "message" => "\"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.\"",
        "avatar" => "images/Alexa_Popen"
    ],
    ["name" => "Leslie Alexander",
        "position" => "Founder",
        "rate"=> 5,
        "message" => "\"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.\"",
        "avatar" => "images/Leslie_Alexander"
    ],
    ["name" => "Leslie Alexander",
        "position" => "Founder",
        "rate"=> 5,
        "message" => "\"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.\"",
        "avatar" => "images/Leslie_Alexander"
    ],
    ["name" => "Leslie Alexander",
        "position" => "Founder",
        "rate"=> 5,
        "message" => "\"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.\"",
        "avatar" => "images/Leslie_Alexander"
    ]
];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach ($this->members as $member) {
            Member::create([
                "name" => $member["name"],
                "position" => $member["position"],
                "rate" => $member["rate"],
                "message" => $member["message"],
                "avatar" => $member["avatar"]
            ]);
        }
    }
}
