<?php

class Post
{
  public $title;
  public $published;
  public $author;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->published = $published;
    $this->author = $author;
  }
}

 $posts = [
   new Post('My first post', 'GJ', true),
   new Post('My second post', 'GJ', true),
   new Post('My third post', 'GF', true),
   new Post('My fourth post', 'GK', false),
 ];

 $unpublishedPosts = array_filter($posts, function ($post) {
  return ! $post->published;
 });

 $publishedPosts = array_filter($posts, function ($post) {
  return $post->published;
 });

 $modified = array_map(function ($post) {
   $post->published = true;
   return $post;
 }, $posts);


 $titles = array_column($posts, 'title');

 $posts = array_map(function ($post) {
   return (array) $post;
 }, $posts);

$authors = array_column($posts, 'author', 'title');

 var_dump($authors);