<?php
require_once "utilities/Data.php";
require_once "utilities/Icon.php";
?>
<div class="navigation">
  <div class="bar d-none animation-fade" id="navigation-bar">
    <div class="container-fluid px-3 py-3">
      <div class="row">
        <div class="col-auto my-auto">
          <button class="button-icon button-icon-black btn" id="navigation-menu-button" aria-label="Menu">
            <?php echo Icon::Menu(); ?>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="menu d-none" id="navigation-menu">
    <div class="container-fluid px-3 py-3">
      <div class="row">
        <div class="col-auto my-auto">
          <button class="button-icon button-icon-black btn" id="navigation-close-button" aria-label="Close">
            <?php echo Icon::Close(); ?>
          </button>
        </div>
      </div>
      <div class="control-panel row justify-content-center pt-lg-5 pb-5">
        <?php
        foreach ($NAVIGATION as $navigation) {
          echo $navigation->generate();
        }
        ?>
      </div>
    </div>
  </div>
</div>