<?php
// source: C:\wamp\www\web\app\presenters/templates/Contact/default.latte

class Template1b098b909f3141b51b8f4edba7be1861 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('688f49adf5', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb223726f936_title')) { function _lb223726f936_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Kontakt<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbd09af812be_content')) { function _lbd09af812be_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Kontakt
                    <strong>Vašo Sloboda</strong>
                </h2>
                <hr>

                <div class="col-md-8">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1302.7749916633536!2d18.71276513059593!3d49.22806102883174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47145e82c6265f21%3A0x12ad88617fd8acd4!2zQWfDoXRvdsOhIDE4My8xNCwgMDEwIDAxIMW9aWxpbmEtWsOhdm9kaWU!5e0!3m2!1ssk!2ssk!4v1461076594821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 text-center" >
<?php $iterations = 0; foreach ($contacts as $contact) { ?>
                        <p>Telefon:
                            <br><strong><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($contact->phone, ENT_NOQUOTES)) ?></strong></p>
                        <p>Email:
                            <br><strong><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($contact->email, ENT_NOQUOTES)) ?></strong></p>
                        <p>Adresa:
                            <br><strong><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($contact->adress, ENT_NOQUOTES)) ?></strong> </p> 

                        <div class="col-sm-3" id="editForm">
                        <?php if ($user->loggedIn) { $_l->tmp = $_control->getComponent("editForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>

                    </div>
<?php $iterations++; } if ($user->loggedIn) { ?>                <div id="edit" class="col-sm-4 btn btn-default button"><a>Upraviť</a></div>
<?php } ?>
            </div>      
        </div>
    </div>
</div>
</div>
<script>
    $("#editForm").live("submit", function (callback) {
        $(this).ajaxSubmit();
        return false;
    });
</script>
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
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php
}}