<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $name ?> | <?= $title ?></title>
    <meta name="description" content="Portfolio of <?= $name ?>, PHP developer specializing in CodeIgniter and Laravel.">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="nav">
    <div class="logo"><?= $name ?></div>
    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#github">GitHub</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <h1>Hi, I'm <span><?= $name ?></span></h1>
    <p><?= $title ?> building web apps with CodeIgniter &amp; Laravel</p>
    <a href="#projects" class="btn">View Work</a>
    <a href="#contact" class="btn btn-outline">Contact</a>
</section>

<section id="about">
    <h2>About</h2>
    <p>I'm a PHP developer who builds and maintains client platforms like MLM systems, trading and affiliate websites, commission-based systems, subscription management, and admin panels. I work mainly with CodeIgniter and also build with Laravel, plus JavaScript for dynamic UIs and API integrations.</p>
</section>

<section id="skills">
    <h2>Skills</h2>
    <div class="chips">
        <?php foreach ($skills as $s): ?>
            <span><?= $s ?></span>
        <?php endforeach; ?>
    </div>
</section>

<section id="projects">
    <h2>Projects</h2>
    <div class="grid">
        <?php foreach ($projects as $p): ?>
            <div class="card">
                <?php if (!empty($p['image'])): ?>
                    <img src="<?= base_url('assets/' . $p['image']) ?>" alt="<?= $p['name'] ?>" class="thumb" onerror="this.style.display='none'">
                <?php endif; ?>
                <h3><?= $p['name'] ?></h3>
                <p><?= $p['desc'] ?></p>
                <small><?= $p['tech'] ?></small>
                <?php if (!empty($p['link'])): ?>
                    <a href="<?= $p['link'] ?>" target="_blank" rel="noopener">Live &rarr;</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="github">
    <h2>Latest on GitHub</h2>
    <div class="grid" id="repos" data-user="<?= $github ?>">
        <p>Loading...</p>
    </div>
</section>

<section id="contact">
    <h2>Contact</h2>
    <form id="contactForm">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <textarea name="message" rows="5" placeholder="Message" required></textarea>
        <button type="submit" class="btn">Send</button>
        <p id="formMsg"></p>
    </form>
</section>

<footer>&copy; <?= date('Y') ?> <?= $name ?></footer>

<script>var BASE_URL = '<?= base_url() ?>';</script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
