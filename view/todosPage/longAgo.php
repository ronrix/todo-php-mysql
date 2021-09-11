
<div class="longAgo">
    <h2>long ago</h2>

    <?php foreach($previous as $longAgo) : ?>
    <div draggable="true" class="drag" id="<?php echo $longAgo['id'].":".$d['isDone'].':'.$d['priority']; ?>">
        <span><?php echo date('D, M-d', strtotime($longAgo['date'])); ?></span>
        <div>
            <p><?php echo $longAgo['todo']; ?></p>
        </div>
        <a href="controller/delete.php?id=<?php echo$longAgo['id']; ?>" class="delete">x</a>
    </div>
    <?php endforeach; ?>
</div>
