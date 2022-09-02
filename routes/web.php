<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    $first_name = 'Rodrigue';
    $last_name = 'MASTER';
    $title = ' la audi thunder';
    $body = 'ce bijou de fabication est un bolide de plus 450 chevaux sous le capo';
    //DB::insert('INSERT INTO posts (title, body) VALUES (:title, :body)', [$title, $body]);
        //$result = DB::select('SELECT * FROM posts');
        //dump($result);
        #Fluent query builder
        //$collect = DB::table('posts')->where('id', '!=', 4)->get(['id','title as heading']);
        // $collect = DB::table('posts')->first();
        // return $collect;
        // $datas = DB::table('posts')
        //             ->whereTitle('sun tzu')
        //             ->whereBody( 'toutes la stategie de la guerre repose sur votre capacite a duper l\'ennemi')
        //             ->get();
            #inserting datas using the fluent query builder
            // DB::table('posts')->insert([
            //     [
            //         'title' => 'audi beast',
            //         'body' => 'la audi est une voiture 4 en 1'
            //     ],
            //     [
            //         'title' => 'bugatti chiron',
            //         'body' => 'la marque de luxe bugatti produit des bolides merveilleux'
            //     ]
            // ]);
            #drop table with fluent query builder
            //DB::statement('DROP TABLE posts');
        // $datas = DB::table('posts')
        //             ->where('id', '>', 10)
        //             ->update(['title'=> 'bolide cars']);

        // $datas = DB::table('posts')->where('id', '>', 11)->delete();
        // dump($datas);
                #Eloquent
        //$datas = App\Models\Post::find(10);
                #insert with eloquent
                    // $post = new Post;
                    // $post->title = 'une new voiture';
                    // $post->body = 'the new audi beast is a very very super car';
                    // $post->save();
                    #other way to make it
                    // $post = new Post([
                    //     'title' => 'Blackmaster',
                    //     'body' => 'spectral dev'
                    // ]);
                    // $post->save();
                    // $post = Post::create([
                    //     'title' => 'Rodigue Master',
                    //     'body' => 'A spectral human'
                    // ]);
    // $datas = [
    //     'firstName' => $first_name,
    //     'lastName' => $last_name
    // ];
    // return view('welcome', $datas);
    #another way to pass data to the view

    return view('welcome', compact('last_name', 'first_name'));
});
Route::get('/about', function () {
    return view('pages.about');
    #return View::make('pages.about');
});
Route::get('/help', function() {
    return view('pages.help');
});
Route::get('/events', function(){
    $events = [
        'se reveiller',
        'manger',
        'coder',
        'dormir',
        'repeat'
    ];
    return view('events.index', compact('events'));
});
