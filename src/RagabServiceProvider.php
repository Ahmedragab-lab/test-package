<?php
namespace Ragab\Test;

use Illuminate\Support\ServiceProvider;

class RagabServiceProvider extends ServiceProvider
{
 public function register(){
    echo "hello world";
 }
 public function boot(){
   echo "hello world";
 }
}