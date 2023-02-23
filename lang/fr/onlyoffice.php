<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package     mod_onlyoffice
 * @subpackage
 * @copyright   2018 Olumuyiwa Taiwo <muyi.taiwo@logicexpertise.com>
 * @author      Olumuyiwa Taiwo {@link https://moodle.org/user/view.php?id=416594}
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['editorenterfullscreen'] = 'Ouvrir en mode plein écran';
$string['editorexitfullscreen'] = 'Quitter le mode plein écran';
$string['modulename'] = 'ONLYOFFICE document';
$string['modulenameplural'] = 'ONLYOFFICE documents';
$string['modulename_help'] = 'Le module ONLYOFFICE permet aux utilisateurs de créer et de modifier des documents bureautiques stockés localement dans Moodle à l\'aide de ONLYOFFICE Document Server. Il permet à plusieurs utilisateurs de collaborer en temps réel et d\'enregistrer ces modifications dans Moodle';
$string['pluginname'] = 'ONLYOFFICE document';
$string['pluginadministration'] = 'Administration de l\'activité documentaire ONLYOFFICE';
$string['onlyofficename'] = 'Nom de l\'activité';

$string['onlyofficeactivityicon'] = 'Ouvrir dans ONLYOFFICE';
$string['onlyoffice:addinstance'] = 'Ajouter une nouvelle activité documentaire ONLYOFFICE';
$string['onlyoffice:view'] = 'Afficher l\'activité du document ONLYOFFICE';

$string['documentserverurl'] = 'Adresse du service d\'édition de documents';
$string['documentserverurl_desc'] = 'L\'adresse du service d\'édition de documents spécifie l\'adresse du serveur sur lequel sont installés les services de documents. Veuillez remplacer \'https://documentserver.url\' ci-dessus par l\'adresse correcte du serveur.';
$string['documentserversecret'] = 'Secret de Document Server';
$string['documentserversecret_desc'] = 'Le secret est utilisé pour générer le jeton (une signature cryptée) dans le navigateur pour l\'ouverture de l\'éditeur de documents et l\'appel des méthodes et des demandes au service de commande de documents et au service de conversion de documents. Le jeton empêche la substitution de paramètres importants dans les requêtes du Document Server de ONLYOFFICE.';
$string['allowedformats'] = 'Allowed formats';
$string['allowedformats_desc'] = '';

$string['selectfile'] = 'Sélectionnez un fichier';
$string['printintro'] = 'Print intro text';
$string['printintroexplain'] = '';
$string['documentpermissions'] = 'Autorisations du document';
$string['download'] = 'Document peut être téléchargé';
$string['download_help'] = 'Si cette option est désactivée, les documents ne seront pas téléchargeables dans l\'application de l\'éditeur ONLYOFFICE. Veuillez noter que les utilisateurs ayant la capacité <strong>course:manageactivities</strong> sont toujours en mesure de télécharger des documents via l\'application.';
$string['download_desc'] = 'Permet le téléchargement des documents via l\'app ONLYOFFICE editor';
$string['print'] = 'Document peut être imprimé';
$string['print_help'] = 'Si cette option est désactivée, les documents ne seront pas imprimables via l\'application de l\'éditeur ONLYOFFICE. Veuillez noter que les utilisateurs ayant la capacité <strong>course:manageactivities</strong> sont toujours en mesure d\'imprimer des documents via l\'application.';
$string['print_desc'] = 'Permet l\'impression des documents via l\'app ONLYOFFICE editor';

$string['returntodocument'] = 'Retour à la page de cours';
$string['docserverunreachable'] = 'Document Server de ONLYOFFICE n\'est pas accessible. Veuillez contacter l\'administrateur';
$string['privacy:metadata'] = 'Aucune information sur les données personnelles des utilisateurs n\'est stockée.';
$string['privacy:metadata:core_files'] = 'L\'activité documentaire ONLYOFFICE stocke les documents qui ont été édités.';
$string['privacy:metadata:onlyoffice'] = 'Information sur les documents édités avec ONLYOFFICE.';
$string['privacy:metadata:onlyoffice:course'] = 'Cours auquel appartient l\'activité ONLYOFFICE.';
$string['privacy:metadata:onlyoffice:name'] = 'Nom de l\'activité ONLYOFFICE.';
$string['privacy:metadata:onlyoffice:intro'] = 'Introduction générale de l\'activité ONLYOFFICE';
$string['privacy:metadata:onlyoffice:introformat'] = 'Format du champs d\'introduction (MOODLE, HTML, MARKDOWN...).';
$string['privacy:metadata:onlyoffice'] = 'Un hash est utilisé pour communiquer avec le service d\édition ONLYOFFICE document.';
$string['privacy:metadata:onlyoffice:userid'] = 'Le userid est l\'une des valeurs utilisées lors du calcul du hachage utilisé pour communiquer avec le service d\'édition de documents ONLYOFFICE. Le userid réel n\'est pas envoyé au service d\'édition de documents.';
