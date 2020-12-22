<?php

use Illuminate\Database\Seeder;

class ShoeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoes')->insert(array(
            array(
                'name' => 'Crazy BYW Pharrell Williams Shoes',
                'description' => 'When adidas Basketball linked up with Pharrell Williams, it was no surprise they chose the Crazy BYW Shoes as a canvas. Williams brings his playful energy to the design with a leather upper that pulses with colour. A reflexology print on the sockliner reminds you everything is connected.',
                'price' => 3000000,
                'img' => 'pharrell_williams.jpg',
            ),
            array(
                'name' => 'Alphaedge 4D Reflective Shoes',
                'description' => 'Push yourself further, faster, in running shoes that deliver tuned energy to every stride. A breathable mesh upper features zoned areas of support for added lateral stability. Carbon 4D technology in the midsole offers a snappy ride and controlled energy return. The durable rubber outsole provides superior grip. This product is created with yarn made in collaboration with Parley for the Oceans. Some of the yarn features Parley Ocean Plastic™ which is made from recycled waste, intercepted from beaches and coastal communities before it reaches the ocean.',
                'price' => 4700000,
                'img' => 'reflective_shoes.jpg',
            ),
            array(
                'name' => 'Ultraboost 20 Shoes',
                'description' => 'Born to shake things up. The Ultraboost changed the world of running shoes when it was released in 2015, winning fans for its comfort and responsiveness. These adidas Ultraboost 20 Shoes continue the evolution of running technology. The foot-hugging knit upper has stitched-in reinforcement for a locked-in fit. Responsive cushioning adds energy to your stride for that I-could-run-forever feeling. Good for the oceans Primeblue features Parley Ocean Plastic® which is made from recycled waste thats intercepted from beaches and coastal communities before it reaches the ocean.',
                'price' => 3000000,
                'img' => 'ultraboost_20.jpg',
            ),
            array(
                'name' => 'NIKE Lebron Witness III',
                'description' => 'NIKE Lebron Witness III merupakan basketball shoes berbahan mesh yang didesain sporty dengan detail neat stitching, eyelets dan outsole yang nyaman pada saat digunakan.',
                'price' => 4500000,
                'img' => 'nike_lebron_witness_3.jpg',
            ),
            array(
                'name' => 'NIKE Downshifter 9',
                'description' => 'NIKE Downshifter 9 merupakan sepatu lari pria terbuat dari bahan berkualitas yang didesain sporty dengan detail eyelets, neat stitching, detail logo Nike, dan outsole yang nyaman pada saat digunakan.',
                'price' => 1200000,
                'img' => 'nike_downshifter_9.jpg',
            ),
            array(
                'name' => 'NIKE Off White X Nike Air Max 90',
                'description' => 'NIKE Off White X Nike Air Max 90 - Black, sneakers shoes berbahan leather, suede, dan mesh yang didesain trendy dengan detail neat stitching, eyelets, dan outsole berkualitas, sehingga nyaman saat digunakan.',
                'price' => 14000000,
                'img' => 'nike_off_white_x_air_max.jpg',
            ),
            array(
                'name' => 'NIKE Jordan 4 Levis Denim Blue',
                'description' => 'Limited edition collaboration between Jordan Brand and Levi’s denim label. The shoe features a mix of signature Levi’s denim, gum outsoles, visible Air, and more.',
                'price' => 12500000,
                'img' => 'nike_jordan_4.jpg',
            ),
        ));
    }
}
