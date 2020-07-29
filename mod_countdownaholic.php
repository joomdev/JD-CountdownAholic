<?php
/*------------------------------------------------------------------------
# mod_countdownaholic - JD CountdownAholic for Joomla 3.x v1.4.1
# ------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
-------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite = JURI::base();
//append javascript along with css files
$document = JFactory::getDocument();
$document->addScript(JURI::root().'modules/mod_countdownaholic/js/countdown.js');
$moduleId 	 	= $module->id;
$styling    = $params->get('styling', 1);
$pathing    = $params->get('pathing', 1);
$alignment    = $params->get('alignment');
$hideLabels    = $params->get('hideLabels');
$hideLine    = $params->get('hideLine');
$useURL   = $params->get('useURL', 1);
?>

<div class="countdown">

<?php if ($styling == "1"): ?>
  <?php echo $params->get('textAbove') ?>
    <?php if ($alignment == "center"): ?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td align="center" valign="middle">
  <?php endif ; ?>
<script type="application/javascript">
/*
1 hour = 3600 seconds
1 day = 86400 seconds
1 week = 604800 seconds
1 month = 2629744 seconds 
1 year = 31556926 seconds
*/
function countdownComplete(){
  location.replace('<?php echo $params->get('redirectURL') ?>');
}
var countdown<?php echo $moduleId; ?> = new Countdown({
                              year    : <?php echo $params->get('year') ?>,
                              month   : <?php echo $params->get('month') ?>, 
                              day   : <?php echo $params->get('day') ?>, 
                              hour    : <?php echo $params->get('hour') ?>,
                              ampm    : "<?php echo $params->get('ampm') ?>",
                              minute  : <?php echo $params->get('minute') ?>, 
                              second  : <?php echo $params->get('second') ?>,
                              style     : "flip", // flip or boring
                              hideLabels  : <?php echo $params->get('hideLabels') ?>,    // Set to true to prevent the "DAYS HOURS MINUTES" labels below the number altogether
                              hideLine  : <?php echo $params->get('hideLine') ?>,    // When true, hides the black line in the middle of the numbers. (Doesn't affect the "flip" stlye)
                              rangeHi : "<?php echo $params->get('rangeHi') ?>",  // The highest unit of time to display
                              rangeLo : "<?php echo $params->get('rangeLo') ?>",  // The lowest unit of time to display
                              numberMarginTop : <?php echo $params->get('topMargin') ?>,
                              padding : <?php echo $params->get('padding') ?>,  // Padding between the digits and the background box. Value reflects a percentage of overall height.
                              width     : <?php echo $params->get('width') ?>,  // Defaults to 200 pixels, you can specify a custom width size here.
                              height  : <?php echo $params->get('height') ?>,   // Defaults to 30 pixels, you can specify a custom height size here.
                              labelText :   {
                                              second  : "<?php echo $params->get('textSeconds') ?>",
                                              minute  : "<?php echo $params->get('textMinutes') ?>",
                                              hour  : "<?php echo $params->get('textHours') ?>",
                                              day   : "<?php echo $params->get('textDays') ?>",
                                              month   : "<?php echo $params->get('textMonths') ?>",
                                              year  : "<?php echo $params->get('textYears') ?>"     // <- no comma on last item!
                                            },
                <?php if($params->get('redirectURL') != ""){ ?>
                onComplete  : countdownComplete,  // Specify a function to call when done.
                <?php } ?>
                              labels  : {
                              font    : "<?php echo $params->get('labelsFont') ?>",
                              color   : "<?php echo $params->get('labelsColor') ?>", 
                              textScale : <?php echo $params->get('textScale') ?>, //Labels font size.
                              offset  : <?php echo $params->get('offSet') ?>,  // Number of pixels to push the labels down away from numbers.
                              weight  : "normal"   // < - no comma on last item!
                         }
});
</script>
            </td>
          </tr>
        </tbody>
      </table>
    <?php echo $params->get('textBelow') ?>
