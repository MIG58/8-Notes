<?php
require('Task.php');
$ob = new Task();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href='Icons/icon2.png' type="image/png">
    <title>8 Notes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="Icons/icon1.png" alt="icon" width="60px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@getbootstrap">Add Notes
            <!-- <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span role="status">Loading...</span> -->
        </button>
        <!-- Modal Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Notes Here</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_task.php" method="POST"> <!-- Form Data Sent -->
                            <div class="mb-2">
                                <label for="title" class="form-label"><b>Title</b></label>
                                <input type="text" class="form-control" id="title" name="t_name" required>
                                <br>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label"><b>Description</b></label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="desce"
                                    name="t_desc" rows="5"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color: red;">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="Add">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Creation Time</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2" class="text-left" style="padding-left: 4%;">ACTIONS</th>
                </tr>
            </thead>
            <tbody class='p-3 mb-2 bg-light'>
             <?php

                $result = $ob->getAllTask();

                // while ($row = mysqli_fetch_array($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <th scope='row'>".$row['id']."</th>
                    <td>".date('[d-m-Y] [h:i A]', strtotime($row['created_at']))."</td>
                    <td>".$row['task_name']."</td>
                    <td>".$row['task_description']."</td>
                    <td>
                        <div class='btn-group mr-2'>
                            <a href='update_task.php?id=".$row['id']."' class='btn btn-success'>UPDATE</a>
                            <a href='delete_task.php?id=".$row['id']."' class='btn btn-danger'>DELETE</a>
                        </div>
                    </td>
                </tr>";
            

                }
                // <button type='button' class='btn btn-success'>Update</button>
                // $rearrange_query = "Set @autoid :=0; update todo set id = @autoid := (@autoid+1); alter table todo AUTO_increment = 1";
             ?>
                <tr>
                    <th scope="row">🐵</th>
                    <td>Author: Michael Gomes</td>
                    <td>Buy me a Coffee</td>
                    <td>follow me @Discord</td>
                    <td>follow me @Linkdin</td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Footer -->

</body>
</html>

<!-- <div class="b-example-divider"></div> -->

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023-2024 8 Notes Company, Inc</p>
  </footer>
</div>

<!-- <div class="b-example-divider"></div> -->
