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
 import { InnerBlocks, store as blockEditorStore, useBlockProps } from '@wordpress/block-editor';
 import { useSelect, select } from '@wordpress/data';



/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save(props) {
	const { attributes } = props;

	let dots = [] 
	dots.push(<span key="1" class="c-project-panel__swiper-bullet c-project-panel__swiper-bullet--active" tabindex="0" role="button" aria-label="Go to slide 1"></span>)

	for (let i = 2; i <= attributes.hintsCount; i++) {
		let label = `Go to slide ${i}`;
		dots.push(<span key={i}class="c-project-panel__swiper-bullet" tabindex="0" role="button" aria-label={label}></span>)
	}
	return (
		<div class="c-project-panel c-project-panel--hints">
			<h3 class="c-project-panel__heading js-project-panel__toggle">I need a hint</h3>
			<div class="c-project-panel__content js-project-panel--swiper-initialised u-hidden">
    			<div class="c-project-panel__swiper c-project-panel__swiper--initialized c-project-panel__swiper--horizontal">
					<div class="c-project-panel__swiper-wrapper">
					  	<InnerBlocks.Content />
      				</div>
					<div class="c-project-panel__swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
						{ dots}
					</div>
					<div class="c-project-panel__swiper-button c-project-panel__swiper-button--next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
					<div class="c-project-panel__swiper-button c-project-panel__swiper-button--prev c-project-panel__swiper-button--disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
				</div>
  			</div>
		</div>
	);
}
