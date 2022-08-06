<?php

namespace App\Http\Controllers\Web;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;

class Routes extends Controller
{
    //

    function showBeranda () {
        return view('beranda', [
            'title' => 'Beranda',
            'articles' => Article::all(),
        ]);
    }

    function showKamus () {
        return view('kamus', [
            'title' => 'Kamus',
            'articles' => Article::all(),
        ]);
    }

    function showEvent () { 
        return view('event', [
            'title' => 'Event',
            'articles' => Article::all(),
        ]);
    }

    function getEventDetail (Article $article) {
        return view('event-Detail', [
            'title' => 'Detail Event',
            'articles' => Article::all(),
        ]);
    }

    function showArtikel () {
        return view('artikel', [
            'title' => 'Artikel',
            'articles' => Article::all(),
        ]);
    }

    function showRegister () {
        return view('register.register', [
            'title' => 'Daftar'
        ]);
    }
}
