<?php

// Create a song class
class Song 
{
  // Create songId and title public properties
  public $songId;
  public $title;
}

// Instantiate a song using the new keyword
$entersandmanSong = new Song();
$entersandmanSong->songId = 1;
$entersandmanSong->title = "Enter Sandman";
// var_dump() and check in the browser
// var_dump($entersandmanSong);

$sadbuttrueSong = new Song();
$sadbuttrueSong->songId = 2;
$sadbuttrueSong->title = "Sad but true";

class Playlist
{
  public $name;
  public $songs = [];

  public function addSong($song) {
    $this->songs[] = $song;
  }
}

$playlist = new Playlist();

$playlist->name = 'Rock!';
$playlist->addSong($entersandmanSong);
$playlist->addSong($sadbuttrueSong);

var_dump($playlist->songs);

?>