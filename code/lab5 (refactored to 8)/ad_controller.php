<?php
require_once "ads_repository.php";
require_once "ad.php";
require_once "view.php";

class AdController
{
    private ads_repository $ads_repository;
    private View $View;
    private bool $error = false;

    public function __construct()
    {
        $this->View = new View();
        try {
            $this->ads_repository = new ads_repository();
        } catch (mysqli_sql_exception $e) {
            $this->error = true;
        }
    }

    public function isError(): bool
    {
        return $this->error;
    }

    public function close()
    {
        $this->ads_repository->close();
    }

    public function post()
    {
        if (
            empty($_POST["email"]) or
            empty($_POST["category"]) or
            empty($_POST["title"]) or
            empty($_POST["description"])
        ) {
            $this->View->fieldEmpty();
            return;
        }
        $ad = new Ad($_POST["email"], $_POST["category"], $_POST["title"], $_POST["description"]);
        $this->ads_repository->createAd($ad);
        $this->View->renderAds($this->ads_repository->getAds());
    }

    public function get()
    {
        $this->View->renderAds($this->ads_repository->getAds());
    }

    public function error()
    {
        $this->View->error();
    }
}
