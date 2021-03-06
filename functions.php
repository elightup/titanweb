<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'titanweb', get_stylesheet_uri() );
} );
add_action( 'wp_footer', 'titanweb_cta' );

function titanweb_cta() {
	?>
	<div class="cta">
		<a class="cta__block" href="tel:0372228558">
			<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M18.994 6.39a10.33 10.33 0 00-2.31-3.477c-1-1-2.166-1.762-3.475-2.31a11.771 11.771 0 00-1.977-.595.455.455 0 00-.523.357.455.455 0 00.357.524c.619.12 1.238.286 1.81.524a9.148 9.148 0 013.166 2.119 9.863 9.863 0 012.119 3.167c.238.595.428 1.19.524 1.81a.433.433 0 00.428.356h.072a.455.455 0 00.357-.524 8.567 8.567 0 00-.548-1.952zM10.304 3.77c.5.071 1 .214 1.452.405a6.524 6.524 0 012.19 1.452 6.641 6.641 0 011.858 3.643.436.436 0 00.429.38h.071c.238-.047.405-.261.357-.5a8.233 8.233 0 00-.452-1.666 7.603 7.603 0 00-1.643-2.5c-.714-.714-1.548-1.285-2.5-1.643a6.745 6.745 0 00-1.643-.452.42.42 0 00-.5.357.493.493 0 00.381.524zM9.566 6.65c.88.072 1.69.453 2.31 1.072.618.62 1 1.429 1.07 2.31a.443.443 0 00.453.405h.048a.448.448 0 00.405-.477c-.096-1.071-.548-2.095-1.334-2.857A4.646 4.646 0 009.661 5.77a.448.448 0 00-.476.405.43.43 0 00.38.476z"/><path d="M4.852 14.746a20.199 20.199 0 004.857 3.548c1.69.88 3.19 1.333 4.571 1.333.31 0 .62-.024.905-.071.69-.096 1.357-.334 2-.667a6.225 6.225 0 001.643-1.31c.595-.666.833-1.357.714-2-.095-.452-.357-.857-.762-1.19-.333-.262-.738-.452-1.095-.595-1.167-.476-2.357-.786-3.381-1.024-.357-.071-.857-.214-1.357-.024-.381.143-.62.429-.833.69-.072.096-.167.191-.239.286-.19.19-.714.096-1.357-.261-.738-.381-1.619-1.072-2.452-1.905-.81-.81-1.524-1.715-1.905-2.453-.357-.642-.452-1.166-.262-1.357.072-.071.167-.143.286-.238.262-.214.548-.452.69-.833.19-.5.072-1.024-.023-1.357-.239-1.024-.548-2.215-1.024-3.381A4.09 4.09 0 005.232.84C4.9.437 4.495.151 4.043.08c-.619-.12-1.31.119-2 .714-.524.452-.976 1-1.31 1.643-.333.643-.57 1.285-.666 2-.238 1.619.167 3.404 1.262 5.476a20.629 20.629 0 003.524 4.833zM.923 4.532a5.083 5.083 0 011.69-3.095c.334-.286.81-.596 1.262-.5.238.047.477.214.667.452.19.238.31.524.452.881.429 1.12.739 2.286.977 3.262.071.333.142.619.047.857-.047.167-.238.286-.428.452a4.14 4.14 0 00-.357.31c-.191.19-.405.548-.334 1.143.048.357.19.786.453 1.262.428.81 1.166 1.762 2.071 2.643.905.88 1.833 1.619 2.643 2.071.476.238.88.405 1.262.452.071 0 .143.024.214.024.452 0 .762-.19.929-.357a4.14 4.14 0 00.31-.357c.166-.19.285-.357.451-.429.215-.095.524-.023.858.048.976.238 2.143.524 3.262.976.357.143.642.286.88.453.239.19.405.428.453.666.095.453-.238.929-.5 1.262a5.083 5.083 0 01-3.095 1.69c-1.429.215-3.048-.166-4.953-1.166a19.672 19.672 0 01-4.643-3.381 19.675 19.675 0 01-3.38-4.643C1.09 7.58.708 5.961.922 4.532z"/></svg>
			<span class="cta__text">Hotline<span class="cta__hide"> 037.222.8558</span></span>
		</a>
		<a class="cta__block" href="<?= wp_is_mobile() ? 'https://m.facebook.com/messages/compose?ids=titanwebvn' : 'https://www.messenger.com/t/titanwebvn' ?>" rel="nofollow" target="_blank">
			<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.86 0C4.435 0 0 4.114 0 9.216c0 2.79 1.343 5.267 3.43 6.953V20l.629-.335 3.094-1.607a10.42 10.42 0 002.706.375c5.424 0 9.86-4.114 9.86-9.217C19.719 4.114 15.283 0 9.859 0zm0 .857c4.991 0 9.001 3.755 9.001 8.36 0 4.604-4.01 8.358-9.002 8.358a9.674 9.674 0 01-2.665-.375l-.161-.04-.148.08-2.598 1.353V15.78l-.161-.12c-2-1.54-3.269-3.855-3.269-6.444C.857 4.612 4.867.857 9.86.857zM8.88 6.738l-5.157 5.466 4.635-2.6 2.478 2.653 5.09-5.519-4.514 2.532-2.532-2.532z"/></svg>
			<span class="cta__text"><span class="cta__hide">Chat </span>Facebook</span>
		</a>
		<a class="cta__block" href="https://zalo.me/0372228558" rel="nofollow" target="_blank">
			<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.381 0A2.388 2.388 0 000 2.381v15.238A2.388 2.388 0 002.381 20h15.238A2.388 2.388 0 0020 17.619V2.381A2.388 2.388 0 0017.619 0H2.381zm0 .952h3.131C3.866 2.666 2.857 4.916 2.857 7.381c0 2.553 1.08 4.88 2.833 6.614-.064-.061.019.045.027.231.009.193-.02.458-.099.72-.156.525-.482 1.008-1.007 1.183a.476.476 0 00.058.919c1.314.263 2.244-.133 2.929-.447.685-.315 1.055-.526 1.747-.247l.006.002c1.296.507 2.723.787 4.22.787 2 0 3.872-.5 5.477-1.37v1.846c0 .795-.634 1.429-1.429 1.429H2.381a1.422 1.422 0 01-1.429-1.429V2.381c0-.795.634-1.429 1.429-1.429zm4.522 0h10.716c.795 0 1.429.634 1.429 1.429v12.288a10.455 10.455 0 01-5.477 1.521c-1.376 0-2.684-.257-3.869-.72-1.006-.406-1.825-.046-2.501.265a4.83 4.83 0 01-1.136.385c.202-.288.375-.596.466-.902.108-.363.151-.717.138-1.034-.014-.315-.042-.604-.308-.865l-.001-.002c-1.59-1.572-2.55-3.65-2.55-5.936 0-2.535 1.183-4.815 3.093-6.429zm6.9 4.28a.476.476 0 00-.47.482V10a.477.477 0 10.953 0V5.714a.476.476 0 00-.484-.482zm-7.136.482a.476.476 0 100 .953h1.522l-1.926 3.08a.476.476 0 00.404.73h2.38a.477.477 0 100-.953H7.526l1.926-3.081a.476.476 0 00-.403-.729H6.667zm5.707 1.422a.476.476 0 00-.392.218 1.639 1.639 0 00-.791-.211c-.915 0-1.667.752-1.667 1.667 0 .914.752 1.666 1.667 1.666.286 0 .553-.081.79-.21a.476.476 0 00.876-.266V7.619a.476.476 0 00-.483-.483zm4.055.007c-.915 0-1.667.752-1.667 1.667 0 .914.752 1.666 1.667 1.666.914 0 1.666-.752 1.666-1.666 0-.915-.752-1.667-1.666-1.667zm-5.238.952c.4 0 .714.314.714.715 0 .4-.314.714-.714.714a.707.707 0 01-.715-.714c0-.4.314-.715.714-.715zm5.238 0c.4 0 .714.314.714.715 0 .4-.314.714-.714.714a.707.707 0 01-.715-.714c0-.4.314-.715.715-.715z"/></svg>
			<span class="cta__text"><span class="cta__hide">Chat </span>Zalo</span>
		</a>
		<a class="cta__block" href="mailto:sales@titanweb.vn">
			<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19.638 7.876L17.333 5.97V1a1 1 0 00-1-1H3.667a1 1 0 00-1 1v4.97L.362 7.877a.997.997 0 00-.362.77v10.02A1.333 1.333 0 001.333 20h17.334A1.334 1.334 0 0020 18.667V8.647a.998.998 0 00-.362-.77zm-.425.514a.332.332 0 01.12.257v1.15l-2 1.034V6.835l1.88 1.555zM3.667.667h12.666a.333.333 0 01.334.333v10.176l-4.322 2.236-1.729-1.353a.997.997 0 00-1.233 0l-1.728 1.353-4.322-2.236V1a.333.333 0 01.334-.333zM.787 8.39l1.88-1.555v3.997l-2-1.034V8.647a.333.333 0 01.12-.257zm17.88 10.943H1.333a.667.667 0 01-.666-.666v-8.12l6.411 3.317-4.95 3.873a.334.334 0 00.41.526l7.257-5.679a.334.334 0 01.41 0l7.256 5.679a.333.333 0 00.411-.526l-4.95-3.873 6.411-3.316v8.119a.667.667 0 01-.666.666z"/><path d="M5.667 9.667h8.666a.333.333 0 100-.667H5.667a.333.333 0 000 .667zM5.667 7h8.666a.333.333 0 100-.667H5.667a.333.333 0 000 .667zM5.667 4.333H11a.333.333 0 100-.666H5.667a.333.333 0 100 .666z"/></svg>
			<span class="cta__text">Email</span>
		</a>
	</div>
	<?php
}

