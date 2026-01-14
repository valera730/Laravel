<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
</head>
<body>
<h1>Rock Paper Scissors</h1>

<?php if(isset($result)): ?>
    <p>You played <?php echo e($player_choice); ?></p>
    <p>Computer played <?php echo e($computer_choice); ?></p>
    <p>You <?php echo e($result); ?>!</p>
<?php endif; ?>

<ul>
    <?php $__currentLoopData = $last_games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last_game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <p>You <?php echo e($last_game->result); ?></p>
            <p>You played <?php echo e($last_game->player_choice); ?></p>
            <p>Computer played <?php echo e($last_game->computer_choice); ?></p>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<form method="POST" action="<?php echo e(route('game.play')); ?>">
    <?php echo csrf_field(); ?>
    <label for="rock">Rock</label>
    <input type="radio" name="choice" id="rock" value="rock">
    <label for="paper">Paper</label>
    <input type="radio" name="choice" id="paper" value="paper">
    <label for="scissors">Scissors</label>
    <input type="radio" name="choice" id="scissors" value="scissors">
    <button type="submit">Play</button>
</form>
</body>
</html>
<?php /**PATH C:\Valera\laravel\tailwind\rock-paper-scissors\resources\views/game.blade.php ENDPATH**/ ?>