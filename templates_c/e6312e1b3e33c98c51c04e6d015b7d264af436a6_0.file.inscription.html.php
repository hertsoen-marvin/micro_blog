<?php
/* Smarty version 3.1.31, created on 2018-03-28 17:52:45
  from "D:\wamp\www\micro_blog\inscription.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5abbd66d718281_59944611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6312e1b3e33c98c51c04e6d015b7d264af436a6' => 
    array (
      0 => 'D:\\wamp\\www\\micro_blog\\inscription.html',
      1 => 1522155464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abbd66d718281_59944611 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<?php echo '<script'; ?>
 type='text/javascript'>

  $(document).ready(function(){

    $('input').keypress(function(e){
          $(this).next("div .alert").remove();
          $(this).parent().removeClass('has-error') //div.has-error
    })

    $('#btn').click(function(e){
  //    $('form').submit(false);    /*  e.preventDefault(); */
       event.preventDefault();
      var form_valid = true;

        /******************** Dès qu'on appuie sur le bouton, on retire toutes les erreurs *************************/
      $(".alert").remove();
      $('.has-error').removeClass('has-error') //div.has-error

        /******************** On recherche dans tous les inputs des champs vides  *************************/
      $('input[type="text"], input[type="password"], input[type="email"]').each(function(){

        // Gestion des champs vides
        if (!$(this).val()){
          form_valid=false;
          $(this).parent('div').addClass("has-error");
          $(this).after("<div class='alert alert-danger'><strong>"+ $(this).attr('desc') +" est vide.</strong></div>");
          $('.alert').hide().slideDown('fast');
        }
      });

      /******************** On recherche dans tous les inputs des champs vides  *************************/
      if($('#input_password1').val() != $('#input_password2').val() && form_valid == true){ // Si les 2 champs mdp sont différents et que les champs sont tous remplis
        $('#input_password2').after("<div class='alert alert-danger'><strong> Les mots de passes ne correspondent pas.</strong></div>");
        form_valid=false;
      }


      if(form_valid){
        $('form').submit();
        return true;
        console.log('enter');
      }
    });

  });

<?php echo '</script'; ?>
>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['intitule']->value;?>
</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Connexion Section -->
    <section>
    <!--  <h1 style='color: red'>Ma vue html smarty </h1> -->

    	<div class="container ce">
    		<div class="row">

    			<form class="col-md-4 col-md-offset-4" action="inscription.php" method="POST">	<!-- on centre le bloc formulaire -->
    				<!--<div class="col-sm-3">  -->

            <div class="login-panel panel panel-default">
                <div class="panel-heading"> Complétez les champs requis :
                </div>

                <div class="panel-body">
                  <div class="form-group">
                    <label> Adresse e-mail : </label>
        						<input type="email" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['value_mail']->value;?>
 id="input_email" name="input_email" desc="l'Email" aria-describedby="emailHelp" placeholder="nom@exemple.com">
                  </div>
                  <div class="form-group">
        						<label> Mot de passe : </label>
        						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass1']->value;?>
 id="input_password1" name="input_password1" desc="Le mot de passe" placeholder='Entrez le mot de passe' >
        					</div>
                  <div class="form-group">
        						<label> Mot de passe : </label>
        						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass2']->value;?>
 id="input_password2" name="input_password2" desc="La confirmation" placeholder='Confirmez le mote de passe' >
        					</div>
                  <div class="form-group">
        						<button type="submit" id='btn' class="btn btn-primary pull-right">S'inscrire</button>
        				  </div>
                </div>
            </div>
    			</form>

    		</div>
    	</div>
    </section>
<?php }
}
