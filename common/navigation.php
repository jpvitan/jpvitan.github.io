<?php
include "utilities/Icon.php";
include "utilities/Navigation.php";

$navigationArray = array(
  new Navigation(Icon::Home(), "Home", "https://jpvitan.com/"),
  new Navigation(Icon::App(), "Apps", "https://jpvitan.com/apps"),
  new Navigation(Icon::Blog(), "Blog", "https://jpvitan.com/blog"),
  new Navigation(Icon::Resume(), "Resume", "https://drive.google.com/file/d/1CSINyY0zE48QMUpAPvxsUSSJfnGJ0Nk9/view?usp=sharing"),
  new Navigation(Icon::Certificate(), "Certificates", "https://drive.google.com/drive/folders/1XhgPGvFUXtb_99ATdpOCHK0p0pUJ3NZz?usp=sharing"),
  new Navigation(Icon::Message(), "Message", "mailto:business@jpvitan.com")
)
?>
<div class="navigation">
  <div class="bar" id="navigation-bar">
    <div class="container-fluid px-3 py-3">
      <div class="row">
        <div class="col-auto my-auto">
          <button class="button-svg btn" id="navigation-menu-button" aria-label="Menu">
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
          <button class="button-svg btn" id="navigation-close-button" aria-label="Close">
            <?php echo Icon::Close(); ?>
          </button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-auto my-auto">
          <div class="control-panel">
            <div class="container-fluid px-0 pt-lg-5 pb-5">
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