/**
 * WordPress dependencies
 */
import '@wordpress/core-data';
import '@wordpress/block-editor';
import { registerBlockType, } from '@wordpress/blocks';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './style.scss';

/**
 * Internal dependencies
 */
import * as code from './code';
import * as hint from './hint';
import * as hints from './hints';
import * as ingredient from './ingredient';
import * as task from './task';

/**
 * Function to register an individual block.
 *
 * @param {Object} block The block to be registered.
 *
 */
 const registerSushiCardBlock = ( block ) => {
	if ( ! block ) {
		return;
	}
	const { settings, name } = block;
	registerBlockType( name, settings );
};

/**
 * Function to get all the core blocks in an array.
 *
 * @example
 * ```js
 * import { __experimentalGetCoreBlocks } from '@wordpress/block-library';
 *
 * const coreBlocks = __experimentalGetCoreBlocks();
 * ```
 */
 const __getSushiCardBlocks = () => [
	code,
	hint,
	hints,
	ingredient,
	task,
];

/**
 * Function to register core blocks provided by the block editor.
 *
 * @param {Array} blocks An optional array of the core blocks being registered.
 *
 * @example
 * ```js
 * import { registerCoreBlocks } from '@wordpress/block-library';
 *
 * registerCoreBlocks();
 * ```
 */
const registerSushiCardBlocks = (
	blocks = __getSushiCardBlocks()
) => {
	blocks.forEach( registerSushiCardBlock );
};

registerSushiCardBlocks();