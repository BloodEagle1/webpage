<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Galery/show.latte

class Template6d4c7b745c1bd351bd150ba7078449a2 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0c93a2fa68', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbe404e7adb7_content')) { function _lbe404e7adb7_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><p><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:show"), ENT_COMPAT) ?>
">← zpět na výpis příspěvků</a></p>

<div class="date"><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></div>

<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<div class="post"><?php echo Latte\Runtime\Filters::escapeHtml($reference->content, ENT_NOQUOTES) ?></div>
<?php if ($user->loggedIn) { ?><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit", array($reference->id)), ENT_COMPAT) ?>
">Upravit příspěvek</a>
<?php } 
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb72b391694e_title')) { function _lb72b391694e_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?></h1>
<?php
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}