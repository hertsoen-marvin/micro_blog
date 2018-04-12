<?php
/* Smarty version 3.1.31, created on 2018-04-12 19:41:07
  from "D:\wamp\www\micro_blog\inscription.js" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5acfb653836113_10314107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691941ae46793bde0fd0693ffa76a576019b0b7b' => 
    array (
      0 => 'D:\\wamp\\www\\micro_blog\\inscription.js',
      1 => 1523561958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acfb653836113_10314107 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
