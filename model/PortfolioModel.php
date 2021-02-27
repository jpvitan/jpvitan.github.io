<?php
class PortfolioModel{
    
    private $id; 
    private $image_banner;
    private $title;
    private $description;
    private $technologies_used;
    private $platform;
    private $link;
    
    function __construct($id, $image_banner, $title, $description, $technologies_used, $platform, $link){
        $this->id = $id;
        $this->image_banner = $image_banner;
        $this->title = $title;
        $this->description = $description;
        $this->technologies_used = $technologies_used;
        $this->platform = $platform;
        $this->link = $link;
    }
    
    public function getCard(){
        $card = "
        <div class='row justify-content-center mt-4'>
            <div class='col-xl-6 col-xxl-4'>
                <a href='". $this->link ."' style='text-decoration: none; color: black;'>
                    <div class='card border-0 shadow' style='border-radius: 10px;' data-aos='zoom-in'>
                        <img class='card-img-top img-fluid' style='border-radius: 10px 10px 0px 0px;' alt='Banner' src='" . $this->image_banner . "' width='1024' height='500'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size: 1.25rem; font-weight: 500;'>". $this->title ."</div>
                            <p class='card-text' style='color: #747d8c;'>". $this->description ."</p>
                            <div style='color: #0fbcf9; font-weight: 500;'>Technologies Used</div>
                            <div style='color: #747d8c;'>". $this->technologies_used ."</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        ";
        return $card;
    }
    
}
?>