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

/* @package    mod_onlyoffice
 * @copyright  2018 Olumuyiwa Taiwo <muyi.taiwo@logicexpertise.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


define(['jquery'], function($) {
    var displayError = function(error) {
        require(['core/str'], function(str) {
            var errorIsAvailable = str.get_string(error, 'onlyoffice');
            $.when(errorIsAvailable).done(function(localizedStr) {
                $("#onlyoffice-editor").text = localizedStr;
                $("#onlyoffice-editor").text(localizedStr).addClass("error");
            });
        });
    };

    var createFullScreenButtons = function() {
        require(['core/str'], function(str) {
            var enterFullScreenText = str.get_string('editorenterfullscreen', 'onlyoffice');
            var exitFullScreenText = str.get_string('editorexitfullscreen', 'onlyoffice');
            var body = document.getElementsByTagName('body')[0];
            var navButton = $('nav .nav-link.btn')[0];
            var editorContainer = $('.onlyoffice-container')[0];
            var navButtonExpanded;

            $.when(enterFullScreenText).done(function(localized) {
                enterFullScreenText = localized;
                var enterButton = document.createElement('button');
                var enterIcon = document.createElement('i');
                enterIcon.className = 'icon fa fa-expand fa-fw';
                enterButton.appendChild(enterIcon);
                enterButton.className = 'onlyoffice-editor-fs-button';
                enterButton.id = 'onlyoffice-enter-fs-button';
                enterButton.innerHTML += enterFullScreenText;

                enterButton.onclick = function() {
                    body.classList.add('oo-fullscreen');
                    navButtonExpanded = navButton.getAttribute('aria-expanded');
                    if (navButtonExpanded === 'true') {
                        navButton.click();
                    }
                };
                editorContainer.before(enterButton);
            });
            $.when(exitFullScreenText).done(function(localized) {
                exitFullScreenText = localized;
                var exitButton = document.createElement('button');
                var exitIcon = document.createElement('i');
                exitIcon.className = 'icon fa fa-compress fa-fw';
                exitButton.appendChild(exitIcon);
                exitButton.innerHTML += exitFullScreenText;
                exitButton.className = 'onlyoffice-editor-fs-button';
                exitButton.id = 'onlyoffice-exit-fs-button';

                exitButton.onclick = function() {
                    if (navButtonExpanded === 'true' && navButton.getAttribute('aria-expanded') !== 'true') {
                        navButton.click();
                    }
                    body.classList.remove('oo-fullscreen');
                };
                editorContainer.before(exitButton);
            });
        });
    };

    return {
        init: function(courseid, cmid) {
            if (typeof DocsAPI === "undefined") {
                displayError('docserverunreachable');
                return;
            }
            createFullScreenButtons();
            var ajaxUrl = M.cfg.wwwroot + '/mod/onlyoffice/dsconfig.php';
            $.getJSON(ajaxUrl, {
                courseid: courseid,
                cmid: cmid
            }).done(function(config) {
                // eslint-disable-next-line no-undef
                new DocsAPI.DocEditor("onlyoffice-editor", config);
            });
        }
    };
});
