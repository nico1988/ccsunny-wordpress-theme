<?php
get_header();

function greet($name, $color)
{
  echo "<p>hello $name and my favarite color is $color</p>";
}
greet('john', 'blue');
greet('jane', 'red');
?>

<p>
  this is ccsunny's first template
</p>
<h2>
  <?php bloginfo('name') ?>
</h2>
<div>
  <?php bloginfo('description') ?>
</div>

<?php
$name = array('brad', 'nico', 'ruirui', 'hanna');
$count = 0;

while ($count < count($name)) {
  echo "<li>Hi, My name is $name[$count]</li>";
  $count++;
}
?>

<div>
  <span>Hi </span>
  <span>My name is
    <?php echo $name[0] ?>
  </span>
</div>

<div class="posts">
  <h2 style="color: red;">this is the site posts</h2>
  <?php
  while (have_posts()) {
    the_post(); ?>
    <h3>
      <?php the_title(); ?>
    </h3>
    <?php the_content(); ?>
  <?php
  }
  ?>
</div>

<?php get_footer(); ?>