"use strict";

document.addEventListener('DOMContentLoaded', init);

function init() {
    fetchRecentPunishments('#recentbans', '/api/bans/recent');
    fetchRecentPunishments('#recentmutes', '/api/mutes/recent');
    fetchRecentPunishments('#recentkicksandwarns', '/api/kickwarns/recent');
}


function fetchRecentPunishments(selector, route) {
    fetch(route)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            for (let punishment of json) {
                let username = punishment.user;
                let date = punishment.date;

                let li = document.createElement('li');
                let a = document.querySelector("#recentbans li a").cloneNode(true);

                a.setAttribute('href', '/users/' + username);
                a.querySelector('img').setAttribute('src', '//cravatar.eu/head/' + username + '/32');
                a.querySelector('img').setAttribute('alt', 'Player skull of ' + username);
                a.querySelector('img').setAttribute('title', 'Player skull of ' + username);

                a.querySelector('.name').innerText = username;
                a.querySelector('.date').innerText = date;

                li.appendChild(a);
                document.querySelector(selector).appendChild(li);
            }
        });
}
