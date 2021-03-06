<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            [
                'name' => 'Zpacks Arc Haul',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Backpack',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Zpacks Carbon Fiber',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Tent Stakes',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'REI Magma 15 Long',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sleeping Bag',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Granite Gear Air Compressor 8L',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Compression Sack',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Sea to Summit Aeros UL Large',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Pillow',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'TarpTent Notch Li',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Tent',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'NEMO Switchback',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sleeping Pad',
                'category_id' => 1,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'MSR Pocket Rocket 2',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sleeping Pad',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Fuel Canisters',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Fuel',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Toaks 700mL Pot',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Titanium Pot',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Light My Fire Titanium Spork',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Utensils',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Mini Bic',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Lighter',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Zpacks Large Food Bag',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Food Bag',
                'category_id' => 2,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Steripen',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Water Sterilization',
                'category_id' => 3,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'AquaMira Drops',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Backup Water Sterilization',
                'category_id' => 3,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Gatorade Bottle',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Water Bottle',
                'category_id' => 3,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Moab Ventilator Mid',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Boots',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Darn Tough',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Socks',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Injinji Liner Crew Socks',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sock Liner',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'ExOfficio Give \'n Go',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Underwear',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Outdoor Research Echo Duo',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'T-Shirt',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Mountain Hardwewar Wide Brim Hat',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Hat',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Prana Zion Stretch Pants',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Pants',
                'category_id' => 4,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Darn Tough',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Socks',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Injinji Liner Crew Socks',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Socks',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'ExOfficio Give \'n Go',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Underwear',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'REI Brand',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Long Underwear',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Running Shorts',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sleep shorts',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Lightweight Synthetic T-Shirt',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sleep shirt',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'MontBell EX Light Anorak',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Down Jacket',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'VivoBarefoot Ultra 3 Men\'s',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Camp Shoes',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'MontBell Versalite',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Rain jacket',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Smartwool Beanie',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Beanie',
                'category_id' => 5,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Canon 6D',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'DSLR',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Canon 24-70 f/2.8',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'General Purpose Lens',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'ThinkTank Multi-Mount Holster 20',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Camera Case',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Benro Carbon Fiber Slim',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Tripod',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'iPhone XS',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Phone',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Apple charger',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Chargers',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Canon batteries',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Batteries',
                'category_id' => 6,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Zpacks Ultralight Toothbrush',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Toothbrush/toothpaste',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'TP',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Toilet Paper',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Needle, Ibuprofen, O2 Pills, Bandaids',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'First Aid',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Sunscreen',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sunscreen',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Hand sanitizer',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sanitizer',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Dr. Bronner\'s Liquid Soap',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Soap',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Ear plugs',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Ear plugs',
                'category_id' => 7,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Black Diamond ALpine Cork Trekking Poles',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Trekking Poles',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Black Diamond Spot Headlamp',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Headlamp',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'LiteSmith Lightload Towels',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Camp towel',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Plastic bags',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Plastic bags',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Sunglasses',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Sunglasses',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Wrapped around trekking poles',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Duct tape',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Ben\'s Ultra Net',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Bug net',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Pocket knife',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Knife',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Helinox Chair Zero',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Chair',
                'category_id' => 8,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Nat Geo',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Map',
                'category_id' => 9,
                'consumable' => 0,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Food',
                'weight' => 24.4,
                'price' => 0,
                'generic_type' => 'Food/day',
                'category_id' => 10,
                'consumable' => 1,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Water',
                'weight' => 24.4,
                'price' => 22000,
                'generic_type' => 'Water/liter',
                'category_id' => 10,
                'consumable' => 1,
                'worn' => 0,
                'quantity' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
