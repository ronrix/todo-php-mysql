<aside class="side_wrapper">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form">
        <input type="text" name="todo" class="input" placeholder="set your todo" />
        <div class="errorEl"></div>
        <div>
            <label for="high">high priority</label>
            <input type="radio" name="priority" value="high priority" id="high" />
        </div>
        <div>
            <label for="high">low priority</label>
            <input type="radio" name="priority" value="less priority" id="low" />
        </div>

        <button type="submit" class="submitBtn">save</button>
    </form>
</aside>
