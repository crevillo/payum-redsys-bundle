<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 31/10/14
 * Time: 15:53
 */

namespace Crevillo\Bundle\PayumRedsysBundle;

use Crevillo\Payum\Redsys\Bridge\Symfony\RedsysPaymentFactory;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CrevilloPayumRedsysBundle extends Bundle
{
    protected $name = 'PayumRedsysBundle';

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        /** @var $extension \Payum\Bundle\PayumBundle\DependencyInjection\PayumExtension */
        $extension = $container->getExtension('payum');

        $extension->addPaymentFactory(new RedsysPaymentFactory);
    }
}
