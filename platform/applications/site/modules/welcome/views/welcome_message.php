<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">

    <div id="body">

        <h1 class="my_section">Application Starter 4 Public Edition by Ivan Tcholakov, 2013</h1>

        <p>
            Project repository: <a href="https://github.com/ivantcholakov/starter-public-edition-4/" target="_blank">https://github.com/ivantcholakov/starter-public-edition-4/</a>
        </p>

        <p>
            Here you can start developing the administration part of your site: <a href="<?php echo base_url('admin'); ?>"><?php echo base_url('admin'); ?></a>
        </p>

        <h2>Self-Diagnostics</h2>

        <p><?php echo $diagnostics; ?></p>

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>