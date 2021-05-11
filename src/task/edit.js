/**
 * External dependencies
 */
 import classnames from 'classnames';
 
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
import { InnerBlocks, BlockControls, useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * Module Constants
 */
const ALLOWED_MEDIA_TYPES = [ 'image', 'video' ];
const INNER_BLOCKS_TEMPLATE = [
	[
		'core/paragraph',
		{
			align: 'center',
			fontSize: 'large',
			placeholder: __( 'Write title…' ),
		},
	],
];

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit() {
	const blockProps = useBlockProps( {
		className: "c-project-task",
	} )
	return (
		<>
        <BlockControls group="block">
            
        </BlockControls>
        <div { ...blockProps } >
			<input class="c-project-task__checkbox" type="checkbox" data-task-index="0" data-on-change-event-listener-added="true"/>
			<div class="c-project-task__body">
				<InnerBlocks template={[
    				[ 'core/paragraph', { placeholder: 'Start writing or type / to choose a block' } ]
				]}/>
			</div>
		</div>
    </>
	);
}
