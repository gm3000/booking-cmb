<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = \App\City::firstOrNew([]);

        $city->activities()->saveMany([
            factory(\App\Activity::class)->make([
                'name_en' => 'Loire Castles With Pick Up From Hotel - At 06.30 Am In Spanish',
                'name_cn' => 'Loire Castles With Pick Up From Hotel - At 06.30 Am In Spanish',
                'body_en' => '<p>Revive your passion for French history and art through this tour of two Renaissance castles in the Loire Valley. The Renaissance period of history, the fourteenth, fifteenth and sixteenth centuries, gave birth to a revival of artistic creation, intellectual endeavour and spiritual awakening in Europe and is reflected in the prolific writings, architecture and art that continues to be celebrated to this day.<br><br>It may be an early start but this tour of two Renaissance castles in the Loire Valley promises to be a day of revival and inspiration. On reaching the Loire Valley, start with a visit to the Royal Castle of Amboise.  This was the preferred residence of the royal court during the XV century and because of the relationship between the King and Leonardo Da Vinci, is the location of the famous artists’ tomb.<br>Visit the Clos Lucé that was gifted to the artist by the King and now houses many wonderful models of Da Vinci’s that testify to his timeless talent and genius. <br>The Castle of Chenonceau is built over the river Cher in pure traditional renaissance style and is made famous through the Royal Dames who lived there.<br>Be uplifted and inspired during your day immersed in the romanticism of the Loire Valley, the history of two incredible castles, and the examples of timeless architecture and art that you see.<br>Meeting/ Pick-up point: Departure and return transfer from any hotel located in the centre of Paris which postal code starts with 75.<br>Duration: Around 12 hours.<br>Start or opening time: Summer season: Monday, Wednesday, Friday and Sunday at 6.30am. - Winter season: Monday and Friday at 6.30am.<br>End or closing time: 6.45pm.<br>Languages: English, French, Spanish, Italian, Portuguese.<br><br> <strong>Meeting/ Pick up point:</strong> Hotels located in the centre of Paris whose postal code starts with 75. Please indicate the name of the hotel at the moment of making the reservation, otherwise the booking will not be considered confirmed.<br> <strong>Duration:</strong> 12 hours <br> <strong>Start or opening time:</strong> At 6.30am.<br> <strong>End or closing time:</strong> Return at 6.45 pm<br> <strong>Languages:</strong> English, French, Spanish, Italian, Portuguese.</p>',
                'body_cn' => '<p>Revive your passion for French history and art through this tour of two Renaissance castles in the Loire Valley. The Renaissance period of history, the fourteenth, fifteenth and sixteenth centuries, gave birth to a revival of artistic creation, intellectual endeavour and spiritual awakening in Europe and is reflected in the prolific writings, architecture and art that continues to be celebrated to this day.<br><br>It may be an early start but this tour of two Renaissance castles in the Loire Valley promises to be a day of revival and inspiration. On reaching the Loire Valley, start with a visit to the Royal Castle of Amboise.  This was the preferred residence of the royal court during the XV century and because of the relationship between the King and Leonardo Da Vinci, is the location of the famous artists’ tomb.<br>Visit the Clos Lucé that was gifted to the artist by the King and now houses many wonderful models of Da Vinci’s that testify to his timeless talent and genius. <br>The Castle of Chenonceau is built over the river Cher in pure traditional renaissance style and is made famous through the Royal Dames who lived there.<br>Be uplifted and inspired during your day immersed in the romanticism of the Loire Valley, the history of two incredible castles, and the examples of timeless architecture and art that you see.<br>Meeting/ Pick-up point: Departure and return transfer from any hotel located in the centre of Paris which postal code starts with 75.<br>Duration: Around 12 hours.<br>Start or opening time: Summer season: Monday, Wednesday, Friday and Sunday at 6.30am. - Winter season: Monday and Friday at 6.30am.<br>End or closing time: 6.45pm.<br>Languages: English, French, Spanish, Italian, Portuguese.<br><br> <strong>Meeting/ Pick up point:</strong> Hotels located in the centre of Paris whose postal code starts with 75. Please indicate the name of the hotel at the moment of making the reservation, otherwise the booking will not be considered confirmed.<br> <strong>Duration:</strong> 12 hours <br> <strong>Start or opening time:</strong> At 6.30am.<br> <strong>End or closing time:</strong> Return at 6.45 pm<br> <strong>Languages:</strong> English, French, Spanish, Italian, Portuguese.</p>',
                'gallery' => '1;2;3'
            ]),
        ]);
    }
}
