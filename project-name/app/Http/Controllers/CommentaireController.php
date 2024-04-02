<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    //
    public function create($id){
        $article = Article::find($id);
        return view('commentaires.create',compact('article'));
    }

    public function store(Request $request,$id){
        $com = new Commentaire();
        $com->contenu_c = $request->contenu_c;
        $com->article_id = $request->article_id;
        $com->save();
        return redirect('/article/'.$id);
    }
}
