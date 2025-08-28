<?php
function plugin_version_londoncards() {
  return [
    "name"           => "LondonCards",
    "version" => "0.0.1",
    "author" => "Vinicius iezak",
    "license"        => "GPLv2+",
    "minGlpiVersion" => "10.0.0"
  ];
}

function plugin_init_londoncards() {
  global $PLUGIN_HOOKS;
  // compat CSRF (requerido)
  $PLUGIN_HOOKS["csrf_compliant"]["londoncards"] = true;

  // autoload do plugin
  if (file_exists(__DIR__."/vendor/autoload.php")) {
    require_once __DIR__."/vendor/autoload.php";
  }
}

function plugin_londoncards_check_prerequisites() { return true; }
function plugin_londoncards_check_config($verbose = false) { return true; }
