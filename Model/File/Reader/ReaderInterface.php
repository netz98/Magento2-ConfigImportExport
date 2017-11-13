<?php
/**
 * Copyright © 2016 Rouven Alexander Rieker
 * See LICENSE.md bundled with this module for license details.
 */
namespace Semaio\ConfigImportExport\Model\File\Reader;

/**
 * Interface ReaderInterface
 *
 * @package Semaio\ConfigImportExport\Model\File\Reader
 */
interface ReaderInterface
{
    /**
     * @param string $fileName
     * @return mixed
     */
    public function parse($fileName);
}