add_action( 'after_setup_theme', 'titanweb_setup' );

function titanweb_setup() {
	set_post_thumbnail_size( 364, 220, true );
	add_theme_support( 'editor-gradient-presets', [
		[
			'name'     => 'To right',
			'gradient' => 'linear-gradient(to right, #00a99d 0%, #262261 100%)',
			'slug'     => 'right',
		],
		[
			'name'     => 'To top',
			'gradient' => 'linear-gradient(to top, #00a99d 0%, #262261 100%)',
			'slug'     => 'top',
		]
	] );
}

add_action( 'wp_head', 'titanweb_default_og_image' );

function titanweb_default_og_image() {
	if ( is_singular() ) {
		$data = get_post_meta( get_queried_object_id(), 'slim_seo', true );
		if ( has_post_thumbnail() || ! empty( $data['facebook_image'] ) ) {
			return;
		}
	}
	if ( is_tax() || is_category() || is_tag() ) {
		$data = get_term_meta( get_queried_object_id(), 'slim_seo', true );
		if ( ! empty( $data['facebook_image'] ) ) {
			return;
		}
	}
	$image_id = 153;
	$image = wp_get_attachment_image_src( $image_id );
	$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

	echo "<meta property='og:image' content='{$image[0]}'>\n";
	echo "<meta property='og:image:width' content='{$image[1]}'>\n";
	echo "<meta property='og:image:height' content='{$image[2]}'>\n";
	echo "<meta property='og:image:alt' content='{$alt}'>\n";
}