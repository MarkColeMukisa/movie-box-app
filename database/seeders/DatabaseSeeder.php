<?php

namespace Database\Seeders;

use App\Models\Movie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'desc' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'vj' => 'Junior',
                'release_date' => '1994-09-22',
            ],
            [
                'title' => 'The Godfather',
                'desc' => 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.',
                'vj' => 'Jingo',
                'release_date' => '1972-03-24',
            ],
            [
                'title' => 'Pulp Fiction',
                'desc' => 'The lives of two mob hitmen, a boxer, a gangster and his wife intertwine in four tales of violence and redemption.',
                'vj' => 'Quentin Tarantino',
                'release_date' => '1994-10-14'
            ],
            [
                'title' => 'Fight Club',
                'desc' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club.',
                'vj' => 'David Fincher',
                'release_date' => '1999-10-15'
            ],
            [
                'title' => 'Forrest Gump',
                'desc' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events.',
                'vj' => 'Robert Zemeckis',
                'release_date' => '1994-07-06'
            ],
            [
                'title' => 'Inception',
                'desc' => 'A thief who steals corporate secrets through dream-sharing technology is given the inverse task.',
                'vj' => 'Christopher Nolan',
                'release_date' => '2010-07-16'
            ],
            [
                'title' => 'The Matrix',
                'desc' => 'A computer programmer discovers that reality as he knows it is a simulation created by machines.',
                'vj' => 'Lana Wachowski',
                'release_date' => '1999-03-31'
            ],
            [
                'title' => 'Goodfellas',
                'desc' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen.',
                'vj' => 'Martin Scorsese',
                'release_date' => '1990-09-19'
            ],
            [
                'title' => 'The Silence of the Lambs',
                'desc' => 'A young FBI cadet must receive the help of an incarcerated and manipulative cannibal killer.',
                'vj' => 'Jonathan Demme',
                'release_date' => '1991-02-14'
            ],
            [
                'title' => 'Interstellar',
                'desc' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'vj' => 'Christopher Nolan',
                'release_date' => '2014-11-07'
            ],
            [
                'title' => 'The Dark Knight',
                'desc' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham.',
                'vj' => 'Christopher Nolan',
                'release_date' => '2008-07-18'
            ]
            
        ];

        foreach($movies as $movie){
            Movie::create($movie);
        }
    }
}
