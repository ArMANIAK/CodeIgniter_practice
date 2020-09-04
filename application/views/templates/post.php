<article class="post">
    <img class="avatar" src="<?=$post->avatar?>" alt="Avatar of <?=$post->avatar?>" />
    <main class="post">
        <h3 class="post-title"><?=$post->title?></h3>
        <blockquote>Written by <?=$post->name?></blockquote>
        <p><?=$post->body?></p>
    </main>
    <img src="<?=$post->image?>" alt="<?=$post->preview?>" />
    <p><?=$post->date?></p>
</article>