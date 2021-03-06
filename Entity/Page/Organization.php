<?php
namespace SavoirFaireLinux\BusinessDirectoryBundle\Entity\Page;

use Doctrine\ORM\Mapping as ORM;

use SavoirFaireLinux\BusinessDirectoryBundle\Entity\Page;

/**
 * SFL/BusinessDirectory - Symfony3 business directory
 *
 *  Copyright 2017 by Savoir-faire Linux
 *
 * This file is part of SFL/BusinessDirectory application.
 * 
 * SFL/BusinessDirectory application is free software: you can redistribute 
 * it and/or modify it under the terms of the GNU General Public 
 * License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 * 
 * SFL/BusinessDirectory application is distributed in the hope that it will 
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty 
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with SFL/BusinessDirectory.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
* @ORM\Entity(repositoryClass="SavoirFaireLinux\BusinessDirectoryBundle\Repository\Page\OrganizationRepository")
*/
class Organization extends Page {

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $emailAddress;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $websiteAddress;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $officeAddress;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phoneNumber;


    public function getEmailAddress() {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getWebsiteAddress() {
        return $this->websiteAddress;
    }

    public function setWebsiteAddress($websiteAddress) {
        $this->websiteAddress = $websiteAddress;
        return $this;
    }

    public function getOfficeAddress() {
        return $this->officeAddress;
    }

    public function setOfficeAddress($officeAddress) {
        $this->officeAddress = $officeAddress;
        return $this;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

}
