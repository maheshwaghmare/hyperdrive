<?php
/**
 * Bootstrapper.
 *
 * @package     Hyperdrive
 * @author      Josh Habdas
 * @since       1.0.0
 * @license     AGPL-3.0 or any later version
 *
 * Plugin Name:     Hyperdrive
 * Plugin URI:      https://github.com/comfusion/hyperdrive
 * Description:     The fastest way to load pages in WordPress.
 * Version:         1.0.0-beta.4
 * Author:          Josh Habdas
 * Author URI:      https://habd.as
 * Text Domain:     hyperdrive
 * License:         AGPL-3.0 or any later version
 * License URI:     https://github.com/comfusion/hyperdrive/blob/master/COPYING
 *
 * Hyperdrive - The fastest way to load pages in WordPress.
 * Copyright (C) 2017  Josh Habdas
 *
 * Hyperdrive is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Hyperdrive is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Hyperdrive.  If not, see
 * https://github.com/comfusion/hyperdrive/blob/master/COPYING.
 */

namespace hyperdrive\bootstrap;

defined( 'ABSPATH' ) || die( 'Now you are going to die! BAM!' );

$hyperdrive = __DIR__ . '/src/hyperdrive.php';

file_exists($hyperdrive) && require_once $hyperdrive;
