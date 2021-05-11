/**
 * WordPress dependencies
 */
import { __, _x } from '@wordpress/i18n';
 
/**
 * Internal dependencies
 */
import edit from './edit';
import metadata from './block.json';
import save from './save';

const { name } = metadata;

export { metadata, name };

export const settings = {
	title: _x( 'Hints', 'block title' ),
	icon: 'editor-help',
	description: __( 'Hints Block.' ),
	keywords: [
		__( 'container' ),
		__( 'wrapper' ),
		__( 'row' ),
		__( 'section' ),
	],
	attributes: {
		hintsCount: {
			type: 'number',
			default: 2
		}
	},
	example: {
		attributes: {
			hintsCount: {
				type: 'number',
				default: 2
			}
		},
		innerBlocks: [
			{
				name: 'core/paragraph',
				attributes: {
					customTextColor: '#cf2e2e',
					fontSize: 'large',
					content: __( 'One.' ),
				},
			},
		],
	},
	edit,
	save,
};
