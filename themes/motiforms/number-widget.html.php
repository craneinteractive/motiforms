<?php
/**
 * File provided for rendering text type input elemenet for number type field
 *
 * @link       http://motivast.com
 * @since      1.0.0
 *
 * @package    Motiforms
 * @subpackage Motiforms/theme/motiform
 * @author     Motivast <support@motivast.com>
 */

?>
<?php echo $view['form']->block( $form, 'form_widget_simple', array( // @codingStandardsIgnoreLine We will escape when we will display form
	'type' => isset( $type ) ? $type : 'text'
) );
