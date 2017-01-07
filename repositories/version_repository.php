<?php
/**
 * Version repository.

 * Copyright (C) 2016 Matthew Vita <matthewvita48@gmail.com>
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-license.php>;.
 *
 * @package OpenEMR
 * @author  Matthew Vita <matthewvita48@gmail.com>
 * @link    http://www.open-emr.org
 */

namespace repositories;

use entities\Version;
use Doctrine\ORM\EntityRepository;

class VersionRepository extends EntityRepository {
    /**
     * Create.
     *
     * @param the new Version entity.
     */
    public function create(Version $version) {
        $this->_em->persist($version);
        $this->_em->flush();
    }

    /**
     * Update.
     *
     * @param the edited Version entity.
     */
    public function update(Version $version, $data) {
        $this->_em->persist($post);
        $this->_em->flush();
    }

    /**
     * Delete.
     *
     * @param the Version entity to be deleted.
     */
    public function delete(Version $version) {
        $this->_em->remove($version);
        $this->_em->flush();
    }
}
