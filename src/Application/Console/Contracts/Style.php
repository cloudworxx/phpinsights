<?php
/**
 * Created by PhpStorm.
 * User: nunomaduro
 * Date: 24/03/2019
 * Time: 19:50
 */

namespace NunoMaduro\PhpInsights\Application\Console\Contracts;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * @internal
 */
interface Style
{
    /**
     * Adds the style to the given input.
     *
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     *
     * @return void
     */
    public function addTo(OutputInterface $output): void;
}
