<?php
class ResumeCV
{
    protected $employmentInfos = null;    

    function __construct()
    {        
    }

    public function getFullName()
    {
        $context = new ResumeDataContext();
        return $context->getResumeName();        
    }
    
    public function getTitle()
    {
        $context = new ResumeDataContext();
        return $context->getTitle();
    }

    public function getSummary()
    {        
        $context = new ResumeDataContext();
        return $context->getSummary();
    }

    public function getLocation()
    {
        $context = new ResumeDataContext();
        return $context->getLocation();
    }

    public function getEmail()
    {
        $context = new ResumeDataContext();
        return $context->getEmail();
    }

    public function getPhone()
    {
        $context = new ResumeDataContext();
        return $context->getPhone();
    }

    public function getEmployment()
    {    
        if($this->employmentInfos == null)
        {
            $context = new ResumeDataContext();
            $this->employmentInfos = $context->getEmploymentInfo();
        }
        return $this->employmentInfos;
    }
}
?>