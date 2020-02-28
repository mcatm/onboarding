<?php

get_template_part('header');

$q = new WP_Query([
  'post_type' => 'post',
]);

?>

<?php if($q->have_posts()):?>
<h2>投稿記事</h2>

<?php

while($q->have_posts()):
$q->the_post();

?>
<div>
  <h3>タイトル：<?php the_title()?></h3>
  <h4>サブタイトル：<?php the_field('subtitle')?></h4>
</div>
<?php endwhile?>
<?php endif?>