<?php
 require_once "GymMember.php";

$member = new member("budi", "Basic", 30);
echo "<h2> status Membership</h2>";
echo "nama: ". $memberName->getMemberName() . "<br>";
echo "Membership type". $membershipType->getMembershipType(). "<br>" ;
echo "Duration". $Duration->getDuration(). "<br>" ;
echo "<hr>";

$member2 = new member("Ashley", "Premium", 60);
echo "<h2> status Membership</h2>";
echo "nama: ". $member->getMemberName() . "<br>";
echo "Membership type". $membership->getMembershipType(). "<br>" ;
echo "Duration". $duration->getDuration(). "<br>" ;
echo "<hr>";

$member3 = new member("Henry", "VIP", 90);
echo "<h2> status Membership</h2>";
echo "nama: ". $member->getMemberName() . "<br>";
echo "Membership type". $membership->getMembershipType(). "<br>" ;
echo "Duration". $duration->getDuration(). "<br>" ;
echo "<hr>";

$member4 = new member("Antony", "premium", 0);
echo "<h2> status Membership</h2>";
echo "nama: ". $member->getMemberName() . "<br>";
echo "Membership type". $membership->getMembershipType(). "<br>" ;
echo "Duration". $duration->getDuration(). "<br>" ;
echo "<hr>";

$member5 = new member("Tony", "basic", 15);
echo "<h2> status Membership</h2>";
echo "nama: ". $member->getMemberName() . "<br>";
echo "Membership type". $membership->getMembershipType(). "<br>" ;
echo "Duration". $duration->getDuration(). "<br>" ;
echo "<hr>";
?>