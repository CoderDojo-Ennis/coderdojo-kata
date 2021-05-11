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
 import { InnerBlocks,BlockControls, RichText, useBlockProps } from '@wordpress/block-editor';
 import { Icon } from '@wordpress/components';
 
 
 /**
  * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
  * Those files can contain any CSS code that gets applied to the editor.
  *
  * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
  */
 import './editor.scss';
 
 /**
  * The edit function describes the structure of your block in the context of the
  * editor. This represents what the editor will render when the block is used.
  *
  * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
  *
  * @return {WPElement} Element to render.
  */
 export default function Edit({ attributes, setAttributes, }) {
    const blockProps = useBlockProps( {
		className: "c-project-panel c-project-panel--ingredient wp-block",
	} )
    const { content } = attributes;
	 return (
        <>
        <BlockControls group="block">
            
        </BlockControls>
        <div { ...blockProps }>
            <RichText
                identifier="content"
                value={ content }
				onChange={ ( value ) => setAttributes( { content: value } ) }
                tagName="h3" // The tag here is the element output and editable in the admin
                className="c-project-panel__heading c-project-panel__heading--has-close-icon"
                placeholder={ __( 'Heading...' ) } // Display this text before any content has been added by the user
            />
			<div class="c-project-panel__content">
				<InnerBlocks template={[
    				[ 'core/paragraph', { placeholder: 'Start writing or type / to choose a block' } ]
				]}/>
			</div>
	  	</div>
        </>
	 );
 }