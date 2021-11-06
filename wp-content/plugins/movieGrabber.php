<?php
/**
 * @package Movie Grabber
 * @version 1.0
 */
/*
Plugin Name: Movie Grabber
Plugin URI: http://wordpress.org/plugins/movie-grabber/
Description: Grabs some wicked movies
Author: The Duffman
Version: 1.0
*/

defined( 'ABSPATH' ) || die( 'Unauthorised access' );

add_shortcode( 'external_data', 'grab_movies' );

function grab_movies($data) {
    $url = 'http://www.omdbapi.com/?apikey=10cca065&s=red';

    $arguments = array(
        'method' => 'GET',
    );

    $response = wp_remote_get($url, $arguments);

    if( is_wp_error($response)) {
        $error_message = $response->get_error_message();
        return 'Something went wrong: $error_message';
    }

    $data = json_decode( wp_remote_retrieve_body($response), true);

    foreach($data as $movies) {
        var_dump($data->Search->Title);
        if(is_array($movies)) {
            foreach($movies as $movie)

            $title = $movie['Title'];
            $year = $movie['Year'];
            $imdbID = $movie['imdbID'];
            $poster = $movie['Poster'];
            return <<<HTML
            <div class="row">
                <div class="col py-2">
                    <div class="card">
                        <div class="card-header">
                            Movie Title: $title
                        </div>
                        <div class="card-body">
                            Year: $year
                            imdbID: $imdbID
                            Poster: <img src='$poster'/>
                        </div>
                    </div>
                </div>
            </div>
HTML;
        }
    }
}
