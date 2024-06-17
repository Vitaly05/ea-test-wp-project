/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'
import horizontalScroll from '../../../../resources/js/modules/horizontal-scroll'

const init = function() {
	const $section = $( this )


  horizontalScroll($('#trainings-section__offers')) 
}


initScript( '.trainings-section', 'trainings', init )
