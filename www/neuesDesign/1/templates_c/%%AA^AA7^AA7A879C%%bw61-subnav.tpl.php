<?php /* Smarty version 2.6.26, created on 2012-09-11 04:35:36
         compiled from content/bw61-subnav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'simplifyUrl', 'content/bw61-subnav.tpl', 10, false),)), $this); ?>
<!--
<br/>
<br/>
<br/>
<br/>
<br/>
-->
<div class="subnav">
    <ul class="nav nav-pills">
        <li class="<?php echo $this->_tpl_vars['buli_aktiv']; ?>
"><a  href="<?php echo smarty_function_simplifyUrl(array('url' => "bw61muelheim.php?was=main&wann=aktuell#Buli"), $this);?>
">Bundesliga</a><li>
        <li class="<?php echo $this->_tpl_vars['bl_aktiv']; ?>
"><a  href="<?php echo smarty_function_simplifyUrl(array('url' => "bw61muelheim.php?was=main&wann=aktuell#BL"), $this);?>
">Bezirksliga</a><li>
        <li class="<?php echo $this->_tpl_vars['bk_aktiv']; ?>
"><a  href="<?php echo smarty_function_simplifyUrl(array('url' => "bw61muelheim.php?was=main&wann=aktuell#BK"), $this);?>
">Bezirksklasse</a><li>
        <li class="<?php echo $this->_tpl_vars['kl_aktiv']; ?>
"><a  href="<?php echo smarty_function_simplifyUrl(array('url' => "bw61muelheim.php?was=main&wann=aktuell#KL"), $this);?>
">Kreisliga</a><li>
        <li class="<?php echo $this->_tpl_vars['pokale_aktiv']; ?>
"><a href="<?php echo smarty_function_simplifyUrl(array('url' => "bw61muelheim.php?was=pokale&wann=aktuell"), $this);?>
">Pokale</a><li>
    </ul>
</div>