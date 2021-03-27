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
        $this->title = htmlspecialchars($title);
        $this->description = htmlspecialchars($description);
        $this->technologies_used = $technologies_used;
        $this->platform = htmlspecialchars($platform);
        $this->link = $link;
    }
    
    public function generateBadge($technologies_used){
        $arr = explode(",", $technologies_used);
        $badge = "";

        $color_arr = array("#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#f1c40f", "#e67e22", "#e74c3c");
        $color_counter = 0;

        for($i=0; $i<count($arr); $i++){       
            $badge .= "<span class='badge me-2 mt-2' style='background-color: ". $color_arr[$color_counter] .";'>". htmlspecialchars($arr[$i]) . "</span>"; 
            
            $color_counter++;
            if($color_counter >= count($color_arr)){
                $color_counter = 0;
            }
        }

        return $badge;
    }

    public function getCard(){
        $card = "
        <div class='row justify-content-center mt-4'>
            <div class='col-xl-6 col-xxl-4'>
                <a href='". $this->link ."' style='text-decoration: none; color: black;'>
                    <div class='card border-0 shadow' data-aos='zoom-in'>
                        <img class='card-img-top img-fluid' alt='Banner' src='" . $this->image_banner . "' width='1024' height='500'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size: 1.25rem; font-weight: 500;'>". $this->title ."</div>
                            <p style='color: #747d8c;'>". $this->description ."</p>
                            ". $this->generateBadge($this->technologies_used) ."
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