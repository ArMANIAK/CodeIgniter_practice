<nav>
    <?= $this->calendar->generate(date('Y'), date('n'), $links);?>
    <ul>
        <li><a href="<?= base_url(); ?>">Home page</a></li>
        <li><a href="<?= base_url('index.php/posts/getPostsByDate/' . date('yy-m-d')); ?>">Today's news</a></li>
        <li><a href="<?= base_url('index.php/posts/getPostsByDate'); ?>">Most popular</a></li>
        <li><a href="<?= base_url('index.php/authors'); ?>">Our bloggers</a></li>
        <li>In case of emergency</li>
    </ul>
</nav>
<section class="content">
