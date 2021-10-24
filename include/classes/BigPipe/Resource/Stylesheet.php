<?php
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
# Resource representation [stylesheet]       [Thomas Lange <code@nerdmind.de>] #
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
#                                                                              #
# [More information coming soon]                                               #
#                                                                              #
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
namespace BigPipe\Resource;

class Stylesheet extends \BigPipe\Resource {

	#===============================================================================
	# Build resource
	#===============================================================================
	public function __construct(string $customID, string $resourceURL) {
		parent::__construct($customID, parent::TYPE_STYLESHEET, $resourceURL);
	}

	#===============================================================================
	# Render resource HTML
	#===============================================================================
	public function renderHTML(): string {
		return sprintf('<link data-id="%s" href="%s" rel="stylesheet" />', $this->getID(), $this->getURL());
	}
}
