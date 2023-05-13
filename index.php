<?php
include './inc/env.php';
$query="SELECT * FROM data";
$response=mysqli_query($conn,$query);
$results=mysqli_fetch_all($response,1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 shadow rounded py-3">
                    <h2 class="text-center">Todo Lists</h2>

                    <!-- * FORM STARTS HERE -->
                    <form action="./controller/todo.php" mathod="GET">
                        <input type="text" placeholder="Add Todo" name="todo" class="form-control">
                        <button class="my-2 btn-sm float-end btn btn-success">Add Todo</button>
                        <br><br>
                        <hr>
                    </form>
                    <!-- *FORM ENDS HERE -->


                    <!-- *ALL TODO LISTS -->

                    <div class="tableWrapper">
                        <table class="table table-responsive">
                            <tr>
                                <th>#</th>
                                <th>Todos</th>
                                <th>Actions</th>
                            </tr>
                            <!-- * FETCH ALL LISTS FROM DATABASE HERE -->
                            
                            <?php
                                foreach($results as $index=> $result){
                                    ?>

                                <tr class="<?=$result['status']==1 ? 'strick' : ''?>">
                                <th><?=++$index?></th>
                                <td><?=$result['input']?></td>
                                
                                <td>
                                    <a href="./controller/delete.php?id=<?=$result['id'] ?>" class="btn btn-sm btn-danger" >Delete</a>
                                    <a href="./controller/finished.php?id=<?=$result['id'] ?>" class="btn btn-sm btn-<?= $result['status'] == 1 ? 'success' : 'danger' ?>"><?= $result['status']==1 ? 'finished' : 'to_do'?><a>
                                </td>
                             
                                
                                
                                
                            </tr>
                                    <?php
                                }
                                ?>
                                
                            <!-- * FETCH ALL LISTS FROM DATABASE HERE -->
                        </table>
                    </div>


                    <!-- *ALL TODO LISTS ENDS -->





                </div>
            </div>
        </div>
    </section>
 

</body>


</html>
