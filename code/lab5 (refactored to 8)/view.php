<?php

class View
{
    public function renderAds(array $ads)
    {
        $template = file_get_contents("template.html");
        $adsTable = "";
        foreach ($ads as $ad) {
            $adsTable .= "<tr>";
            $adsTable .= "<td>" . $ad->getEmail() . "</td>";
            $adsTable .= "<td>" . $ad->getCategory() . "</td>";
            $adsTable .= "<td>" . $ad->getTitle() . "</td>";
            $adsTable .= "<td>" . $ad->getDescription() . "</td>";
            $adsTable .= "</tr>";
        }
        $response = str_replace("table here pls", $adsTable, $template);
        echo $response;
    }

    public function fieldEmpty()
    {
        echo "you bad *bonk*";
    }

    public function error()
    {
        echo "something broke sry(";
    }
}
