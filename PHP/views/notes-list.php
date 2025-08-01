<h1>All Notes</h1>

<?php if (empty($notes)): ?>
    <p>No notes yet.</p>
<?php else: ?>
    <ul>
        <?php foreach ($notes as $index => $note): ?>
            <li>
                <a href="?page=note&id=<?= $index ?>">
                    <?= htmlspecialchars($note['title']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
