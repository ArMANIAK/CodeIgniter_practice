<article class="author">
    <img class="avatar" src="<?=$author->avatar?>" alt="Avatar of <?=$author->name?>" />
    <a href="<?= base_url("index.php/posts/getPostsByAuthor/$author->id"); ?>"><h3><?=$author->name?></h3>
</article>