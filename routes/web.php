<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "name" => "William Suryadharma",
        "college" => "Binusian 2025",
        "description" => "I am a Binus student majoring in computer science. In college I always try to find new things related to majors that interest me. I am currently studying in semester 5 and am currently focusing on several Computer Science projects."
    ]);
});

Route::get('/about-me', function () {
    return view('aboutme', [
        "var1" => "Indonesian",
        "var2" => "Javanese",
        "var3" => "Balinese",
        "var4" => "English",
        "var5" => "Chinese"
    ]);
});

Route::get('/skill-experience', function () {
    return view('skill-experience');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/favorite', function() {
    $heroesArr = [
        ["id" => "1", "name" => "Freya", "role" => "Fighter", "power" => "2351", "match" => "734", "winrate" => "65.00%", "desc" => "Freya - a powerful warrior hero who excels at dealing physical damage and has excellent crowd control abilities. She is ideal for players who enjoy being aggressive and dominating the battlefield."],
        ["id" => "2", "name" => "Khufra", "role" => "Tank", "power" => "2600", "match" => "333", "winrate" => "61.6%", "desc" => "Khufra - a tank hero who can deal significant damage and control the battlefield with his powerful crowd control abilities. His ultimate can displace and stun multiple enemies, making him a valuable asset to any team."],
        ["id" => "3", "name" => "Silvanna", "role" => "Mage", "power" => "2350", "match" => "298", "winrate" => "62.8%", "desc" => "Silvanna - a hybrid fighter/mage hero with versatile abilities that allow her to deal both physical and magical damage. She is a strong initiator and can stun multiple enemies with her ultimate."],
        ["id" => "4", "name" => "Yu  Zhong", "role" => "Fighter", "power" => "2422", "match" => "223", "winrate" => "57.8%", "desc" => "Yu Zhong - a fighter hero who can deal high physical damage and sustain himself in battles with his abilities. He has an ultimate that can pull enemies towards him, making him a great initiator for team fights."],
        ["id" => "5", "name" => "Hylos", "role" => "Tank", "power" => "2371", "match" => "211", "winrate" => "56.9%", "desc" => "Hylos - a tank hero with high durability and crowd control abilities. His abilities allow him to initiate fights and protect his allies, making him a valuable addition to any team."],
        ["id" => "6", "name" => "Lunox", "role" => "Mage", "power" => "2437", "match" => "193", "winrate" => "59.2%", "desc" => "Lunox - a mage hero with unique abilities that allow her to deal both magical and physical damage. She is able to change her form during battles, making her unpredictable and difficult to counter."],
        ["id" => "7", "name" => "Hayabusa", "role" => "Assassin", "power" => "2452", "match" => "151", "winrate" => "53.6%", "desc" => "Hayabusa - an assassin hero who can deal high physical damage and escape easily. He is ideal for players who enjoy hit-and-run tactics and can easily eliminate low-health enemies."],
        ["id" => "8", "name" => "Franco", "role" => "Tank", "power" => "2429", "match" => "145", "winrate" => "55.2%", "desc" => "Franco - a tank hero who can hook and pull enemies towards him, making him a valuable initiator for team fights. He has a passive ability that can stun enemies when he lands basic attacks."],
        ["id" => "9", "name" => "Akai", "role" => "Tank", "power" => "2525", "match" => "110", "winrate" => "63.6%", "desc" => "Akai - a tank hero with exceptional mobility and crowd control abilities. He can jump towards enemies and knock them up, making him a great initiator for team fights."],
        ["id" => "10", "name" => "Granger", "role" => "Marksman", "power" => "1302", "match" => "108", "winrate" => "52.9%", "desc" => "Granger - a marksman hero who can deal high physical damage from a distance. He is able to move and shoot at the same time, making him difficult to target."],
        ["id" => "11", "name" => "Lylia", "role" => "Mage", "power" => "2585", "match" => "94", "winrate" => "64.9%", "desc" => "Lylia - a mage hero who can deal high magical damage and summon shadow spirits to aid her in battles. She is able to control the battlefield with her abilities and stun enemies with her ultimate."],
        ["id" => "12", "name" => "Pharsa", "role" => "Mage", "power" => "2366", "match" => "93", "winrate" => "60.8%", "desc" => "Pharsa - a mage hero who can deal high magical damage from a safe distance. She is able to fly and scout the battlefield, making her difficult to catch."],
        ["id" => "13", "name" => "Ling", "role" => "Assassin", "power" => "2380", "match" => "74", "winrate" => "52.7%", "desc" => "Ling - an assassin hero who can jump and dash around the battlefield, making him difficult to catch. He can deal high physical damage and eliminate enemies quickly."],
        ["id" => "14", "name" => "Wanwan", "role" => "Marksman", "power" => "1000", "match" => "68", "winrate" => "57.4%", "desc" => "Wanwan - a marksman hero who can deal high physical damage and stun enemies with her abilities. She is able to move and shoot at the same time, making her difficult to target."],
        ["id" => "15", "name" => "Benedetta", "role" => "Assassin", "power" => "1000", "match" => "64", "winrate" => "60.9%", "desc" => "Benedetta - a fighter hero who can deal high physical damage and dash around the battlefield. She is able to eliminate low-health enemies quickly and can escape easily."],
    ];

    return view('favorite', [
        "heroes" => $heroesArr
    ]);
});

