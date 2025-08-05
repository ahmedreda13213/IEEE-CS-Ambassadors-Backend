
    <h1>All Notes</h1>
    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <strong><?= htmlspecialchars($note['title']) ?>:</strong>
                <?= nl2br(htmlspecialchars($note['content'])) ?>
            </li>
        <?php endforeach; ?>
    </ul>

