<article class="post">
    <img src="<?=$post->image?>" alt="<?=$post->preview?>" />
    <p class="counter"><?='Views: ' . $post->newsViews?></p>
    <main class="post">
        <h3 class="post-title"><a href="<?=base_url("index.php/posts/showPostPage/$post->id")?>"><?=$post->title?></a></h3>
        <p>
            Written by <a href="<?=base_url("index.php/authors/showAuthorPage/$post->author")?>"><?=$post->name?></a>
        </p>
        <p><?=$post->preview?></p>
        <p>
            <?php foreach ($tags as $tag):?>
                <a class="tag" href="<?=base_url("index.php/posts/getPostsByTag/$tag->tag_id")?>"> <?=$tag->tag?> </a>
            <?php endforeach ?>
        </p>
        <p><a href="<?=base_url("index.php/posts/getPostsByDate/$post->date")?>"><?=$post->date?></a></p>
    </main>
</article>