 # 🚀 Formulaire d'inscription : notions de sécurité dans le code

<!-- https://undraw.co/illustrations -->
> PHP
```php
<?php if (!empty($error)): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
```