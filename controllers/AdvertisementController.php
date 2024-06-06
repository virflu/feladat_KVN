<?php
require_once __DIR__ . '/../services/AdvertisementService.php';

class AdvertisementController {
    private $adService;

    public function __construct() {
        $this->adService = new AdvertisementService();
    }

    public function listAdvertisements() {
        $ads = $this->adService->getAllAdvertisements();
        include 'views/advertisement_list.php';
    }
}
?>

