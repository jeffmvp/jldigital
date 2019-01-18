<?php

namespace Roots\Sage\Installer\Presets;

class Bulma extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bulma'] = '^0.5.0';
        return $packages;
    }
}
