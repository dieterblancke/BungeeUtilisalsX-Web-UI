"use strict";
let fetching = false;
let type;

document.addEventListener('DOMContentLoaded', init);

function init() {
    type = document.querySelector('meta[name="page-type"]').getAttribute('content');

    fetchPage(1);
    document.querySelector('.pagination').addEventListener('click', onPageClick);
}

function fetchPage(page) {
    if (fetching || page === findActivePageNumber()) {
        return;
    }
    fetching = true;

    const selector = `#${type}list tbody`;
    fetch(`/api/${type}s/list?page=${page}`)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            fetching = false;
            document.querySelector(selector).innerHTML = '';

            for (let punishment of json.data) {
                const tr = document.createElement('tr');
                const th = document.createElement('th');
                th.setAttribute('scope', 'row');
                th.innerText = punishment.id;

                tr.appendChild(th);

                addTableData(tr, punishment.user, true);
                addTableData(tr, punishment.reason);
                addTableData(tr, punishment.executed_by === 'CONSOLE' ? 'Console' : punishment.executed_by, true);
                addTableData(tr, punishment.date);

                if (type !== 'kick' && type !== 'warn') {
                    addTableData(tr, punishment.status);
                    addTableData(tr, punishment.expires_at);
                }

                document.querySelector(selector).appendChild(tr);
            }

            loadPages(json);
        })
        .catch(function (err) {
            fetching = false;
            console.error(err);
        });
}

function loadPages(json) {
    const pagination = document.querySelector('.pagination');
    pagination.innerHTML = '';

    const curr = json.current_page;
    const last = json.last_page;
    let pageNumbers = [];

    pagination.setAttribute("data-currentpage", curr);

    for (let i = curr - 3; i < curr + 4; i++) {
        pageNumbers.push(i);
    }
    pageNumbers = pageNumbers.filter((val) => val > 0 && val <= last);

    if (curr > 1) {
        pagination.innerHTML += '<li class="page-item"><a class="page-link previous" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>'
    }

    for (let page of pageNumbers) {
        pagination.innerHTML += `<li class="page-item"><a class="page-link${page === curr ? ' active' : ''}" href="#">${page}</a></li>`;
    }

    if (curr < last) {
        pagination.innerHTML += '<li class="page-item"><a class="page-link next" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>'
    }
}

function onPageClick(event) {
    if (event.target.tagName.toLowerCase() !== 'a') {
        return;
    }
    event.preventDefault();

    try {
        let page;

        if (event.target.classList.contains('previous')) {
            page = findActivePageNumber() - 1;
        } else if (event.target.classList.contains('next')) {
            page = findActivePageNumber() + 1;
        } else {
            page = parseInt(event.target.innerText);
        }

        fetchPage(page);
    } catch (e) {
        // do nothing
    }
}

function findActivePageNumber() {
    const pagination = document.querySelector('.pagination');
    let page = pagination.hasAttribute("data-currentpage")
        ? pagination.getAttribute("data-currentpage")
        : 0;

    return parseInt(page);
}

function addTableData(tr, value, withSkull = false) {
    const td = document.createElement('td');

    if (withSkull) {
        const figure = document.createElement('figure');
        const img = document.createElement('img');
        const figcaption = document.createElement('figcaption');
        const span = document.createElement('span');

        img.src = `//cravatar.eu/head/${value}/32`;
        img.alt = `Player Skull of ${value}`;
        img.title = `Player Skull of ${value}`;

        span.classList.add('name');
        span.innerText = value;
        figcaption.appendChild(span);

        figure.appendChild(img);
        figure.appendChild(figcaption);

        td.appendChild(figure);
    } else {
        td.innerText = value;
    }
    tr.appendChild(td);
}
