<div class="today">
    <h2>today</h2>
    <div class="high">
        <div class="priority_title">high priority</div>
        <?php foreach($todayH as $high) : ?>
        <div draggable="true" class="drag" id="<?php echo $high['id'].':'.$high['isDone'].':'.$high['priority']; ?>">
            <span><?php echo date('D, M-d', strtotime($high['date'])); ?></span>
            <div>
                <p><?php echo $high['todo']; ?></p>
            </div>
            <a href="controller/delete.php?id=<?php echo$high['id']; ?>" class="delete">x</a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="low">
        <div class="priority_title">less priority</div>
        <?php foreach($todayL as $low) : ?>
        <div draggable="true" class="drag" id="<?php echo $low['id'].':'.$low['isDone'].":".$low['priority']; ?>">
            <span><?php echo date('D, M-d', strtotime($low['date'])); ?></span>
            <div draggable>
                <p><?php echo $low['todo']; ?></p>
            </div>
            <a href="controller/delete.php?id=<?php echo$low['id']; ?>" class="delete">x</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
