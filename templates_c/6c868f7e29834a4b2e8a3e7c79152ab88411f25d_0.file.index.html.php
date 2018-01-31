<?php
/* Smarty version 3.1.31, created on 2018-01-19 22:50:51
  from "D:\wamp\www\micro_blog\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a62764b5be330_88558596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c868f7e29834a4b2e8a3e7c79152ab88411f25d' => 
    array (
      0 => 'D:\\wamp\\www\\micro_blog\\index.html',
      1 => 1516402191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a62764b5be330_88558596 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\micro_blog\\smarty-3.1.31\\libs\\plugins\\modifier.date_format.php';
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
                <form method="GET" action="messages.php">

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
                      <!--<a href='index.php'><button class="btn btn-success btn-lg">Annuler</button></a>-->
                    </div>
                  </form>


              <?php }?>
            <?php } else { ?>

              <form method="GET" action="messages.php">
                <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                  <input type="hidden"  name="a"  value="crea">
                <?php }?>

                <div class="row">

                    <div class="col-sm-10">
                      <div class="form-group">
                        <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                          <textarea id="message" name="message" class="form-control" placeholder="Rédigez votre message" rows="3" style='resize:none;'></textarea>
                        <?php }?>
                      </div>
                    </div>

                    <div class="col-sm-2">
                        <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                        <button type="submit" class="btn btn-success " style='width:100%; '>Envoyer</button>
                        <?php }?>
                    </div>
                </div>
              </form>

            <?php }?>
      </div>
      <br /> <br />

      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <form method="GET" action="index.php">
            <div id='search_bar' class="input-group stylish-input-group">
                <input type="text" name='search_bar' class="form-control"  placeholder="Rechercher un message" >
                <span class="input-group-addon">
                  <button type="submit">
                      <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
            </div>
          </form>
        </div>
      </div>


      <div class="row">
          <div class="col-md-12">

            <?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['messages']->value->fetch()) {
$_smarty_tpl->_assignInScope('data', $_prefixVariable1);
?>
              <blockquote class='blockquote cus_blockquote'><p> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['contenu'], ENT_QUOTES, 'UTF-8', true);?>
 </p><footer> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date'],"%A, %B %e, %Y");?>
 </footer></blockquote>

              <?php if ($_smarty_tpl->tpl_vars['connecte_util']->value) {?>
                <a href='messages.php?a=sup&id=<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
' class='bouton btn btn-danger'> Supprimer</a>
                <a href='index.php?a=mod&id=<?php echo $_smarty_tpl->tpl_vars['data']->value["id"];?>
&contenu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["contenu"], ENT_QUOTES, 'UTF-8', true);?>
' class="bouton btn btn-warning"> Modifier</a>
              <?php }?>
              <br /> <br />
            <?php }?>


            </div>
        </div>


        <div class="row">
            <ul class="pagination pull-right">
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_cases_pagination']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_cases_pagination']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <li><a href="index.php?selected_page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
              <?php }
}
?>


              <!--<li class="disabled"><a href="#">4</a></li>-->
            </ul>
        </div>

    </div>
</section>
<?php }
}
