
<html>
<head>

</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <td>Task</td>
        <td>Deadline</td>
        <td>Modify</td>
        <td>Delete</td>
    </tr>
    </thead>
    <?
    $i = 0;


    foreach ($model as $task) {

        $idDb = $model[$i]->id;
        $i++;
    $customThemeR = '';
    if ($task->deadline <= 24)
        $customThemeR = 'table-danger';

    //    $expireTime = [];
    //$expireTime[$idDb] = time() + $task->deadline * 60 * 60;
    // if ($expireTime[$idDb] > time()) {
    //                    echo '<pre>';
    //                    print_r( /*date('Y.m.j H:i:s',*/
    //                        $expireTime);
    //                    echo '</pre>';

    ?>

    <tbody>
    <tr>
        <td class="<?= $customThemeR ?>"><?= $task->task ?></td>
        <td class="<?= $customThemeR ?>"><?= $task->deadline . ' hours' ?></td>
        <td class="<?= $customThemeR ?>"><a class="btn btn-primary" href="modify?id=<?= $idDb ?>">Modify</a>
        </td>
        <td class="<?= $customThemeR ?>"><a class="btn btn-danger"
                                            href="delete?numberOfRecord=<?= $idDb ?>">Delete</a>
        </td>
        <!--                    <td><a class="btn btn-danger" href="#" id="delBtn" >X</a></td>-->
    </tr>
    </tbody>
    <?}?>
</table>




</body>
</html>