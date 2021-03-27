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
        $badge = '<h6>Technologies Used</h6>';

        for($i=0; $i<count($arr); $i++){       
            $badge .= '<span class="badge me-2 mt-2 style-badge">'. htmlspecialchars($arr[$i]) . '</span>'; 
        }

        return "'". $badge ."'";
    }

    public function getCard(){
        $card = "
        <li class='list-group-item border-0 mt-4 mt-sm-5'>
            <div class='row'>
                <div class='col-sm-auto my-auto'>
                    <img class='mb-3 mb-sm-0' style='width: 80px; height: 80px;' alt='Icon' src='". $this->image_banner ."' width='80' height='80'/>
                </div>
                <div class='col my-auto'>
                    <h1 class='mb-1' style='font-size: 1.25rem; font-weight: 600;'>". $this->title ."</h1>
                    <p class='mb-1' style='color: #747d8c;'>". $this->description ."</p>
                    <span class='badge me-2' style='background-color: #34ace0;'>". $this->platform . "</span>
                    <button class='me-2' style='border: 0; padding: 0; outline: 0; background: transparent;' type='button' data-bs-container='body' data-bs-toggle='popover' data-bs-placement='bottom' data-bs-html='true' data-bs-content=". $this->generateBadge($this->technologies_used) .">
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#747d8c' class='bi bi-info-circle' viewBox='0 0 16 16' aria-label='Technologies Used'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                        </svg>
                    </button>
                    <a href='". $this->link ."' style='text-decoration: none; color: #747d8c;'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box-arrow-in-up-right' viewBox='0 0 16 16' aria-label='Link'>
                            <path fill-rule='evenodd' d='M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z'/>
                            <path fill-rule='evenodd' d='M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z'/>
                        </svg>
                    </a>
                </div>
            </div>
        </li>
        ";
        return $card;
    }
    
}
?>