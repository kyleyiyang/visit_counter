Add a site visitor counter to bottom of page, starting at 91,910:


In plugin editor, advanced-page-visit-counter/public/class-advanced-page-visit-counter-public.php -> add two if blocks:
if ($existingAllCounts<=91910) {
			$existingAllCounts = 91910;
		}
In the “advanced-page-visit-counter” plugin, generate the shortcode: and “HIDE” widget styling.
[apvc_embed type="global" border_size="2" border_radius="5" background_color="" font_size="14" font_style="" font_color="" counter_label="Visits:" border_color="" border_style="solid" padding="15" width="200" global="true" today="false"]

In theme editor: LS Theme: Theme Footer (footer.php)
<?php echo do_shortcode('[apvc_embed type="global" border_size="2" border_radius="5" background_color="" font_size="14" font_style="" font_color="" counter_label="Visits:" border_color="" border_style="solid" padding="15" width="200" global="true" today="false"]'); ?>

.avc_visit_counter_front {margin: auto auto 1rem;}
