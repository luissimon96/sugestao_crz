<?php
// Entry point of the PHP application

// Autoload dependencies
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/dictionary.php';

// Determine the language (default to Portuguese BR)
$lang = $_GET['lang'] ?? 'pt_BR';

// Main application logic
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar uma Sugestão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav>
            <form method="get" action="">
                <label for="lang"><?php echo htmlspecialchars(translate('select_language', $lang)); ?></label>
                <select name="lang" id="lang">
                    <option value="pt_BR" <?php echo $lang == 'pt_BR' ? 'selected' : ''; ?>>Português</option>
                    <option value="en_US" <?php echo $lang == 'en_US' ? 'selected' : ''; ?>>English</option>
                    <option value="es_ES" <?php echo $lang == 'es_ES' ? 'selected' : ''; ?>>Español</option>
                    <option value="fr_FR" <?php echo $lang == 'fr_FR' ? 'selected' : ''; ?>>Français</option>
                    <option value="de_DE" <?php echo $lang == 'de_DE' ? 'selected' : ''; ?>>Deutsch</option>
                </select>
            </form>
        </nav>
        <h1><?php echo htmlspecialchars(translate('submit_suggestion', $lang)); ?></h1>
        <form action="submit_suggestion.php" method="post">
            <label for="full_name"><?php echo htmlspecialchars(translate('full_name', $lang)); ?></label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="email"><?php echo htmlspecialchars(translate('email', $lang)); ?></label>
            <input type="email" id="email" name="email" required>

            <label for="neighborhood"><?php echo htmlspecialchars(translate('neighborhood', $lang)); ?></label>
            <input type="text" id="neighborhood" name="neighborhood" required>

            <label for="phone"><?php echo htmlspecialchars(translate('phone', $lang)); ?></label>
            <input type="tel" id="phone" name="phone" placeholder="+1 (555) 555-5555" pattern="\+\d{1,3} \(\d{1,3}\) \d{3}-\d{4}">

            <label for="address"><?php echo htmlspecialchars(translate('address', $lang)); ?></label>
            <input type="text" id="address" name="address">

            <label for="birthdate"><?php echo htmlspecialchars(translate('birthdate', $lang)); ?></label>
            <input type="date" id="birthdate" name="birthdate">

            <label for="description"><?php echo htmlspecialchars(translate('description', $lang)); ?></label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <input type="submit" value="<?php echo htmlspecialchars(translate('submit', $lang)); ?>">
        </form>
    </div>
    <script>
        document.getElementById('lang').addEventListener('change', function () {
            var selectedLang = this.value;
            var currentLang = '<?php echo $lang; ?>';
            if (selectedLang !== currentLang) {
                this.form.submit();
            }
        });

        document.getElementById('phone').addEventListener('input', function (e) {
            var lang = document.getElementById('lang').value;
            var x = e.target.value.replace(/\D/g, '');
            var formatted;
            if (lang === 'pt_BR') {
                formatted = x.replace(/^(\d{2})(\d{1})(\d{4})(\d{4})$/, '+55 ($1) 9.$2$3-$4');
            } else if (lang === 'en_US') {
                formatted = x.replace(/^(\d{1,3})(\d{1,3})(\d{3})(\d{4})$/, '+$1 ($2) $3-$4');
            } else if (lang === 'es_ES') {
                formatted = x.replace(/^(\d{2})(\d{3})(\d{3})$/, '+34 ($1) $2-$3');
            } else if (lang === 'fr_FR') {
                formatted = x.replace(/^(\d{2})(\d{3})(\d{3})(\d{3})$/, '+33 ($1) $2-$3-$4');
            } else if (lang === 'de_DE') {
                formatted = x.replace(/^(\d{2})(\d{3})(\d{4})$/, '+49 ($1) $2-$3');
            }
            e.target.value = formatted;
        });

        // Trigger the change event to apply the correct placeholder on page load
        document.getElementById('lang').dispatchEvent(new Event('change'));
    </script>
</body>
</html>
<?php
// Handle incoming requests and route them accordingly
// Additional routing and logic can be implemented here
?>