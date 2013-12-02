<?php
// no direct access
defined('_JEXEC') or die;
?>

<div class="search<?php echo $this->pageclass_sfx; ?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<span class="article-title">
<?php if ($this->escape($this->params->get('page_heading'))) :?>
<?php echo $this->escape($this->params->get('page_heading')); ?>
<?php else : ?>
<?php echo $this->escape($this->params->get('page_title')); ?>
<?php endif; ?>
</span>
<?php endif; ?>
<?php echo $this->loadTemplate('form'); ?>
<?php if ($this->error==null && count($this->results) > 0) :
echo $this->loadTemplate('results');
else :
echo $this->loadTemplate('error');
endif; ?>
</div>



