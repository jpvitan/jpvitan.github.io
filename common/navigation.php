<?php
include "utilities/Icon.php";
include "utilities/Navigation.php";

$navigationArray = array(
  new Navigation(Icon::Home(), "Home", "/"),
  new Navigation(Icon::App(), "Apps", "/"),
  new Navigation(Icon::Blog(), "Blog", "/"),
  new Navigation(Icon::Resume(), "Resume", "/"),
  new Navigation(Icon::Certificate(), "Certificates", "/"),
  new Navigation(Icon::Message(), "Message", "/")
)
?>
<div class="navigation">
  <div class="bar" id="navigation-bar">
    <div class="container-fluid px-3 py-3">
      <div class="row">
        <div class="col-auto my-auto">
          <button class="button-svg btn" id="navigation-menu-button">
            <?php echo Icon::Menu(); ?>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="menu" id="navigation-menu">
    <div class="container-fluid px-3 py-3">
      <div class="row">
        <div class="col-auto my-auto">
          <button class="button-svg btn" id="navigation-close-button">
            <?php echo Icon::Close(); ?>
          </button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-auto my-auto">
          <div class="control-panel">
            <div class="container-fluid px-0 pt-md-5 pb-5">
              <div class="row justify-content-center">
                <?php
                foreach ($navigationArray as $navigation) {
                  echo $navigation->generate();
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>