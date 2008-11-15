<?php // @version $Id: default.php 10381 2008-06-01 03:35:53Z pasamio $
      defined('_JEXEC') or die('Restricted access');
?>

<?php if (count($list)) : ?>
<div class="latestnews<?php echo $params->get('pageclass_sfx'); ?>">
  <?php foreach ($list as $item) : ?>
  <h4><?php echo $item->title; ?></h4>
  <p><?php echo $item->text; ?> [<a href="<?php echo $item->link; ?>" class="latestnews<?php echo $params->get('pageclass_sfx'); ?>">More</a>]</p>
  <?php endforeach; ?>
</div>
<?php endif; ?>
