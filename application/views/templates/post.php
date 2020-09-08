<article class="post">
    <img src="<?=$post->image?>" alt="<?=$post->preview?>" />
    <main class="post">
        <h3 class="post-title"><?=$post->title?></h3>
        <blockquote>Written by <a href="<?=base_url("index.php/authors/showAuthorPage/$post->author")?>"><?=$post->name?></a></blockquote>
        <img class="avatar" src="<?=$post->avatar?>" alt="Avatar of <?=$post->avatar?>" />
        <p><?=$post->body?></p>
    </main>
    <p>
        <?php foreach ($tags as $tag):?>
            <span> <?=$tag->tag?> </span>
        <?php endforeach ?>
    </p>
    <p><?=$post->date?></p>

    <!-- Add tags here -->

</article>