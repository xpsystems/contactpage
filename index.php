<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_config['site_title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($site_config['site_description']) ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'components/navbar.php'; ?>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1 class="hero-title reveal">Get in Touch</h1>
            <p class="hero-description reveal" style="--delay: 100ms">
                We'd love to hear from you. Reach out through any of the channels below.
            </p>
        </div>
    </header>

    <!-- Divider: Hero -> Content -->
    <div class="section-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" class="divider-fill-alt"></path>
        </svg>
    </div>

    <!-- Main Content -->
    <main class="services-section">
        <div class="container">
            <!-- Email Section -->
            <div class="contact-section reveal">
                <h2 class="section-title">Email</h2>
                <div class="contact-grid">
                    <?php foreach ($contact_emails as $contact): ?>
                    <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="contact-card">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <span class="contact-label"><?= htmlspecialchars($contact['label']) ?></span>
                            <span class="contact-value"><?= htmlspecialchars($contact['email']) ?></span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Founder Section -->
            <div class="contact-section reveal" style="--delay: 100ms">
                <h2 class="section-title">Direct Contact</h2>
                <a href="mailto:<?= htmlspecialchars($contact_person['email']) ?>" class="contact-card contact-card--highlight">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="contact-content">
                        <span class="contact-name"><?= htmlspecialchars($contact_person['name']) ?></span>
                        <span class="contact-role"><?= htmlspecialchars($contact_person['role']) ?></span>
                        <span class="contact-value"><?= htmlspecialchars($contact_person['email']) ?></span>
                    </div>
                </a>
            </div>

            <!-- Social Section -->
            <div class="contact-section reveal" style="--delay: 200ms">
                <h2 class="section-title">Social Media</h2>
                <div class="contact-grid">
                    <?php foreach ($social_links as $social): ?>
                    <a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener noreferrer" class="contact-card<?= isset($social['personal']) ? ' contact-card--personal' : '' ?>">
                        <div class="contact-icon contact-icon--instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <span class="contact-label"><?= htmlspecialchars($social['handle']) ?></span>
                            <?php if (isset($social['personal'])): ?>
                            <span class="contact-tag">Personal</span>
                            <?php endif; ?>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Divider: Content -> Footer -->
    <div class="section-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 L1200,80 L1200,120 L0,120 Z" class="divider-fill-footer"></path>
        </svg>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>