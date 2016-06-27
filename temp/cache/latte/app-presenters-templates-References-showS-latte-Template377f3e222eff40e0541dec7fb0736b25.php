<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/References/showS.latte

class Template377f3e222eff40e0541dec7fb0736b25 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('949468f6fc', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb6be00ea094_content')) { function _lb6be00ea094_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Reference:create"), ENT_COMPAT) ?>
">Vytvoriť novú referenciu</a>
<?php } ?>
                <hr><h2 class="intro-text text-center">
                    <strong>Referencie</strong>
                </h2>
                <hr>

<?php $iterations = 0; foreach ($references as $reference) { ?>                <div class="col-lg-12">
                    <div class="col-md-6 text-center">
                        <h2><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?>

                            <br>
                            <small><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></small>
                        </h2>
                        <p align="left"><?php echo Latte\Runtime\Filters::escapeHtml($reference->content, ENT_NOQUOTES) ?>

                        </p> 
                    </div>

                                        <div class="col-lg-12 text-center">
                        <a class="btn btn-default btn-lg" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Reference:show", array($reference->id)), ENT_COMPAT) ?>
">Ukázať viac</a>
                    </div>
                </div>
<?php $iterations++; } ?>


            </div>    

            <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
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