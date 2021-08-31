<?php require_once '../app/config.php'; ?>     

<?php
include('../inc/header.php');  ?>     

    <div class="jumbotron p-2 m-4">
        <h3 class=""> 
            <a class="btn btn-success btn-lg" href="<?php echo URL.'categories/add.php'; ?>" role="button">Add New Category </a>
        </h3>
    </div>
    <h1 class=" p-3 border display-4">  All Categories  </h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>First </td>
                        <td>
                            <a href="#" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger">Delete <i class="bi bi-x-square-fill"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Second</td>
                        <td>
                            <a href="#" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger">Delete <i class="bi bi-x-square-fill"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Third</td>
                        <td>
                            <a href="#" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger">Delete <i class="bi bi-x-square-fill"></i></a>
                        </td>
                    </tr>
                </tbody>
                </table>

               
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

<?php include('../inc/footer.php'); ?>     




