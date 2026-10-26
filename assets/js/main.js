// GitHub API integration
(function () {
    var box = document.getElementById('repos');
    if (!box) return;
    var user = box.getAttribute('data-user');

    function esc(s) {
        var d = document.createElement('div');
        d.textContent = s == null ? '' : s;
        return d.innerHTML;
    }

    fetch('https://api.github.com/users/' + encodeURIComponent(user) + '/repos?sort=updated&per_page=6')
        .then(function (res) { return res.json(); })
        .then(function (repos) {
            if (!Array.isArray(repos) || !repos.length) {
                box.innerHTML = '<p>No repositories found.</p>';
                return;
            }
            box.innerHTML = repos.map(function (r) {
                return '<div class="card">' +
                    '<h3>' + esc(r.name) + '</h3>' +
                    '<p>' + esc(r.description || 'No description') + '</p>' +
                    '<small>' + esc(r.language || '') + ' &bull; ★ ' + r.stargazers_count + '</small>' +
                    '<a href="' + esc(r.html_url) + '" target="_blank" rel="noopener">View repo &rarr;</a>' +
                    '</div>';
            }).join('');
        })
        .catch(function () { box.innerHTML = '<p>Could not load repos.</p>'; });
})();

// Contact form -> CodeIgniter controller
(function () {
    var form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var msg = document.getElementById('formMsg');
        msg.textContent = 'Sending...';

        fetch(BASE_URL + 'contact/send', { method: 'POST', body: new FormData(form) })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                msg.textContent = data.message;
                if (data.status) { form.reset(); }
            })
            .catch(function () { msg.textContent = 'Something went wrong.'; });
    });
})();
