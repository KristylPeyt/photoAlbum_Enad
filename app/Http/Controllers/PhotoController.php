<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    // All categories
    public $categories = [
        'nature' => 'Nature & Landscapes',
        'festivals' => 'Festivals & Culture',
        'food' => 'Filipino Cuisine',
        'beaches' => 'Beaches & Islands',
        'heritage' => 'Historical & Heritage Sites'
    ];

    // Preview images per category (for homepage)
    public $previews = [
        'nature' => [
            ['url' => '/images/nature/N1.jpg', 'title' => 'Mountain View'],
            ['url' => '/images/nature/N2.jpg', 'title' => 'Forest Path'],
            ['url' => '/images/nature/N3.jpg', 'title' => 'Sunset Lake'],
        ],
        'festivals' => [
            ['url' => '/images/festivals/F1.jpg', 'title' => 'Sinulog Festival'],
            ['url' => '/images/festivals/F2.jpg', 'title' => 'Panagbenga Festival'],
            ['url' => '/images/festivals/F3.jpg', 'title' => 'Ati-Atihan Festival'],
        ],
        'food' => [
            ['url' => '/images/food/D1.jpg', 'title' => 'Adobo'],
            ['url' => '/images/food/D2.jpg', 'title' => 'Sinigang'],
            ['url' => '/images/food/D3.jpg', 'title' => 'Lechon'],
        ],
        'beaches' => [
            ['url' => '/images/beaches/B1.jpg', 'title' => 'Boracay'],
            ['url' => '/images/beaches/B2.jpg', 'title' => 'Palawan'],
            ['url' => '/images/beaches/B3.jpg', 'title' => 'Siargao'],
        ],
        'heritage' => [
            ['url' => '/images/heritage/H1.jpg', 'title' => 'Intramuros, Manila'],
            ['url' => '/images/heritage/H2.jpg', 'title' => 'Rizal Shrine'],
            ['url' => '/images/heritage/H3.jpg', 'title' => 'Vigan Heritage Village'],
        ],
    ];

    // Full images per category with titles
    public $images = [
        'nature' => [
            ['url' => '/images/nature/N1.jpg', 'title' => '🌾 Ifugao, Cordillera Region', 'caption' => 'In the heart of the Cordilleras, ancient hands sculpted stairways that kiss the clouds. Come when the terraces shimmer green—before the rains fall, before the crowds arrive' ],
            ['url' => '/images/nature/N2.jpg', 'title' => '🌊 Tubbataha Reefs, Palawan', 'caption' => 'A diver’s dream beneath sapphire waves—thriving corals, graceful giants, and skies alive with wings.' ],
            ['url' => '/images/nature/N3.jpg', 'title' => '🌿 Mount Hamiguitan, Davao Oriental', 'caption' => 'Though its summit is off-limits, the mountain’s magic unfolds below—pygmy forests, rare species, and trails that whisper secrets of a living heritage.' ],
            ['url' => '/images/nature/N4.jpg', 'title' => '🌸 Great Santa Cruz Island, Zamboanga', 'caption' => 'Where pink sands meet turquoise tides, a hidden gem invites you to stroll along shores kissed by the sun and serenaded by gentle waves.' ],
            ['url' => '/images/nature/N5.jpg', 'title' => '🌊 Puerto Princesa Underground River, Palawan', 'caption' => 'Journey into the earth’s embrace—where limestone cathedrals rise, and nature’s artistry is etched in stone and shadow.' ],
            ['url' => '/images/nature/N6.jpg', 'title' => '🌈 Tinuy-an Falls, Surigao del Sur', 'caption' => 'The “Niagara of the Philippines” cascades in a symphony of mist and roar, inviting you to witness nature’s grandeur up close.' ],
            ['url' => '/images/nature/N7.jpg', 'title' => '🐢 Apo Island, Negros Oriental', 'caption' => 'Turtles glide, corals bloom—snorkel or dive this island gem, just a banca ride away.'],
            ['url' => '/images/nature/N8.jpg', 'title' => '🌊 Biri Island, Northern Samar', 'caption' => 'Where ocean giants clash, ancient rocks rise—weathered by time, sculpted by waves, and best explored at low tide'],
            ['url' => '/images/nature/N9.jpg', 'title' => '🍫 Chocolate Hills, Bohol', 'caption' => 'Born of a giant’s grief, these thousand hills rise like kisses from the earth—mystical mounds stretching across 50 square kilometers, each one shaped by time and legend.'],
            ['url' => '/images/nature/N10.jpg', 'title' =>'🦈 Donsol, Sorsogon', 'caption' => 'Where giants glide and reefs come alive—swim with whale sharks from March to May, or dive into the vibrant depths of Ticao and San Miguel from February to October.'],
            ['url' => '/images/nature/N11.jpg', 'title' => '🏝️ Hundred Islands, Pangasinan', 'caption' => 'A seascape of dreams—where over a hundred islands rise from emerald waters, each one a canvas for adventure, relaxation, and nature’s splendor.'],
            ['url' => '/images/nature/N12.jpg', 'title' => '🌋 Mayon Volcano, Albay', 'caption' => 'The world’s most perfectly shaped volcano—its symmetrical cone rising majestically, a testament to nature’s artistry and power.'],
            ['url' => '/images/nature/N13.jpg', 'title' => '🌊 Pagudpud, Ilocos Norte', 'caption' => 'Where windswept beaches meet azure seas—Pagudpud beckons with its pristine shores, rolling hills, and the promise of endless horizons.'],
            ['url' => '/images/nature/N14.jpg', 'title' => '🌙 Siquijor, Central Visayas', 'caption' => 'An island of mystique and magic—Siquijor enchants with its waterfalls, coral reefs, and the timeless allure of its folklore.'],
            ['url' => '/images/nature/N15.jpg', 'title' => '🌋 Taal Volcano & Lake, Batangas', 'caption' => 'A volcano within a lake, within an island—Taal’s surreal landscape invites you to explore its trails, witness its beauty, and feel the pulse of nature’s wonders.'],
            ['url' => '/images/nature/N16.jpg', 'title' => '🌄 Mt. Batulao, Batangas', 'caption' => 'Rolling hills and rugged peaks—Mt. Batulao offers hikers panoramic views, cool breezes, and trails that wind through pine forests and grasslands.'],
            ['url' => '/images/nature/N17.jpg', 'title' => '🏖️ Boracay Island, Aklan', 'caption' => 'Famed for its powdery white sands and vibrant nightlife, Boracay is a tropical paradise that captivates visitors with its crystal-clear waters and stunning sunsets.'],
            ['url' => '/images/nature/N18.jpg', 'title' => '🏄‍♂️ Siargao Island, Surigao del Norte', 'caption' => 'The surfing capital of the Philippines—Siargao’s waves beckon thrill-seekers, while its lagoons, caves, and rock pools offer serene escapes.'],
            ['url' => '/images/nature/N19.jpg', 'title' => '🌄 Mount Pulag, Luzon', 'caption' => 'The third highest peak in the Philippines—Mount Pulag is renowned for its “sea of clouds,” diverse flora and fauna, and breathtaking sunrises.'],
            ['url' => '/images/nature/N20.jpg', 'title' => '🏝️ Puerto Galera, Oriental Mindoro', 'caption' => 'A haven for divers and beach lovers—Puerto Galera boasts vibrant coral reefs, crystal-clear waters, and a laid-back island vibe that enchants every visitor.' ],
        ],
        'festivals' => [
            ['url' => '/images/festivals/F1.jpg', 'title' => '🎉 Sinulog Festival, Cebu City', 'caption' => 'A vibrant celebration in Cebu City honoring the Santo Niño, featuring colorful street dances, grand parades, and a fusion of indigenous and Christian traditions.'],
            ['url' => '/images/festivals/F2.jpg', 'title' => '🕊️ Feast of the Black Nazarene, Manila', 'caption' => 'An intense religious event in Manila where millions of devotees participate in a grand procession, seeking blessings and miracles from the revered statue of the Black Nazarene.'],
            ['url' => '/images/festivals/F3.jpg', 'title' => '🎭 Ati-Atihan Festival, Kalibo, Aklan', 'caption' => 'Known as the "Mother of All Philippine Festivals," this lively event in Kalibo features street dancing, vibrant costumes, and a joyful atmosphere celebrating the Santo Niño and indigenous heritage.'],
            ['url' => '/images/festivals/F4.jpg', 'title' => '🎭 Dinagyang Festival, Iloilo City', 'caption' => 'A dynamic cultural and religious festival in Iloilo City, showcasing energetic street dances, elaborate costumes, and a tribute to the Santo Niño, reflecting the rich heritage of the Ilonggo people.'],
            ['url' => '/images/festivals/F5.jpg', 'title' => '🎭 Moriones Festival, Marinduque', 'caption' => 'A unique Lenten festival in Marinduque where locals don colorful Roman soldier costumes, reenacting the story of Longinus in a blend of faith, folklore, and vibrant street performances.'],
            ['url' => '/images/festivals/F6.jpg', 'title' => '🎨 Pintados-Kasadyaan Festival, Tacloban City', 'caption' => 'A colorful celebration in Tacloban City featuring traditional dances, body painting, and cultural performances that honor the region’s rich history and indigenous roots.'],
            ['url' => '/images/festivals/F7.jpg', 'title' => '🎉 Peñafrancia Festival, Naga City', 'caption' => 'A grand religious festival in Naga City dedicated to Our Lady of Peñafrancia, marked by a fluvial procession, vibrant street parades, and various cultural activities celebrating faith and community.'],
            ['url' => '/images/festivals/F8.jpg', 'title' => '🎉 Zamboanga La Hermosa Festival, Zamboanga City', 'caption' => 'A cultural and religious festival in Zamboanga City celebrating the city’s patroness, La Virgen del Pilar, with street dances, floral floats, and a showcase of the region’s diverse heritage.'],
            ['url' => '/images/festivals/F9.jpg', 'title' => '🎭 Higantes Festival, Angono, Rizal', 'caption' => 'A lively festival in Angono featuring giant papier-mâché figures parading through the streets, celebrating the town’s artistic heritage and honoring San Clemente, the patron saint of fishermen.'],
            ['url' => '/images/festivals/F10.jpg', 'title' => '🎭 MassKara Festival, Bacolod City', 'caption' => 'A vibrant and colorful festival in Bacolod City known for its smiling masks, lively street dances, and festive atmosphere that celebrates the resilience and joyful spirit of the Negrense people.'],
            ['url' => '/images/festivals/F11.jpg', 'title' => '🌺 Kadayawan Festival, Davao City', 'caption' => 'A week-long celebration in Davao City showcasing the rich cultural heritage of Mindanao’s indigenous tribes through street dances, floral floats, and various cultural presentations.'],
            ['url' => '/images/festivals/F12.jpg', 'title' => '⚔️ Kadaugan sa Mactan Festival, Lapu-Lapu City', 'caption' => 'A historical reenactment in Lapu-Lapu City commemorating the Battle of Mactan, featuring colorful costumes, traditional dances, and a vibrant parade celebrating Filipino bravery and heritage.'],
            ['url' => '/images/festivals/F13.jpg', 'title' => '🎭 Sarakiki-Hadang Festival, Calbayog City, Samar', 'caption' => 'A lively festival in Calbayog City celebrating the city’s patron saint, San Bartolome, with street dances, cultural performances, and a showcase of local traditions and heritage.'],
            ['url' => '/images/festivals/F14.jpg', 'title' => '🎊 Sinadya sa Halaran Festival, Roxas City, Capiz', 'caption' => 'A grand festival in Ozamiz City celebrating the city’s patron saint, the Immaculate Conception, with street dances, cultural shows, and a vibrant display of faith and community spirit.'],
            ['url' => '/images/festivals/F15.jpg', 'title' => '🎉 Kasanggayahan Festival', 'caption' => 'A festive celebration in Butuan City showcasing the city’s rich cultural heritage through street dances, colorful parades, and various cultural activities that highlight the spirit of unity and progress.'],
            ['url' => '/images/festivals/F16.jpg', 'title' => '🎉 Catandungan Festival', 'caption' => 'A lively festival in Catanduanes celebrating the province’s culture and traditions with street dances, colorful costumes, and various cultural presentations that showcase the beauty of Catanduanes.'],
            ['url' => '/images/festivals/F17.jpg', 'title' => '🌄 T’boli Tribal Festival (Lemlunay Festival), Lake Sebu, South Cotabato', 'caption' => 'A vibrant celebration of ancestral dreams, music, and weaving—where the T’boli people honor their heritage with soul and spectacle.'],
            ['url' => '/images/festivals/F18.jpg', 'title' => '🌾 Pahiyas Festival', 'caption' => 'A kaleidoscope of colors and creativity—where homes transform into artful displays of harvest bounty, celebrating gratitude and Filipino ingenuity.'],
            ['url' => '/images/festivals/F19.jpg', 'title' => '🍇 Lanzones Festival', 'caption' => 'A sweet celebration of the lanzones fruit—where the town of Mambajao bursts into color, dance, and festivity, honoring nature’s gift with joy and community spirit.'],
            ['url' => '/images/festivals/F20.jpg', 'title' => '🌸 The Panagbenga Festival', 'caption' => 'A blooming spectacle in Baguio City—where flowers take center stage in grand floats and vibrant street dances, celebrating the season of blossoms and the spirit of the Cordilleras.'],
        ],
        // Repeat same pattern for food, beaches, heritage...
        'food' => [
            ['url' => '/images/food/D1.jpg', 'title' => '🍲 Adobo', 'caption' => 'A classic Filipino dish made by braising meat in vinegar, soy sauce, garlic, and spices, creating a rich, savory, and tangy flavor that’s deeply comforting and uniquely Filipino.'],
            ['url' => '/images/food/D2.jpg', 'title' => '🐖 Lechon', 'caption' => 'A whole pig roasted over coals until the skin turns crispy and golden—an iconic Filipino feast centerpiece, rich with flavor and tradition.'],
            ['url' => '/images/food/D3.jpg', 'title' => '🥓 Chicharrón', 'caption' => 'A crispy Filipino snack made from deep-fried pork belly, rinds, or intestines—salty, crunchy, and irresistibly satisfying.'],
            ['url' => '/images/food/D4.jpg', 'title' => '🔥 Pork Sisig', 'caption' => 'A sizzling Kapampangan dish made from chopped pork face, ears, and liver—crispy, creamy, and bursting with bold, tangy flavor.'],
            ['url' => '/images/food/D5.jpg', 'title' => '🥢 Lumpia', 'caption' => 'A golden roll of thin crepe filled with pork, veggies, and spices—lumpia is the crunchy, crowd-pleasing cousin of the Chinese spring roll, served hot with a sweet dipping sauce.'],
            ['url' => '/images/food/D6.jpg', 'title' => '🥭 Mangga’t Bagoong', 'caption' => 'Sour green mango slices paired with salty-sweet bagoong alamang (fermented shrimp paste)—a bold, addictive combo that’s a staple in Filipino street food culture.'],
            ['url' => '/images/food/D7.jpg', 'title' => '🥚 Balut', 'caption' => 'A fertilized duck egg with a developing embryo, boiled and eaten from the shell—balut is a daring bite of tradition, curiosity, and rich flavor'],
            ['url' => '/images/food/D8.jpg', 'title' => '🌭 Longganisa', 'caption' => 'A sweet or savory sausage made from pork or beef, longganisa is a breakfast favorite—served with garlic rice, egg, and vinegar dip. From the sweet jamonado to the beefy batutay, every bite is a taste of tradition.'],
            ['url' => '/images/food/D9.jpg', 'title' => '🍤 Okoy', 'caption' => 'Made with rice batter, shrimp, and fresh veggies, okoy is a golden, crunchy fritter served with tangy vinegar dip—a street food favorite that’s bold, crispy, and deeply satisfying.'],
            ['url' => '/images/food/D10.jpg', 'title' => '🍽️ Tokwa’t Baboy', 'caption' => 'A hearty mix of deep-fried tofu and pork belly, tokwa’t baboy is drenched in a zesty blend of vinegar, soy sauce, onions, and chili—simple, savory, and always a crowd-pleaser.'],
            ['url' => '/images/food/D11.jpg', 'title' => '🥥 Laing', 'caption' => 'A rich, spicy stew of taro leaves simmered in coconut milk with chili, garlic, and ginger—laing is a bold, creamy classic from the Bicol region that warms the soul and ignites the senses.'],
            ['url' => '/images/food/D12.jpg', 'title' => '🍳 Torta', 'caption' => 'In the Philippines, torta means a savory omelet—often made with ground meat or eggplant, and served with sweet banana ketchup for that signature local flair.'],
            ['url' => '/images/food/D13.jpg', 'title' => '🥘 Pinakbet', 'caption' => 'A savory stir-fry of pork belly and local vegetables like eggplant, okra, and bitter melon, pinakbet is simmered in shrimp or fish sauce—earthy, bold, and deeply rooted in Filipino home cooking.'],
            ['url' => '/images/food/D14.jpg', 'title' => '🔥 Pork Barbecue', 'caption' => 'Tender pork slices marinated in a sweet-savory blend, skewered on bamboo sticks, and grilled over charcoal—Filipino pork barbecue is smoky, juicy, and always a crowd-pleaser.'],
            ['url' => '/images/food/D15.jpg', 'title' => '🔥 Chicken Inasal', 'caption' => 'Marinated in vinegar, calamansi, pepper, and annatto, chicken inasal is grilled over charcoal and basted to smoky, juicy perfection—a beloved comfort food from Bacolod.'],
            ['url' => '/images/food/D16.jpg', 'title' => '🐖 Crispy Pata', 'caption' => 'Deep-fried pork trotters served with a tangy-sweet soy-vinegar dip—crispy pata is bold, indulgent, and irresistibly crunchy.'],
            ['url' => '/images/food/D17.jpg', 'title' => '🍲 Sinigang', 'caption' => 'A tangy Filipino soup made with tamarind or local fruits like guava or butuan, sinigang blends bold sourness with savory depth—comfort food at its finest'],
            ['url' => '/images/food/D18.jpg', 'title' => '🥜 Kare-Kare', 'caption' => 'A slow-cooked medley of oxtail, pork hocks, and veggies in a thick, nutty peanut sauce—kare-kare is a Filipino feast of comfort, best enjoyed with bagoong on the side.'],
            ['url' => '/images/food/D19.jpg', 'title' => '🍵 Tinola', 'caption' => 'A soothing chicken soup with green papaya, moringa, and chili leaves, tinola is a Filipino favorite—mild, gingery, and perfect for rainy days or homesick hearts.'],
            ['url' => '/images/food/D20.jpg', 'title' => '🔥 Liempo', 'caption' => 'Marinated in garlic, chili, and soy sauce, liempo is grilled over charcoal until smoky and tender—best with rice, but just as irresistible as a pulutan.'],
        ],
        // R
        'beaches' => [
            ['url' => '/images/beaches/B1.jpg', 'title' => '🏝️ Nacpan Beach', 'caption' => 'Powdery white sand, twin shores, and turquoise waters—perfect for hammocks, coral paddling, and sunset beers.'],
            ['url' => '/images/beaches/B2.jpg', 'title' => '🏖️ White Beach, Boracay', 'caption' => 'Famed for its powdery white sands and vibrant nightlife, Boracay is a tropical paradise that captivates visitors with its crystal-clear waters and stunning sunsets.'],
            ['url' => '/images/beaches/B3.jpg', 'title' => '🌊 Kota Beach, Bantayan', 'caption' => 'Powdery white sand, clear waters, and a laid-back vibe—perfect for kayaking, seafood feasts, and sunset views. Don’t miss Virgin Island’s stunning sandbar just offshore'],
            ['url' => '/images/beaches/B4.jpg', 'title' => '🌴 Banol Beach, Coron', 'caption' => 'Crystal-clear waters, powdery white sand, and dramatic limestone cliffs—ideal for snorkeling, kayaking, and unwinding in paradise.'],
            ['url' => '/images/beaches/B5.jpg', 'title' => '🌴 Alona Beach, Bohol', 'caption' => 'White sand, clear waters, and vibrant coral reefs—perfect for diving, snorkeling, and enjoying fresh seafood by the shore.'],
            ['url' => '/images/beaches/B6.jpg', 'title' => '🏖️ Mahabang Buhangin Beach', 'caption' => 'Stretching white sands, clear blue waters, and a tranquil atmosphere—ideal for long walks, beachcombing, and soaking up the sun.'],
            ['url' => '/images/beaches/B7.jpg', 'title' => '🌿 Anguib Beach, Cagayan', 'caption' => 'A hidden gem with powdery white sand, clear waters, and dramatic rock formations—perfect for beachcombing, swimming, and enjoying the serene beauty of nature.' ],
            ['url' => '/images/beaches/B8.jpg', 'title' => '🏖️ Gumasa Beach, Sarangani', 'caption' => 'With powdery white sand, crystal waters, and coral-rich adventures, Gumasa shines—especially during the lively SarBay Festival every May.' ],
            ['url' => '/images/beaches/B9.jpg', 'title' => '🏄‍♂️ Dahican Beach, Davao Oriental', 'caption' => 'Dubbed the “Boracay of the South,” Dahican offers white sands, steady waves, and pawikan sightings—perfect for surfing, snorkeling, and island-hopping escapes'],
            ['url' => '/images/beaches/B10.jpg', 'title' => '🌬️ Saud Beach, Pagudpud', 'caption' => 'White sand, pristine waters, and perfect winds for kiteboarding—plus nearby wonders like Bangui Windmills and Kapurpurawan Rocks.' ],
            ['url' => '/images/beaches/B11.jpg', 'title' => '🏝️ Malamawi Beach, Basilan', 'caption' => 'Bright waters, powdery white sand, and peaceful vibes—Malamawi is perfect for quiet swims and scenic escapes.'],
            ['url' => '/images/beaches/B12.jpg', 'title' => '🌅 Paliton Beach, Siquijor', 'caption' => 'Tucked away near San Juan, Paliton offers white sand, low-tide sandbars, and peaceful sunsets—perfect for quiet escapes and seafood feasts.' ],
            ['url' => '/images/beaches/B14.jpg', 'title' => '🌊 Morong Beach, Batanes', 'caption' => 'Crystal waters, dramatic cliffs, and a charming lighthouse—Morong Beach offers serene views and a taste of Ivatan culture.' ],
            ['url' => '/images/beaches/B15.jpg', 'title' => '🌿 Bitaog Beach, Dinagat Islands', 'caption' => 'Framed by limestone cliffs and lush greenery, Bitaog Beach offers serene shores, hidden rock formations, and a peaceful escape from the world.' ],
            ['url' => '/images/beaches/B16.jpg', 'title' => '🏖️ Bonbon Beach, Romblon', 'caption' => 'Famous for its low-tide sandbar and wave-smoothed marble rocks, Bonbon Beach offers sun, sea, and nearby island adventures—from coral dives to cave hikes.' ],
            ['url' => '/images/beaches/B17.jpg', 'title' => '🌅 Alegria Beach, Siargao', 'caption' => 'Undeveloped and peaceful, Alegria offers quiet shores, island boat tours, and sunsets painted in pink and gold.' ],
            ['url' => '/images/beaches/B18.jpg', 'title' => '🌺 Subic Beach, Sorsogon', 'caption' => 'With turquoise waters, a low-tide sandbar to Tikling Island, and coral-rich adventures, Subic Beach is perfect for snorkeling, camping, and sunset seafood feasts.'],
            ['url' => '/images/beaches/B19.jpg', 'title' => '⚓ Buhatan Beach, Albay', 'caption' => 'Enjoy the tranquil shores of Buhatan Beach, where soft sands meet gentle waves—ideal for relaxation, beachcombing, and soaking in the serene coastal beauty of Albay.' ],
            ['url' => '/images/beaches/B21.jpg', 'title' => '🪨 Antonia Beach, Gigantes Islands', 'caption' => 'White sand, limestone cliffs, and clear waters—pure island charm, no frills, just paradise.'],
            ['url' => '/images/beaches/B20.jpg', 'title' => '🌸 Pink Beach, Sila Island', 'caption' => 'Blush-pink sands, clear waters, and vibrant reefs—thanks to Foraminifera magic. Snorkel, unwind, and soak in the serenity at this off-the-radar gem'],
        ],
        'heritage' => [
            ['url'=> '/images/heritage/H1.jpg', 'title' => '🏰 Intramuros, Manila', 'caption' => 'Step back in time within the walled city of Intramuros—where cobblestone streets, historic churches, and colonial architecture tell tales of Manila’s rich past.'],
            ['url'=> '/images/heritage/H2.jpg', 'title' => '🏛️ Rizal Park, Manila', 'caption' => 'From heroism to independence, this iconic Manila landmark honors memory, culture, and nationhood.'],
            ['url'=> '/images/heritage/H3.jpg', 'title' => '🐉 Binondo, Manila', 'caption' => 'Founded in 1594, Binondo blends centuries of trade, Filipino-Chinese heritage, and unbeatable street food—from Ongpin to Escolta.'],
            ['url'=> '/images/heritage/H4.jpg', 'title' => '🏡 Rizal Shrine, Calamba', 'caption' => 'Rebuilt in 1950 using traditional materials, this green-walled bahay na bato honors Rizal’s childhood and legacy—with family relics, a library, and nearby historic landmarks.'],
            ['url'=> '/images/heritage/H5.jpg', 'title' => '🌾 Banaue Rice Terraces', 'caption' => 'Ancient Ifugao-built layers of rice fields, rich in tradition and mountain views—Batad and Bangaan nearby.'],
            ['url'=> '/images/heritage/H6.jpg', 'title' => '🕳️ Tabon Caves, Palawan', 'caption' => 'Cradle of ancient heritage—home to Tabon Man, the Manunggul Jar, and over 200 historic caves.'],
            ['url'=> '/images/heritage/H7.jpg', 'title' => '⚔️ Mactan Shrine, Cebu', 'caption' => 'Facing Magellan Bay, this historic site marks the 1521 battle between Lapu-Lapu and Magellan. Nearby, enjoy Visayan sutukil by the sea.'],
            ['url'=> '/images/heritage/H8.jpg', 'title' => '✝️ Magellan’s Cross, Cebu', 'caption' => 'Planted in 1521, this historic relic—encased in a Tindalo cross—marks Magellan’s arrival, with a painted ceiling retelling the moment.'],
            ['url'=> '/images/heritage/H9.jpg', 'title' => '🩸 Blood Compact Site, Bohol', 'caption' => 'The famed Sandugo Shrine stands in Tagbilaran, but the true site lies in Loay—marked quietly along the Bohol Circumferential Road.'],
            ['url'=> '/images/heritage/H10.jpg', 'title' => '⛪ Barasoain Church, Malolos', 'caption' => 'Historic cradle of the Malolos Congress and Filipino resistance—where democracy first found its voice in 1898.'],
            ['url'=> '/images/heritage/H11.jpg', 'title' => '🏛️ Aguinaldo Shrine, Cavite', 'caption' => 'Birthplace of Philippine independence in 1898, this historic mansion-turned-museum honors Emilio Aguinaldo’s legacy—his home, his grave, and the nation’s first flag-raising.'],
            ['url'=> '/images/heritage/H12.jpg', 'title' => '🪖 MacArthur Landing Memorial, Leyte', 'caption' => 'Where MacArthur kept his promise in 1944. Seven bronze figures stand in shallow waters, facing Leyte Gulf—marking the return that changed history.'],
            ['url'=> '/images/heritage/H13.jpg', 'title' => '⛰️ Mount Samat Shrine, Bataan', 'caption' => 'A towering tribute to WWII heroes, crowned by the Memorial Cross and Colonnade museum—overlooking Bataan and Corregidor.'],
            ['url'=> '/images/heritage/H14.jpg', 'title' => '🚶‍♂️ Bataan Death March Markers', 'caption' => '138 white obelisks trace the harrowing 1942 march from Bataan to Capas—silent witnesses to sacrifice and survival.'],
            ['url'=> '/images/heritage/H15.jpg', 'title' => '🏝️ Corregidor Island', 'caption' => 'Though near Bataan, Corregidor belongs to Cavite. Its ruins—like Malinta Tunnel and Mile-Long Barracks—stand as solemn reminders of wartime valor.'],
            ['url'=> '/images/heritage/H16.jpg', 'title' => '🌴 Rizal Park and Shrine, Dapitan', 'caption' => 'Rizal’s exile home in Mindanao, now a heritage site in the Shrine City—rich with historic landmarks.'],
            ['url'=> '/images/heritage/H17.jpg', 'title' => '⛪ Limasawa Island, Southern Leyte', 'caption' => 'Historic site of the first Philippine mass in 1521—now a quiet town of six barangays by the sea.'],
            ['url'=> '/images/heritage/H18.jpg', 'title' => '🎓 University of Santo Tomas, Manila', 'caption' => 'Founded in 1611, UST is Asia’s oldest university—alma mater to national heroes and literary icons.'],
            ['url'=> '/images/heritage/H19.jpg', 'title' => '🌋 Cagsawa Ruins, Albay', 'caption' => 'A lone belfry stands where a church once rose—silent witness to Mayon’s fury and Albay’s resilience.'],
            ['url'=> '/images/heritage/H20.jpg', 'title' => '🏛️ Calle Crisologo, Vigan', 'caption' => 'A cobblestone time capsule—heritage houses, Filipino-Chinese history, and Vigan’s iconic empanada await'],
        // R
        ],
    ];
    // Home page
    public function index()
    {
        return view('welcome', [
            'categories' => $this->categories,
            'previews' => $this->previews
        ]);
    }

    // Category page
    public function category($slug)
    {
        if (!array_key_exists($slug, $this->categories)) {
            abort(404);
        }

        return view("pages.$slug", [
            'title' => $this->categories[$slug],
            'images' => $this->images[$slug],
            'categories' => $this->categories
        ]);
    }
}


