<?php
/* Smarty version 3.1.31, created on 2017-12-21 16:04:16
  from "D:\wamp\www\test_smarty\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3bdb803cd547_48899488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5476904b6ac52b6a96a3ba4dd357e9893ae636c4' => 
    array (
      0 => 'D:\\wamp\\www\\test_smarty\\index.html',
      1 => 1513872255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3bdb803cd547_48899488 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\test_smarty\\smarty-3.1.31\\libs\\plugins\\modifier.date_format.php';
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Le fil</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section>
    <div class="container">
        <div class="row">

            <?php if (isset($_smarty_tpl->tpl_vars['a']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['a']->value == 'mod' && $_smarty_tpl->tpl_vars['id']->value) {?>
                <form method="GET" action="article.php">

                    <div class="col-sm-10">

                      <div class="form-group">
                        <textarea id="message" name="message" class="form-control" placeholder="Message"> <?php echo $_smarty_tpl->tpl_vars['contenu']->value;?>
 </textarea>
                      </div>

                        <input type="hidden"  name="a"  value="mod">
                        <input type='hidden'  name='id'  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                    </div>
                    <div class="col-sm-2">
                      <button type="submit" class="btn btn-success btn-lg">Envoyer</button><br/><br/>
                      <a href='index.php'><button class="btn btn-success btn-lg">Annuler</button></a>
                    </div>
                  </form>


              <?php }?>
            <?php } else { ?>
              <form method="POST" action="message.php">

                    <div class="col-sm-10">
                      <div class="form-group">
                        <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                          <textarea id="message" name="message" class="form-control" placeholder="Rédigez votre message"></textarea>
                        <?php }?>
                      </div>
                    </div>
                    <div class="col-sm-2">
                        <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                        <?php }?>
                    </div>
                  </form>
            <?php }?>
      </div>
      <br /> <br />


      <div class="row">
          <div class="col-md-12">

            <?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['stmt']->value->fetch()) {
$_smarty_tpl->_assignInScope('data', $_prefixVariable1);
?>
              <blockquote class='blockquote cus_blockquote'><p> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['contenu'], ENT_QUOTES, 'UTF-8', true);?>
 </p><footer> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],"%A, %B %e, %Y");?>
 </footer></blockquote>

              <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                <a href='article.php?a=sup&id="<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
"' class='bouton btn btn-danger'> Supprimer</a>
                <a href='index.php?a=mod&id=<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
&contenu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["contenu"], ENT_QUOTES, 'UTF-8', true);?>
' class="bouton btn btn-warning"> Modifier</a>
              <?php }?>
              <br /> <br />
            <?php }?>




            </div>
        </div>
    </div>
</section>
<?php }
}
