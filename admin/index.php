<?php
include './header.php';
include("config.php");
session_start();
if (!isset($_SESSION['login_admin'])) {
    header("Location:adminlogin.php");
}else{
// if (isset($_POST['add'])) {
//     $name = $_POST['bookname'];
//     $author = $_POST['author'];
//     $edition = $_POST['edition'];
//     $file = $_POST['file'];


//     $query = mysqli_query($con, "INSERT INTO `#` SET `bookname`='$name',`author`='$author',`edition`='$edition',`file`='$file' ");
//     if ($query) {
//         echo "<script>alert('Book Inserted');
//                       window.location.href='index.php';</script>";
//     } else {
//         echo "<script>alert('Failed.! Try Again..');
//                       window.location.href='index.php';</script>";
//     }
// }
//

?>
<div class="background">
    <div>

        <div class="container mt-55">
            <section class="row mt-5 mb-5">
                <!-- Admin Data -->
                <div class="col order-first">
                    <div class="card" style="width: 15rem; height:22rem; padding:5px; margin-bottom:30%; margin-top:30%">
                        <img src="../assets/img/admin.jpg" height="220px" width="30%" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Admin Data</h5>
                            <a href="admindata.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <!-- All Books -->
                <div class="col order-first">
                    <div class="card" style="width: 15rem; height:22rem; padding:5px; margin-bottom:30%; margin-top:30%">
                        <img src="../assets/img/books.jpg" height="220px" width="100%" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">All Books</h5>
                            <a href="books.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <!-- Add Books -->
                <div class="col order-first">
                    <div class="card" style="width: 15rem; height:22rem; padding:5px; margin-bottom:30%; margin-top:30%">
                        <img src="../assets/img/add book.jpg" height="220px" width="100%" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Add Books</h5>

                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Add</a>
                        </div>
                    </div>
                </div>
                <!-- Manage Students -->
                <div class="col order-first">
                    <div class="card" style="width: 15rem; height:22rem; padding:5px; margin-bottom:30%; margin-top:30%">
                        <img src="../assets/img/student.jpg" height="220px" width="100%" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Manage Students</h5>
                            <a href="manage.php" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD BOOK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    if (isset($_POST['add'])) {
                        $name = $_POST['name'];
                        $author = $_POST['author'];
                        $edition = $_POST['edition'];
                        $department = $_POST['department'];
                        $pdf = rand();
                        $targetfolder = "books/$department/";
                        $targetfolder = $targetfolder . basename( $_FILES['file']['name']);
                        
                       if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
                       
                        {
                       
                        echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
                        echo "<script>alert('File uploaded!');
                        window.location.ref='index.php';</script>";
                       
                        }
                       
                        else {
                       
                            echo "<script>alert('Something wents wrong!');
                            window.location.ref='index.php';</script>";
                       
                        }
                    

                        $query = mysqli_query($con, "INSERT INTO `$department` (`bookname`,`author`,`edition`,`file`) VALUES ('$name','$author','$edition','$targetfolder')");
                    }
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" style="color:black; width:100%; position:relative; border: none; outline: none;" name="name" value="" placeholder="Book Title"><br />

                        <div class="line-box">
                        </div><br /><br />

                        <input type="text" style="color:black; width:100%; position:relative; border: none; outline: none;" name="author" value="" placeholder="Book Author"><br />

                        <div class="line-box">
                        </div><br /><br />

                        <input type="text" style="color:black; width:100%; position:relative; border: none; outline: none;" name="edition" value="" placeholder="Edition"><br />

                        <div class="line-box">
                        </div><br /><br />

                        <select name="department">
                            <option selected disabled value="">Department</option>
                            <option value="computer">Computer</option>
                            <option value="management">Management</option>
                            <option value="magazine">Magazine</option>
                            <option value="journal">Journal</option>
                            <option value="thesis">Thesis</option>
                        </select><br><br>

                        <input type="file" name="file" value="Browse">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
 include("footer.php");
                }
 ?>