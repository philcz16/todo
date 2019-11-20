<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
                color:#000;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <form action="/create/todo" method="POST">
                    <?php echo e(csrf_field()); ?>

               <input type="text" name="todo" placeholder="Enter your todo to save" style="width:40%"> 
            </form>
                <div class="title m-b-md">
                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <ul>
                    <li><?php echo e($todo->todo); ?><span><button style="color:#fff; background: red"><a href="<?php echo e(route('todo.delete',['id'=>$todo->id])); ?>" style="color:#fff;"> x </a></button><button style="color:#fff; background: blue"><a href="<?php echo e(route('todo.update',['id'=>$todo->id])); ?>" style="color:#fff;"> Edit </a></button></span></li>
                    <hr>
                </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </body>
</html>
