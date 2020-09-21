<article class="news">
    <h3 class="news-title"><?=$post->title?></h3>
    <p>
        Written by <a href="<?=base_url("index.php/authors/showAuthorPage/$post->author")?>"><?=$post->name?></a>
    </p>
    <main class="news-body">
        <img class="newsPic" src="<?=$post->image?>" alt="<?=$post->preview?>" />
        <p><?=$post->body?></p>
        <p>
            <?php foreach ($tags as $tag):?>
                <a class="tag" href="<?=base_url("index.php/posts/getPostsByTag/$tag->tag_id")?>"> <?=$tag->tag?> </a>
            <?php endforeach ?>
        </p>
        <p><a href="<?=base_url("index.php/posts/getPostsByDate/$post->date")?>"><?=$post->date?></a></p>
        <p class="counter"><?='Views: ' . $post->newsViews?></p>
    </main>
</article>
<script src='<?=base_url('public/counter.js')?>'></script>
