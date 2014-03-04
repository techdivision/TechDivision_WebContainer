<?php
/**
 * TechDivision\WebContainer\Deployment
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Appserver
 * @package   TechDivision_WebContainer
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */

namespace TechDivision\WebContainer;

use TechDivision\ApplicationServer\AbstractDeployment;

/**
 * Class Deployment
 *
 * @category  Appserver
 * @package   TechDivision_WebContainer
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */
class Deployment extends AbstractDeployment
{

    /**
     * Returns an array with available applications.
     *
     * @return \TechDivision\ApplicationServer\Interfaces\DeploymentInterface The deployment instance
     */
    public function deploy()
    {
        return $this;
    }
}
