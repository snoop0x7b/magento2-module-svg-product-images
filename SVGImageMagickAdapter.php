<?php

namespace IMI\SVGProductImages;

use Magento\Framework\Image\Adapter\ImageMagick;

class SVGImageMagickAdapter extends ImageMagick
{
	/**
	 * Add basic SVG validation
	 *
	 * @param string $filePath
	 *
	 * @return bool
	 */
	public function validateUploadFile( $filePath ) {
        $type = mime_content_type($filePath);
        if ($type === 'image/svg+xml' || $type === 'image/svg') {
			return true;
		}
		return parent::validateUploadFile( $filePath );
	}

}