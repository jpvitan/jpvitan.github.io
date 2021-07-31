<?php
class ResumeModel
{

    private $id;
    private $image_banner;
    private $title;
    private $description;
    private $file_type;
    private $file_size;
    private $link;

    function __construct($id, $image_banner, $title, $description, $file_type, $file_size, $link)
    {
        $this->id = $id;
        $this->image_banner = $image_banner;
        $this->title = htmlspecialchars($title);
        $this->description = htmlspecialchars($description);
        $this->file_type = htmlspecialchars($file_type);
        $this->file_size = htmlspecialchars($file_size);
        $this->link = $link;
    }

    public function generateInformationContent($file_size)
    {
        $text = '<h6>File Size:</h6>' . $file_size . ' KB';
        return "'" . $text . "'";
    }

    public function getColorFromFileType($file_type)
    {
        if ($file_type == "PDF") {
            return "#e74c3c";
        } else if ($file_type == "DOCX") {
            return "#3498db";
        } else {
            return "#ffa502";
        }
    }

    public function getCard()
    {
        $card = "
        <li class='list-group-item border-0 mt-4 mt-sm-5'>
            <div class='row'>
                <div class='col-sm-auto my-auto'>
                    <a href='" . $this->link . "' style='text-decoration: none;' target='_blank'>
                        <img class='mb-3 mb-sm-0' style='width: 80px; height: 80px;' alt='Icon' src='" . $this->image_banner . "' width='80' height='80'/>                    
                    </a>
                </div>
                <div class='col my-auto'>
                    <h1 class='mb-1' style='font-size: 1.25rem; font-weight: 600;'>" . $this->title . "</h1>
                    <p class='mb-1' style='color: #747d8c;'>" . $this->description . "</p>
                    <span class='badge me-2' style='background-color: " . $this->getColorFromFileType($this->file_type) . ";'>" . $this->file_type . "</span>
                    <button class='me-2' style='border: 0; padding: 0; outline: 0; background: transparent;' type='button' data-bs-container='body' data-bs-toggle='popover' data-bs-placement='bottom' data-bs-html='true' data-bs-content=" . $this->generateInformationContent($this->file_size) . ">
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#747d8c' class='bi bi-info-circle' viewBox='0 0 16 16' aria-label='Technologies Used'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                        </svg>
                    </button>
                    <a href='" . $this->link . "' style='text-decoration: none; color: #747d8c;' target='_blank'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16'>
                            <path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/>
                            <path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/>
                        </svg>
                    </a>
                </div>
            </div>
        </li>
        ";
        return $card;
    }
}
