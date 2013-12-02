<?php
// no direct access
defined('_JEXEC') or die;
?>
<div class="items-more-box">
<div class="cornerbottomleftwhite">
<div class="cornerbottomrightwhite">
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
<li>
<a href="<?php echo $item->link; ?>">
<?php echo $item->title; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div></div></div>