<?php
// no direct access
defined('_JEXEC') or die;
?>

<dl class="search-results<?php echo $this->pageclass_sfx; ?>">
<?php foreach($this->results as $result) : ?>
<dt class="result-title">
<?php echo $this->pagination->limitstart + $result->count.'. ';?>
<?php if ($result->href) :?>
<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
<?php echo $this->escape($result->title);?>
</a>
<?php else:?>
<?php echo $this->escape($result->title);?>
<?php endif; ?>
<!-- NO SEZIONE <?php if ($result->section) : ?>
<span class="result-category">
<span class="small<?php echo $this->pageclass_sfx; ?>">
-- (<?php echo $this->escape($result->section); ?>)
</span>
</span>
</dt>
<?php endif; ?>-->
<?php if ($this->params->get('show_date')) : ?>
<span class="result-created<?php echo $this->pageclass_sfx; ?>">
<i>-- <?php echo JText::sprintf('JGLOBAL_CREATED_DATE_ON', $result->created); ?></i>
</span>
<?php endif; ?>
<dd class="result-text">
<?php echo $result->text; ?>
</dd>
<?php endforeach; ?>
</dl>
<p></p>
<div class="pagination">
<?php echo $this->pagination->getPagesLinks(); ?>
</div>