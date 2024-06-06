<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Advertisement.php';

class AdvertisementService {
    private $db;

    public function __construct() {
        $this->db = getDBConnection();
    }

    public function getAllAdvertisements() {
        $sql = "SELECT advertisements.id, advertisements.title, users.name as username
                FROM advertisements
                JOIN users ON advertisements.userid = users.id";
        $result = $this->db->query($sql);
        $ads = [];
        while ($row = $result->fetch_assoc()) {
            $ad = new Advertisement();
            $ad->id = $row['id'];
            $ad->title = $row['title'];
            $ad->username = $row['username'];
            $ads[] = $ad;
        }
        return $ads;
    }
}
?>