Route::get('/detailhero', function () {
    
    return view('detailhero');
});

Route::get('/hero/{id}', function($id) {
    $newHero = [];

    $heroesArr = [
        ["id" => "1", "name" => "Freya", "role" => "Fighter", "power" => "2351", "match" => "734", "winrate" => "65.00%", "desc" => "Freya - a powerful warrior hero who excels at dealing physical damage and has excellent crowd control abilities. She is ideal for players who enjoy being aggressive and dominating the battlefield."],
        ["id" => "2", "name" => "Khufra", "role" => "Tank", "power" => "2600", "match" => "333", "winrate" => "61.6%", "desc" => "Khufra - a tank hero who can deal significant damage and control the battlefield with his powerful crowd control abilities. His ultimate can displace and stun multiple enemies, making him a valuable asset to any team."],
        ["id" => "3", "name" => "Silvanna", "role" => "Mage", "power" => "2350", "match" => "298", "winrate" => "62.8%", "desc" => "Silvanna - a hybrid fighter/mage hero with versatile abilities that allow her to deal both physical and magical damage. She is a strong initiator and can stun multiple enemies with her ultimate."],
        ["id" => "4", "name" => "Yu  Zhong", "role" => "Fighter", "power" => "2422", "match" => "223", "winrate" => "57.8%", "desc" => "Yu Zhong - a fighter hero who can deal high physical damage and sustain himself in battles with his abilities. He has an ultimate that can pull enemies towards him, making him a great initiator for team fights."],
        ["id" => "5", "name" => "Hylos", "role" => "Tank", "power" => "2371", "match" => "211", "winrate" => "56.9%", "desc" => "Hylos - a tank hero with high durability and crowd control abilities. His abilities allow him to initiate fights and protect his allies, making him a valuable addition to any team."],
        ["id" => "6", "name" => "Lunox", "role" => "Mage", "power" => "2437", "match" => "193", "winrate" => "59.2%", "desc" => "Lunox - a mage hero with unique abilities that allow her to deal both magical and physical damage. She is able to change her form during battles, making her unpredictable and difficult to counter."],
        ["id" => "7", "name" => "Hayabusa", "role" => "Assassin", "power" => "2452", "match" => "151", "winrate" => "53.6%", "desc" => "Hayabusa - an assassin hero who can deal high physical damage and escape easily. He is ideal for players who enjoy hit-and-run tactics and can easily eliminate low-health enemies."],
        ["id" => "8", "name" => "Franco", "role" => "Tank", "power" => "2429", "match" => "145", "winrate" => "55.2%", "desc" => "Franco - a tank hero who can hook and pull enemies towards him, making him a valuable initiator for team fights. He has a passive ability that can stun enemies when he lands basic attacks."],
        ["id" => "9", "name" => "Akai", "role" => "Tank", "power" => "2525", "match" => "110", "winrate" => "63.6%", "desc" => "Akai - a tank hero with exceptional mobility and crowd control abilities. He can jump towards enemies and knock them up, making him a great initiator for team fights."],
        ["id" => "10", "name" => "Granger", "role" => "Marksman", "power" => "1302", "match" => "108", "winrate" => "52.9%", "desc" => "Granger - a marksman hero who can deal high physical damage from a distance. He is able to move and shoot at the same time, making him difficult to target."],
        ["id" => "11", "name" => "Lylia", "role" => "Mage", "power" => "2585", "match" => "94", "winrate" => "64.9%", "desc" => "Lylia - a mage hero who can deal high magical damage and summon shadow spirits to aid her in battles. She is able to control the battlefield with her abilities and stun enemies with her ultimate."],
        ["id" => "12", "name" => "Pharsa", "role" => "Mage", "power" => "2366", "match" => "93", "winrate" => "60.8%", "desc" => "Pharsa - a mage hero who can deal high magical damage from a safe distance. She is able to fly and scout the battlefield, making her difficult to catch."],
        ["id" => "13", "name" => "Ling", "role" => "Assassin", "power" => "2380", "match" => "74", "winrate" => "52.7%", "desc" => "Ling - an assassin hero who can jump and dash around the battlefield, making him difficult to catch. He can deal high physical damage and eliminate enemies quickly."],
        ["id" => "14", "name" => "Wanwan", "role" => "Marksman", "power" => "1000", "match" => "68", "winrate" => "57.4%", "desc" => "Wanwan - a marksman hero who can deal high physical damage and stun enemies with her abilities. She is able to move and shoot at the same time, making her difficult to target."],
        ["id" => "15", "name" => "Benedetta", "role" => "Assassin", "power" => "1000", "match" => "64", "winrate" => "60.9%", "desc" => "Benedetta - a fighter hero who can deal high physical damage and dash around the battlefield. She is able to eliminate low-health enemies quickly and can escape easily."],
    ];

    foreach($heroesArr as $h) {
        if($h["id"] == $id) {
            $newHero = $h;
        }
    }

    return view('detailhero', [
        "h" => $newHero
    ]);
});

// Route::get('/favorite', [UserController::class, 'mainHeroes']);

// Route::get('/hero/{id}', [UserController::class, 'detailHeroes']);