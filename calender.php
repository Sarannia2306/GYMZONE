<?php
// calendar.php

$daysToShow = ['Monday', 'Wednesday', 'Friday']; // Days to show for Hardcore class

?>

<div class="calendar">
    <?php foreach ($daysToShow as $day): ?>
        <div class="day">
            <h3><?= $day ?></h3>
            <?php foreach ($sessionTypes as $sessionType): ?>
                <h4><?= ucfirst($sessionType) ?></h4>
                <?php for ($i = 1; $i <= $availability[$className][$sessionType]; $i++): ?>
                    <?php
                    $slotKey = "$className-$sessionType-$i";
                    $isBooked = isset($_POST[$slotKey]);
                    ?>
                    <div class="slot <?= $isBooked ? 'booked' : '' ?>" onclick="bookSlot('<?= $slotKey ?>')">
                        <?= $isBooked ? 'Booked' : 'Slot ' . $i ?>
                    </div>
                <?php endfor; ?>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function bookSlot(slot) {
        document.getElementById('slotInput').value = slot;
        document.getElementById('bookingForm').submit();
    }
</script>
<form id="bookingForm" method="post" style="display: none;">
    <input type="hidden" id="slotInput" name="slot" value="">
</form>
