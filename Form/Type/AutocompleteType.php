<?php
/**
 * This file is part of the Networking package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Networking\InitCmsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class AutocompleteType
 * @package Networking\InitCmsBundle\Form\Type
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
class AutocompleteType extends AbstractType
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'networking_type_autocomplete';
    }
}