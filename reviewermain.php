<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>International Conference Management System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->
</head>
<body>
</body>
</html>
<h2> Submissions</h2>
<?php
    session_start();
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection,'authentication');
    $cn=$_SESSION['con'];
    $data="select * from credentials where conference_id='$cn'";
    $ans=mysqli_query($connection,$data);
    while($cb=mysqli_fetch_array($ans))
    {
        echo $cb['User_id']." ".$cb['Fname']." ".$cb["Lname"]." ";
        if($cb['report']==NULL)
        {
            echo "NULL ";
        }
        else
        {
            $url = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';   
            $string= preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $cb['report']);
            echo $string;
            echo "      ";
            //header('Location: '.$row['Pdf']);
            // echo (,"Report");
            // https://stackoverflow.com/questions/1960461/convert-plain-text-urls-into-html-hyperlinks-in-php
        }
        if($cb['review_status']==NULL)
        {
            echo "NULL ";
        }
        else
        {
            echo $cb['review_status']."     ";
        }
        echo"<br>";
    }
    //echo "error incorrect email or password";
?>
<h2> Make Review - </h2>
<h3> type 1 for under review</h3>
<h3> type 2 for accepted</h3>
<h3> type 3 for rejected</h3>
<form action="addreview.php" method="post">
		<!-- <h2>Login</h2> --> 
		<hr>
        <div class="form-group">
        	<input type="text" class="form-control" name="user_id" placeholder="Enter User id" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="typ" placeholder="Enter type" required="required">
        </div>
        <!-- <div class="form-group">
        	<input type="text" class="form-control" name="review" placeholder="Add review" required="required">
        </div> -->
        <div class="form-group">    
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
    <form action="reviewerlogin.php" method="post">
    <div class="form-group">    
        <button type="submit" class="btn btn-primary btn-lg">Logout</button>
    </div> 
    </form>