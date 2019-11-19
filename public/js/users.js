"use strict";

document.addEventListener('DOMContentLoaded', init);

function init() {
    fetchRecentUsers('#recentusers', '/api/users/recent');
}

function fetchRecentUsers(selector, route) {
    fetch(route)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            for (let user of json) {
                let username = user.username;
                let date = user.firstlogin;

                let li = document.createElement('li');
                let a = document.querySelector("#recentusers li a").cloneNode(true);

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
