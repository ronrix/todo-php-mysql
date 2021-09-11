
<div class="done">
    <h2>done</h2>
    <?php foreach($done as $d) : ?>
    <div draggable="true" class="drag" id="<?php echo $d['id'].":".$d['isDone'].':'.$d['priority']; ?>">
        <span><?php echo date('D, M-d', strtotime($d['date'])); ?></span>
        <div>
            <p><?php echo $d['todo']; ?></p>
        </div>
        <a href="controller/delete.php?id=<?php echo$d['id']; ?>" class="delete">x</a>
    </div>
    <?php endforeach; ?>
</div>
