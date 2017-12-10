<?php

class Service {
  public $name;
  public $description;
  public $image;
  public $url;
}

$nextcloud = new Service();
$nextcloud->name = "Nextcloud";
$nextcloud->description = "Access all of your personal files on our hosted file storage platform.";
$nextcloud->image = "nextcloud.png";
$nextcloud->url = "https://drive.intelligencenotfound.com";

$openproject = new Service();
$openproject->name = "OpenProject";
$nextcloud->description = "Manage INF Projects.";
$nextcloud->image = "openproject.png";
$nextcloud->url = "https://team.intelligencenotfound.com";

$services = array($nextcloud, $openproject);

?>
