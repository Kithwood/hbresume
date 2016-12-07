<?php
class ResumeDataContext
{
    const DATACONNECTION='HBRESUME_DATA_CONNECT';
    const DATAUSER='HBRESUME_DATA_USER';
    const DATAPASS='HBRESUME_DATA_PASS';

    const RESUME_ID = 1;
    const RESUME_NAME = 'Name';
    const RESUME_TITLE = 'Title';
    const RESUME_SUMMARY = 'Summary';
    const RESUME_LOCATION = 'Location';
    const RESUME_PHONE = 'Phone';
    const RESUME_EMAIL = 'Email';

    const EMPINFO_TITLE = 'Title';
    const EMPINFO_SUMMARY = 'Summary';
    const EMPINFO_EMPLOYER = 'Employer';
    const EMPINFO_EMPLOYMENTRANGE = 'Range';

    public function getResumeName()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_NAME];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve name: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getTitle()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_TITLE];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve title: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getSummary()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_SUMMARY];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve summary: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getLocation()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_LOCATION];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve location: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getPhone()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_PHONE];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve phone: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getEmail()
    {
        $retStr = '';
        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM resume WHERE Id=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);            
            $resume = $sth->fetch();            
            $retStr = $resume[ResumeDataContext::RESUME_EMAIL];            
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve email: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }

    public function getEmploymentInfo()
    {
        $retStr = array();

        try
        {
            $dbh = new PDO(getenv(ResumeDataContext::DATACONNECTION), getenv(ResumeDataContext::DATAUSER), getenv(ResumeDataContext::DATAPASS));
            $resumeID = ResumeDataContext::RESUME_ID;
            $sql = "SELECT * FROM employmentinfo WHERE ResumeId=?";
            $sth = $dbh->prepare($sql);            
            $sth->execute([ResumeDataContext::RESUME_ID]);     

            while($resume = $sth->fetch())
            {         
                $eiTitle = $resume[ResumeDataContext::EMPINFO_TITLE];
                $eiSummary = $resume[ResumeDataContext::EMPINFO_SUMMARY];
                $eiEmployer = $resume[ResumeDataContext::EMPINFO_EMPLOYER];
                $eiRange = $resume[ResumeDataContext::EMPINFO_EMPLOYMENTRANGE];
                $empInfo = new EmploymentInfo();
                $empInfo->Title = $eiTitle;
                $empInfo->Summary = $eiSummary;
                $empInfo->Employer = $eiEmployer;
                $empInfo->Range = $eiRange;
                
                $retStr[] = $empInfo;
            }                                                
        }
        catch(PDOException $e)
        {
            $err = $e->getMessage();
            echo "Failed to retrieve employment info: $err";
            die();
        }
        $dbh=null;
        $sth=null;

        return $retStr;
    }
} 
?>