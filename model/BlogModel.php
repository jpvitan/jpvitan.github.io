<?php
class BlogModel{
 
    private $id;
    private $image_banner;
    private $title;
    private $description;
    private $author;
    private $date;
    private $category;
    private $link;
    private $sub_category;
    
    function __construct($id, $image_banner, $title, $description, $author, $date, $category, $link, $sub_category){
        $this->id = $id;
        $this->image_banner = $image_banner;
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
        $this->link = $link;
        $this->sub_category = $sub_category;
    }
    
    function getId(){
        return $this->id;
    }
    
    function getImageBanner(){
        return $this->image_banner;
    }
    
    function getTitle(){
        return $this->title;
    }
    
    function getDescription(){
        return $this->description;
    }
    
    function getAuthor(){
        return $this->author;
    }
    
    function getDate(){
        return date_format(date_create($this->date), "F d, Y");
    }
    
    function getCategory(){
        return $this->category;
    }
    
    function getLink(){
        return $this->link;
    }

    function getSubCategory(){
        return $this->sub_category;
    }
    
    function getColor(){
        $category = $this->getCategory();
        $color = "#0fbcf9";

        if($category === "SoftwareDevelopment"){
            $color = "#2ecc71";
        }else if($category === "Mathematics"){
            $color = "#ff6b81";
        }
        
        return $color;
    }

    function getCard(){
        $card = "
        <div class='row justify-content-center mt-4'>
            <div class='col-xl-4'>
                <a href='blog-read.php?id=". $this->id ."' style='text-decoration: none; color: black;'>
                    <div class='card shadow border-0'>
                        <img class='card-img-top img-fluid' alt='Banner' src='" . $this->image_banner . "' width='1366' height='768'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size: 1.25rem; font-weight: 500; margin-bottom: 0px;'>". $this->title ."</div>
                            <div style='color: ". $this->getColor() ."; font-weight: 500;'>" . $this->sub_category . "</div>
                            <div style='color: #747d8c; font-size: 0.9rem;'>" . $this->author . " | " . $this->getDate() ."</div>
                            <div style='color: #636e72; margin-top: 1rem;'>". $this->description ."</div>
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