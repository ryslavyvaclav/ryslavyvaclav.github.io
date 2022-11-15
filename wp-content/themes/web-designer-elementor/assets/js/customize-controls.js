( function( api ) {

	// Extends our custom "web-designer-elementor" section.
	api.sectionConstructor['web-designer-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );