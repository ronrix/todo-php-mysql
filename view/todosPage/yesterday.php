<div class="yesterday">
    <h2>yesterday</h2>
    <?php foreach($yesterday as $y) : ?>
    <div draggable="true" class="drag" id="<?php echo $y['id'].":".$d['isDone'].':'.$d['priority']; ?>">
        <span><?php echo date('D, M-d', strtotime($y['date'])); ?></span>
        <div>
            <p><?php echo $y['todo']; ?></p>
        </div>
        <a href="controller/delete.php?id=<?php echo$y['id']; ?>" class="delete">x</a>
    </div>
    <?php endforeach; ?>
</div>
