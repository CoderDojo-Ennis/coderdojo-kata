/**
 * WordPress dependencies
 */
 import { __ } from '@wordpress/i18n';
 import { SelectControl, PanelBody } from '@wordpress/components';
 import { InspectorControls, RichText, useBlockProps } from '@wordpress/block-editor';
 
 export default function CodeEdit( { attributes, setAttributes, onRemove } ) {
   const blockProps = useBlockProps( {
		className: "c-project-panel c-project-panel--code wp-block",
	} )
   return (
    <>
    <InspectorControls>
      <PanelBody title={ __( 'Code block settings' ) }>
        <SelectControl
          label="Language"
          value={ attributes.language }
          options={ [
              { label: 'HTML', value: 'html' },
              { label: 'CSS', value: 'css' },
              { label: 'JavaScript', value: 'javascript' },
              { label: 'Python', value: 'python' },
          ] }
          onChange={ ( language ) => {
            setAttributes( { language } );
          } }
        />
      </PanelBody>
    </InspectorControls>
    <div { ...blockProps }>
			<h3 class="c-project-panel__heading--has-copy-icon">Code Snippet</h3>
			<pre>
       <RichText
         tagName="code"
         value={ attributes.content }
         onChange={ ( content ) => setAttributes( { content } ) }
         onRemove={ onRemove }
         placeholder={ __( 'Write code…' ) }
         aria-label={ __( 'Code' ) }
         preserveWhiteSpace
         __unstablePastePlainText
       />
     </pre>
		</div>
    
  </>
   );
 }