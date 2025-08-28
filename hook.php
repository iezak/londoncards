<?php
/**
 * Hooks mínimos pro plugin "londoncards"
 * Baseado na wiki "How to hook" do example, mas em versão reduzida para ativar sem erros.
 */

use GlpiPlugin\Londoncards\Londoncards;
use Dropdown as GlpiDropdown;

/** Instalação (CLI chama esta função) */
function plugin_londoncards_install() {
    return true;
}

/** Desinstalação (CLI chama esta função) */
function plugin_londoncards_uninstall() {
    return true;
}

/** (Opcional) Relações de BD do plugin — deixar vazio por enquanto */
function plugin_londoncards_getDatabaseRelations() {
    return [];
}

/** (Opcional) Dropdowns do plugin — vazio por enquanto */
function plugin_londoncards_getDropdown() {
    return [];
}

/** (Opcional) Search options adicionados — vazio por enquanto */
function plugin_londoncards_getAddSearchOptions($itemtype) {
    return [];
}

/** (Opcional) Search options (novo formato) — vazio por enquanto */
function plugin_londoncards_getAddSearchOptionsNew($itemtype) {
    return [];
}

/** (Opcional) Massive actions — vazio por enquanto */
function plugin_londoncards_MassiveActions($type) {
    return [];
}

/** (Opcional) Massive actions fields display — retorna false por padrão */
function plugin_londoncards_MassiveActionsFieldsDisplay($options = []) {
    return false;
}

/** (Opcional) Valores de busca customizados — retorna false por padrão */
function plugin_londoncards_searchOptionsValues($options = []) {
    return false;
}

/** (Opcional) Pós-init — nada por enquanto */
function plugin_londoncards_postinit() {}

/** (Opcional) Status — nada por enquanto */
function plugin_londoncards_Status($param) {
    return $param;
}

/** (Opcional) Ícone de impacto — nada por enquanto */
function plugin_londoncards_set_impact_icon(array $params) {
    return null;
}
