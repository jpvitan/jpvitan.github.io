<?php
require_once "utilities/Icon.php";
?>
<footer class="text-center py-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto my-auto">
                <a href="https://github.com/jpvitan">
                    <div class="icon-container">
                        <?php echo Icon::Git(); ?>
                    </div>
                </a>
            </div>
            <div class="col-auto my-auto">
                <a href="https://twitter.com/jpvitan_dev">
                    <div class="icon-container">
                        <?php echo Icon::Twitter(); ?>
                    </div>
                </a>
            </div>
            <div class="col-auto my-auto">
                <a href="https://www.youtube.com/@jpvitan">
                    <div class="icon-container">
                        <?php echo Icon::YouTube(); ?>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-auto my-auto">
                <p>Developed and Designed by Justine Paul Vitan.</p>
                <p>Copyright © 2023 Justine Paul Vitan. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>