<?php
// source: C:\wamp\www\bakalarka_web\vendor\ipub\flash-messages\src\IPub\FlashMessages\Components\template\bootstrap\default.latte

class Template660da0b3cba093631fc66176d68727aa extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('446bbdba84', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block _messages
//
if (!function_exists($_b->blocks['_messages'][] = '_lbabd4478d09__messages')) { function _lbabd4478d09__messages($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('messages', FALSE)
;$iterations = 0; foreach ($flashes as $flash) { if (!$flash->isDisplayed()) { if ($flash->getOverlay() && $useOverlay) { $_b->templates['446bbdba84']->renderChildTemplate('modal.latte', array('modalClass' => 'flash-modal',
				'title' => $flash->getTitle(),
				'body' => $flash->getMessage(),
				'useTitle' => $useTitle) + $template->getParameters()) ;} else { ?>
		<div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->getLevel() == 'error' ? 'danger' : $flash->getLevel(), ENT_COMPAT) ?>">
			<a class="close" data-dismiss="alert" href="#">×</a>
<?php if ($flash->getTitle() && $useTitle) { ?>			<strong><?php echo $flash->getTitle() ?>
</strong><?php } ?>
 <?php echo $flash->getMessage() ?>

		</div>
<?php } $flash->setDisplayed() ;} $iterations++; } 
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?><div class="ipub-flash-messages uk-text-left"<?php echo ' id="' . $_control->getSnippetId('messages') . '"' ?>>
<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['_messages']), $_b, $template->getParameters()) ?>
</div>
<?php
}}