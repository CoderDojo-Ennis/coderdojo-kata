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
	title: _x( 'Ingredient', 'block title' ),
	icon: 'info',
	description: __( 'Ingerdient Block.' ),
	keywords: [
		__( 'container' ),
		__( 'wrapper' ),
		__( 'row' ),
		__( 'section' ),
	],
	attributes: {
	"content": {
		"type": "string",
		"source": "html",
		"selector": "h1,h2,h3,h4,h5,h6",
		"default": ""
	}
},
	example: {
		attributes: {
			style: {
				color: {
					text: '#000000',
					background: '#ffffff',
				},
			},
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
