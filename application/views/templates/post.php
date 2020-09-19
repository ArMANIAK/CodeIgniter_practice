<article class="post">
    <img src="<?=$post->image?>" alt="<?=$post->preview?>" />
    <main class="post">
        <h3 class="post-title"><a href="<?=base_url("index.php/posts/showPostPage/$post->id")?>"><?=$post->title?></a></h3>
        <p>
            Written by <a href="<?=base_url("index.php/authors/showAuthorPage/$post->author")?>"><?=$post->name?></a>
            <img class="avatar" src="<?=$post->avatar?>" alt="Avatar of <?=$post->avatar?>" />
        </p>
        <p><?=$post->preview?></p>
        <p>
            <?php foreach ($tags as $tag):?>
                <a class="tag" href="<?=base_url("index.php/posts/getPostsByTag/$tag->tag_id")?>"> <?=$tag->tag?> </a>
            <?php endforeach ?>
        </p>
        <p><a href="<?=base_url("index.php/posts/getPostsByDate/$post->date")?>"><?=$post->date?></a></p>
        <p class="counter"><?=$post->newsViews?></p>
    </main>
</article>