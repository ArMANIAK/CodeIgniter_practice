<article class="author">
    <img class="avatar" src="<?=$author->avatar?>" alt="Avatar of <?=$author->name?>" />
    <div class="authorInfo">
        <h3><a href="<?= base_url("index.php/authors/showAuthorPage/$author->authorId"); ?>"><?=$author->name?></a></h3>
        <?php foreach (explode(' ', $author->socialNetworks) as $socialNetLink): ?>
            <p><?=explode('/', $socialNetLink)[0]?>:
                <a href="<?=$socialNetLink?>"><?=explode('/', $socialNetLink)[1]?></a>
            </p>
        <?php endforeach ?>
    </div>
</article>