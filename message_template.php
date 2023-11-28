<!-- message_template.php -->
<div class="posted-message-container">
    <h3>Posted Message:</h3>
    <p><?= $row['message_content'] ?></p>
    <p>Posted on: <?= $row['timestamp'] ?></p>
    <?php if ($row['photo_path'] !== ''): ?>
        <img src="<?= $row['photo_path'] ?>" alt="Posted Image">
    <?php endif; ?>
</div>
