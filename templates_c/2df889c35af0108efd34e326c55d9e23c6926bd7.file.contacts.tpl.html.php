<?php /* Smarty version Smarty-3.1.14, created on 2013-08-01 16:34:02
         compiled from ".\templates\display\contacts.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:706951eab3ca3baf73-00070938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df889c35af0108efd34e326c55d9e23c6926bd7' => 
    array (
      0 => '.\\templates\\display\\contacts.tpl.html',
      1 => 1375364032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706951eab3ca3baf73-00070938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51eab3ca3ee082_60846055',
  'variables' => 
  array (
    'submitMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51eab3ca3ee082_60846055')) {function content_51eab3ca3ee082_60846055($_smarty_tpl) {?><div id="content" class="clear">
    	<h2 style="margin: 10px 25px;">Contact Us</h2>
       <div id="form_box" >
			<p style=" display:block;  height: 60px; margin: 5px; "><span style="border: 1px solid red; background: #CCC; "><?php echo $_smarty_tpl->tpl_vars['submitMsg']->value;?>
 </span>Please fill out and submit the form on this page to contact us. We will get back to you 
			as soon as we can. Note: We do not sell, trade, or exchange addresses!</p>
			
			<!-- display form -->
			<form action="./index.php?prgm=contacts" method="post" name="contact" style="margin: 0 auto;">
				<fieldset>
                	<legend>Contact form </legend>
						<label for="name">Full Name </label><br class="br" />
						<input name="name" type="text" required class="textfield" placeholder="Name" value="" size="40" >
						<br />
						<label for="email">E-mail </label><br class="br" />
						<input name="email" type="email" placeholder="Email address" value="" size="40" class="textfield">
						<br />
<label for="phone">Phone </label><br class="br" /><input name="phone" type="tel" placeholder="Telephone" value="" size="40" class="textfield">
						<br />
						<label for="subject">Subject </label><br class="br" />
						<input name="subject" type="text" required class="textfield" placeholder="Subject" value="" size="40">	
						<br />
						<label for="message">Message </label><br class="br" />
						<textarea name="message" cols="30" rows="15" required placeholder="Please type your message here!"></textarea>
                        <br />
						<label for="submit">&nbsp;</label><br class="br" />
						<input name="Send" type="submit" class="submit" value="submit">
					</fieldset>
			</form>
       </div>
    	<div class="cf-left">	
            <div class="container_sidebar2">
            <p>Infectious Diseases Research Collaboration<br>
                <strong>Kampala</strong>

                Mulago Hospital Complex<br />
                P.O. Box 7475<br />
                Kampala, Uganda<br /><br />
                
                Phone: +256 (0) 414 530 692<br />
                Fax: +256 (0) 414 540 524<br />
                Email: admin [at] idrc-uganda [dot] org<br />
                Tororo
                
                <strong>Tororo District Hospital</strong>
                P.O. Box 749<br />
                Tororo, Uganda<br />
                Mbarara<br /><br />
                
                <strong>Mulago Hospital Complex</strong>
                P.O. Box 7475<br />
                Kampala, Uganda<br />
                Jinja<br /><br />
                
                <strong>Mulago Hospital Complex</strong>
                P.O. Box 7475<br />
                Kampala, Uganda<br /><br />
				</p>
            </div>
        </div>    
    </div>

<?php }} ?>