/**
 * WordPress dependencies
 */
 import { RichText, useBlockProps } from '@wordpress/block-editor';

 /**
  * Internal dependencies
  */
 import { escape } from './utils';
 
 export default function save( { attributes } ) {
	 return (
		<div class="c-project-panel c-project-panel--code">
			<h3 class="c-project-panel__heading--has-copy-icon">Code Snippet</h3>
			<pre class={attributes.content}>
				<RichText.Content
					tagName="code"
					value={ escape( attributes.content ) }
				/>
			</pre>
		</div>
	 );
 }