<?php endif ; ?>

<?php if ($styling == "2"): ?>
  <?php echo $params->get('textAbove') ?>
    <?php if ($alignment == "center"): ?>
      <table width="<?php echo $params->get('CSSalignment') ?>%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td align="center" valign="middle">
  <?php endif ; ?>
<script type="application/javascript">
/*
1 hour = 3600 seconds
1 day = 86400 seconds
1 week = 604800 seconds
1 month = 2629744 seconds 
1 year = 31556926 seconds
*/
function countdownComplete(){
  location.replace('<?php echo $params->get('redirectURL') ?>');
}
var countdown<?php echo $moduleId; ?> = new Countdown({
                              year    : <?php echo $params->get('year') ?>,
                              month   : <?php echo $params->get('month') ?>, 
                              day   : <?php echo $params->get('day') ?>, 
                              hour    : <?php echo $params->get('hour') ?>,
                              ampm    : "<?php echo $params->get('ampm') ?>",
                              minute  : <?php echo $params->get('minute') ?>, 
                              second  : <?php echo $params->get('second') ?>,
                              style     : "boring", // flip or boring
                              hideLabels  : <?php echo $params->get('hideLabels') ?>,    // Set to true to prevent the "DAYS HOURS MINUTES" labels below the number altogether
                              hideLine  : <?php echo $params->get('hideLine') ?>,    // When true, hides the black line in the middle of the numbers. (Doesn't affect the "flip" stlye)
                              rangeHi : "<?php echo $params->get('rangeHi') ?>",  // The highest unit of time to display
                              rangeLo : "<?php echo $params->get('rangeLo') ?>",  // The lowest unit of time to display
                              numberMarginTop : <?php echo $params->get('topMargin') ?>,
                              padding : <?php echo $params->get('padding') ?>,  // Padding between the digits and the background box. Value reflects a percentage of overall height.
                              width     : <?php echo $params->get('width') ?>,  // Defaults to 200 pixels, you can specify a custom width size here.
                              height  : <?php echo $params->get('height') ?>,   // Defaults to 30 pixels, you can specify a custom height size here.
                              labelText :   {
                                              second  : "<?php echo $params->get('textSeconds') ?>",
                                              minute  : "<?php echo $params->get('textMinutes') ?>",
                                              hour  : "<?php echo $params->get('textHours') ?>",
                                              day   : "<?php echo $params->get('textDays') ?>",
                                              month   : "<?php echo $params->get('textMonths') ?>",
                                              year  : "<?php echo $params->get('textYears') ?>"     // <- no comma on last item!
                                            },
                <?php if($params->get('redirectURL') != ""){ ?>
                              onComplete  : countdownComplete,  // Specify a function to call when done.
                <?php } ?>
                              numbers  : {
                              font : "<?php echo $params->get('numbersFont') ?>",
                              color : "<?php echo $params->get('numbersColor') ?>",
                              bkgd  : "<?php echo $params->get('backgroundColor') ?>",
                              rounded : 0.15,  // percentage of size 
                              shadow  : {
                                           x : 0,  // x offset (in pixels)
                                           y : 3,  // y offset (in pixels)
                                           s : 4,  // spread
                                           c : "#000000", // color
                                           a : 0.4,  // alpha
                                     }
                              },
                              labels  : {
                              font    : "<?php echo $params->get('labelsFont') ?>",
                              color   : "<?php echo $params->get('labelsColor') ?>",
                              textScale : <?php echo $params->get('textScale') ?>, //Labels font size.
                              offset  : <?php echo $params->get('offSet') ?>,  // Number of pixels to push the labels down away from numbers.
                              weight  : "normal"
                         }
});
</script>
            </td>
          </tr>
        </tbody>
      </table>
    <?php echo $params->get('textBelow') ?>
<?php endif ; ?>
</div>