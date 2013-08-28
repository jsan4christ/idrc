<?php /* Smarty version Smarty-3.1.14, created on 2013-08-05 18:04:34
         compiled from ".\templates\display\facilities-dmc.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:755351ee74dd2d6221-16117063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141738ff33219dd5793b096819baf72cb2634171' => 
    array (
      0 => '.\\templates\\display\\facilities-dmc.tpl.html',
      1 => 1375715070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755351ee74dd2d6221-16117063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51ee74dd304880_31510608',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee74dd304880_31510608')) {function content_51ee74dd304880_31510608($_smarty_tpl) {?><div id="content" class="content-box-m">
  <h3>Data Management Center</h3>
    <p><b>Overview</b></p>
    <p>The Data Management  Center (DMC) is responsible for providing data management needs to all projects  within IDRC.  The main IDRC Data  Management Center was established in 2005 in Kampala and in 2008 a satellite  Data Center was opened in Tororo to facilitate the Tororo based studies.  The Data Management team consists of  approximately 40 staff members based in Kampala, Tororo, Mbarara, Mbale, and  also in our surveillance sites throughout Uganda.  Typically, at any one time, there may be between  5 and 10 large projects being managed by the DMC, including clinical trials and  surveillance studies.  </p>
    <p>The DMC is also  responsible for providing IT support to all staff members.  Currently, the IT infrastructure is comprised  of 6 servers and more than 200 computers/laptops.  Each data center has a 1 Mbps full duplex  Internet connection to serve the users.</p>
    <p>&nbsp;</p>
    <p><b>Data  Management System</b></p>
    <p>For studies/trials using  paper data collection, IDRC has designed and developed a custom Data Management  System that is used to manage the data, using   SQL Server as the backend for all data storage.  MS Access is used for double data entry and  SAS programs are used for comparing 1st and 2nd entry and  generating discrepancy reports.  DTS/SSIS  packages are used to automatically import/export any new data and stored  procedures written in T-SQL are used to automatically generate new data queries  on a daily basis.  There is a web  interface to the whole system written in ASP.NET to allow users to view the  data, view reports, and even modify the data they are authorized to  access.  With regular backups and a full  audit trail, the whole system is regulatory compliant (21 CFR Part 11).</p>
    <p>&nbsp;</p>
    <p><b>Other  Data Collection Methods</b></p>
    <ul type="disc">
      <li>We also       collect survey data electronically using Questionnaire Development System       (QDS) software on tablet computers.        This method has proven to be very successful, allowing us to have       high quality data in almost real-time in a cost effective manner.</li>
      <li>Using low       cost mobile phones and FrontlineSMS/FrontlineForms, we currently collect       ACT drug stock levels at 12 health centers throughout Uganda.  Data is transmitted on a weekly basis to       the main DMC via SMS messages.</li>
      <li>We have       also developed custom made software which integrates administering       questionnaires, capturing GPS coordinates, and capturing individual       fingerprint information.</li>
    </ul>
    <p>&nbsp;</p>
    <p><b>Specimen  Tracking</b></p>
    <p>An in-house  barcoding system was developed for specimen collection, storage and  tracking.  Hand-held scanners are used to  quickly scan barcodes for specimen storage or retrieval purposes.  We have also recently implemented FreezerW<b> </b></p>
</div>
<?php }} ?>