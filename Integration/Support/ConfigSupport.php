<?php

declare(strict_types=1);

namespace MauticPlugin\LeuchtfeuerCompanySegmentMembersWidgetBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\LeuchtfeuerCompanySegmentMembersWidgetBundle\Integration\LeuchtfeuerCompanySegmentMembersWidgetIntegration;

class ConfigSupport extends LeuchtfeuerCompanySegmentMembersWidgetIntegration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
