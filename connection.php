 <!-- SWEET ALERT LINKS -->
 <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zigmtodo";

$conn = new mysqli($servername, $username, $password, $dbname);

// $id = 0;
$update =false;
$Note = '';
$Title = '';




trait CRUD {



    public function insert() {


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zigmtodo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $Note = $_POST['Note'];
        
        $Title = $_POST['Title'];
 
   
        $conn->query("INSERT INTO zigmtodo (Title,Note) VALUES 
        ('$Title','$Note')") or die ($conn->error);
    
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "Success";
        
        header("location: index.php");

     
    }






    public function delete(){


        //DELETE


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "zigmtodo";

            $conn = new mysqli($servername, $username, $password, $dbname);


            $id = $_GET['delete'];


            $conn->query("DELETE FROM zigmtodo WHERE ID='$id'") or die($conn->error);

            $_SESSION['message'] = "Record has been deleted!";
            $_SESSION['msg_type'] = "danger";

            // INSERT TO TRASH 

            $note = $_GET['note'];
            $title= $_GET['title'];
            $conn->query("INSERT INTO trash (Title,trash) VALUES 
            ('$title','$note')") or die ($conn->error);


            header("location: index.php");

        
    }

    //ON TRASH FUNCTION

    public function restore(){



        //RESTORE
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "zigmtodo";

            $conn = new mysqli($servername, $username, $password, $dbname);


            $id = $_GET['restore'];


            $conn->query("DELETE FROM trash WHERE ID='$id'") or die($conn->error);

            $_SESSION['message'] = "Record has been saved!";
            $_SESSION['msg_type'] = "Success";

            // INSERT TO HOME/ RESTORE BACK

            $restore = $_GET['restore'];

            $trash = $_GET['trash'];
            $title = $_GET['Title'];

            $conn->query("INSERT INTO zigmtodo (Title,Note) VALUES 
            ('$title','$trash')") or die ($conn->error);
            
            

            header("location: trash.php");


      
          
    }

    public function displayonTrash(){



                $dbname = "zigmtodo";
                $servername = "localhost";
                $username = "root";
                $password = "";
                        
                $conn = new mysqli($servername, $username, $password, $dbname);


                $Note = $_POST['Note'];
                $Title = $_POST['Title'];


                $conn->query("INSERT INTO trash (Title,Note) VALUES 
                ($Title,'$Note')") or die ($conn->error);

                $_SESSION['message'] = "Record has been saved!";
                $_SESSION['msg_type'] = "Success";

                header("location: trash.php");


    }





  }
  
  class execute {
    use CRUD;
  }



//INSERT

if (isset($_POST['submit'])){

    $insert = new execute();
    $insert->insert();   

}


if (isset($_GET['delete'])){

    $delete = new execute();
    $delete->delete();  

}

if (isset($_GET['restore'])){

    $restore= new execute();
    $restore->restore();  

}


if (isset($_POST['restore'])){


    $displayonTrash= new execute();
    $displayonTrash->displayonTrash();  

}













//EDIT

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update =true;
    $result = $conn->query("SELECT * FROM zigmtodo WHERE ID ='$id'")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();

        $Note= $row['Note'];
        $Title= $row['Title'];
      
    }
}

//UPDATE
if (isset($_POST['update'])){

    $id = $_POST['id'];

    $note = $_POST['Note'];

    $Title = $_POST['Title'];
    
    $conn->query("UPDATE zigmtodo SET Title = '$Title',Note='$note' WHERE ID = '$id' ")  or die($mysqli->error);

    $_SESSION['message'] = "Record updated successfully!";
    $_SESSION['msg_type']= "warning";

    header("location: index.php");
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





  



?>

