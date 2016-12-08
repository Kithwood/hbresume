<?php
class EmploymentInfo
{
    public $Title = "";
    public $Summary = "";
    public $Employer = "";
    public $Range = "";    
    public $Accomplishments = null;
    public $Id = -1;

    public function getTitle()
    {
        return $this->Title;
    }

    public function getSummary()
    {
        return $this->Summary;
    }

    public function getEmployer()
    {
        return $this->Employer;
    }

    public function getEmploymentRange()
    {
        return $this->Range;
    }

    public function getAccomplishments()
    {
        $context = new ResumeDataContext();
        $this->Accomplishments = $context->getAccomplishments($this->Id);

        //$accomplishments = array("I did this one thing", "I did this other thing", "I accomplished tremendous things.  Just tremendous.");

        return $this->Accomplishments;
    }
}
?>
