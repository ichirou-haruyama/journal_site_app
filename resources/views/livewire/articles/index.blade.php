<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['articles' => fn() => Article::all()]);

$create = function() {
    return redirect()->route('articles.create');
};

?>

<div>
    <!-- 論文の一覧表示 -->
        <h1>論文の一覧</h1>
        
            @foreach ($articles as $article)
                
                <p>
                <a href="{{ route('articles.show', $article->id) }}">
                {{ $article->title }}</a>
                </p>
                
            @endforeach
        
        <button wire:click="create">新規論文投稿</button>
</div>
