/**
 * WordPress dependencies
 */
import { __, _x } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import deprecated from './deprecated';
import edit from './edit';
import metadata from './block.json';
import save from './save';

const { name } = metadata;

export { metadata, name };

export const settings = {
	title: _x( 'Task', 'block title' ),
	icon: 'yes-alt',
	description: __( 'Task Block.' ),
	keywords: [
		__( 'container' ),
		__( 'wrapper' ),
		__( 'row' ),
		__( 'section' ),
	],
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
					content: __( 'Set your Task' ),
				},
			},
		],
	},
	edit,
	save,
};

