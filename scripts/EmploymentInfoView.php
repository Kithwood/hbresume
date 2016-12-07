<?php
class EmploymentInfoView
{
    public $employmentInfo = null;

    // public function __constructor()
    // {
    //     echo 'empty constructor';
    // }

    public function __constructor($empInfo)
    {
        echo 'in constructor';
        var_dump($empInfo);
        $this->employmentInfo = $empInfo;
    }

    public function getHTML()
    {        
        // spit out the html representation of the passed-in EmploymentInfo object;
        $info = $this->employmentInfo;
        $emp = $info->getEmployer();
        $empDates = $info->getEmploymentRange();
        $htmlView = "<div class='EmpHeader'><h4>$emp $empDates</h4>";
        $title = $info->getTitle();
        $htmlView .= "<strong>$title</strong>​</div><br/>";
        $description = $info->getSummary();							
        $htmlView .= "<p>$description<br/>";
        $accomp = $info->getAccomplishments();
        foreach($accomp as $acc)
        {
            $htmlView .= "&nbsp;&nbsp;&nbsp;● $acc";
            $htmlView .= "<br/>";
        }
        $htmlView .= "</p>";

        return $htmlView;
    }
}
?>