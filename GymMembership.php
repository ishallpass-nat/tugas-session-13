<?php
 
class GymMembership{
    private $memberName;
    private $membershipType;
    private $Duration;

   public function __construct($memberName, $membershipType, $Duration){

        if($name == null || $name == ""){
    echo "member name cannot be empty";
        return ;
    } else {
        $this -> memberName = $memberName;
    }

        if($type =="basic" || $type == "premium" || $type == "VIP"){
        $this -> membershipType = $membershipType;
    } else {
        echo "Invalid membership type pls choose basic or vip";
        return ;
    }

        if ($Duration >= 30){
        $this->Duration = $Duration;
    } else {
        echo "Durasi tidak valid";
    }
    }
    public function getMemberName(){
    return $this->memberName;
    }
    public function getMembershipType(){
    return $this->MembershipType;
    }   
    public function getDuration(){
    return $this->Duration;
    }
}


?>