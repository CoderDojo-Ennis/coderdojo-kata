/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
 import { __ } from '@wordpress/i18n';

 /**
  * React hook that is used to mark the block wrapper element.
  * It provides all the necessary props like the class name.
  *
  * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
  */
import { InnerBlocks, BlockControls, useBlockProps, store as blockEditorStore } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
 
 /**
  * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
  * Those files can contain any CSS code that gets applied to the editor.
  *
  * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
  */
 import './editor.scss';
 
 const ALLOWED_BLOCKS = [ 'sushi-cards/hint' ];

 /**
  * The edit function describes the structure of your block in the context of the
  * editor. This represents what the editor will render when the block is used.
  *
  * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
  *
  * @return {WPElement} Element to render.
  */
 export default function Edit( props ) {
  const blockProps = useBlockProps( {
		className: "c-project-panel c-project-panel--hints wp-block",
	} )
  const { clientId, attributes, setAttributes } = props;

  const hintsCount = useSelect( ( select ) => select( blockEditorStore ).getBlocks( clientId ).length, [ clientId ] );
  if (hintsCount != attributes.hintsCount){
    setAttributes({ hintsCount });
  }

    console.log(`Hints Count: ${hintsCount}`);
  console.log(`Hints Count: ${attributes.hintsCount}`);





	 return (
		<>
        <BlockControls>
            
        </BlockControls>
        <div { ...blockProps }>
			<h3 class="c-project-panel__heading js-project-panel__toggle c-project-panel__heading--has-close-icon">I need a hint</h3>
			<div class="c-project-panel__content js-project-panel--swiper-initialised">
				<div class="c-project-panel__swiper c-project-panel__swiper--initialized c-project-panel__swiper--horizontal">
					<div class="c-project-panel__swiper-wrapper-editor">
					<InnerBlocks 
            allowedBlocks={ ALLOWED_BLOCKS } 
            template={[[ 'sushi-cards/hint', { placeholder: 'Start writing or type / to choose a block' } ]]}
          />
					</div>
				</div>
			</div>
		</div>
    </>
		
	 );
 }
